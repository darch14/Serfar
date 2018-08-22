<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Validator;

class ContactLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SerfarL.ContactL');
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
      $data = [
        'nombre' =>$request->input('nombre'),
        'empresa' =>$request->input('empresa'),
        'correo' =>$request->input('correo'),
        'telefono' =>$request->input('telefono'),
        'mensaje' =>$request->input('mensaje'),
      ];
      $rules = [
        'nombre' => 'required',
        'empresa' => 'required',
        'correo' => 'required|email|max:255',
        'telefono' => 'required',
        'mensaje' => 'required'
      ];
      $messages = [
        'nombre.required' => 'El Nombre es requerido',
        'empresa.required'  => 'La Empresa es requerida',
        'correo.required' => 'El Correo es requerido',
        'telefono.required'  => 'La Telefono es requerido',
        'mensaje.required' => 'La Descripción es requerido'
      ];
      //$this->validate($request, $rules, $messages);
      $validator = Validator::make($data, $rules, $messages);

      if ($validator -> fails()) {
        return redirect()->back()
          ->withErrors($validator->errors())
          ->withInput(/*Request::except('')*/);
      }else {
        //return $request->input('nombre');
        Mail::send('SerfarL.emailL', $request->all(), function($msj){
          $msj->subject('Solicitud Pagina Web Serfar');
          $msj->to('web.serfar@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return back();
      }

      //returna con valores // return redirect('form')->withInput($request->except('Asunto'));
      //retorna una ruta resourse // return Redirect::to('/ContactL');
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
