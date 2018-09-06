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
        $advisor = advisor::orderBy('id', 'ASC')->paginate(5);
        /*$advisor->each(function(){
          $advisor->images;
        });*/

        return view('SerfarL.Authentication.Advisors.AdvisorList')
              ->with('advisor', $advisor);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SerfarL.Authentication.Advisors.AdvisorRegistration');
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

      return redirect()->route('Advisor.index')->with('notification', $asesor->name .' '. $asesor->lastname1 . ' Se a Guardado satisfactoriamente!');
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
        $advisor = advisor::orderBy('name', 'DESC')->lists('name', 'id');

        return view('SerfarL.Authentication.Advisors.AdvisorEdit')
            ->with($advisor);
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
