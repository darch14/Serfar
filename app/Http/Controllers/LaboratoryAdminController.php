<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\labimage;
use Serfar\laboratory;
use Illuminate\Support\Facades\Storage;

class LaboratoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = labimage::orderBy('id', 'ASC')->paginate(5);

        return view('SerfarL.Authentication.Laboratory.laboratoryAdminList')
              ->with('images', $images);
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
        $image->laboratories_id = $laboratory->id;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
