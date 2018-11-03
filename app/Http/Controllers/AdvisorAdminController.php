<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\advisor;
use Serfar\image;
use Illuminate\Support\Facades\Storage;
use File;

class AdvisorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisor = advisor::orderBy('id', 'ASC')->paginate(5);
        
        return view('SerfarL.Authentication.Advisors.AdvisorAdminList')
              ->with('advisor', $advisor);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SerfarL.Authentication.Advisors.AdvisorAdminRegistration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $asesor = new advisor($request -> all());
      //dd($asesor);

      $file = $request->file('file');
      $name = 'Asesor_' . time() . '.' . $file->getClientOriginalName();
      $path = public_path() . '\images\asesores';
      $file->move($path, $name);
      //dd($name);

      $image = new image();
      $image->name = $name;
      //dd($asesor);
      $asesor->save();
      //dd($asesor->id);
      $image->advisor_id = $asesor->id;
      $image->save();

      return redirect()->route('AdvisorAdmin.index')->with('notification', $asesor->name .' '. $asesor->lastname1 . ' Se a Guardado satisfactoriamente!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advisor = advisor::find($id);

        return view('SerfarL.Authentication.Advisors.AdvisorAdminEdit')
            ->with('advisor', $advisor);
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
        $advisor = advisor::find($id);
        $images = $advisor->images()->where('advisor_id', $advisor->id)->get();
        //dd($advisor);

        $advisor->update($request->all());

        if (!empty($request->file)) {
            $file = $request->file('file');
            $name = 'Asesor_' . time() . '.' . $file->getClientOriginalName();
            $path = public_path() . '\images\asesores';
            $file->move($path, $name);
            Storage::delete($images[0]->name);

            $images[0]->update(['name' => $name]);
        }

        return redirect()->route('AdvisorAdmin.index')->with('notification', $advisor->name .' '. $advisor->lastname1 . ' Se a Actualizo satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisor = advisor::find($id);
        $advisor->delete();
        //dd('destroy');
        return redirect()->route('AdvisorAdmin.index')->with('notification', $advisor->name .' '. $advisor->lastname1 . ' Se a Elimino satisfactoriamente!');
    }
}
