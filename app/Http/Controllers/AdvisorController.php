<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\advisor;
use Serfar\image;
use Illuminate\Support\Facades\Storage;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SerfarL.Authentication.AdvisorRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
      //$image->advisors()->associate($asesor);
      $asesor->save();
      //dd($asesor->id);
      $image->advisor_id = $asesor->id;
      $image->save();

      return redirect()->route('login')->with('notification', $asesor->name .' '. $asesor->lastname1 . ' Se a Guardado satisfactoriamente!');
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
