<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\labimage;
use Serfar\laboratory;
use Illuminate\Support\Facades\Storage;
use File;

class LaboratoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratory = laboratory::orderBy('id', 'ASC')->paginate(5);
        if (empty($laboratory)) {
            $images = laboratory::find(1)->lab_images;
            $laboratory->lab_images = $images;
        }

        return view('SerfarL.Authentication.Laboratory.laboratoryAdminList')
              ->with('laboratory', $laboratory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SerfarL.Authentication.Laboratory.laboratoryAdminRegistration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratory = new laboratory($request -> all());
        // dd($laboratory);

        $file = $request->file('file');
        $name = 'Laboratory_' . time() . '.' . $file->getClientOriginalName();
        $path = public_path() . '\images\Labs';
        $file->move($path, $name);
        // dd($name);

        $image = new labimage();
        $image->name = $name;
        $laboratory->save();
        // dd($image);
        $image->laboratory_id = $laboratory->id;
        $image->save();

        return redirect()->route('LaboratoryAdmin.index')->with('notification', $laboratory->name . ' ' . ' Se a Guardado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratory = laboratory::find($id);
        // dd($laboratory);
        // $laboratory = laboratory::find($id);

        return view('SerfarL.Authentication.Laboratory.laboratoryAdminEdit')
            ->with('laboratory', $laboratory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $laboratory = laboratory::find($id);
      $lab_image = $laboratory->lab_images()->where('laboratory_id', $laboratory->id)->get();
      
      $laboratory->update($request->all());

      if (!empty($request->file)) {
        $file = $request->file('file');
        $name = 'Laboratory_' . time() . '.' . $file->getClientOriginalName();
        $path = public_path() . '\images\Labs';
        $file->move($path, $name);
        Storage::delete($lab_image[0]->name); 

        $lab_image[0]->update(['name' => $name]);
      }

      return redirect()->route('LaboratoryAdmin.index')->with('notification', $laboratory->name .' '. ' Se a Actualizo satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboratory = laboratory::find($id);
        $lab_image = $laboratory->lab_images()->where('laboratory_id', $id)->get();
        /*$file = public_path() . '\images\Labs\\' . $lab_image[0]->name;
        File::Delete('/images/Labs/' . $lab_image[0]->name);*/
        $laboratory->delete();
        //dd('destroy');
        return redirect()->route('LaboratoryAdmin.index')->with('notification', $laboratory->name . ' ' . ' Se a Elimino satisfactoriamente!');
    }
}
