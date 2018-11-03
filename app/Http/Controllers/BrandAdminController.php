<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\laboratory;
use Serfar\brand;

class BrandAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brand::orderBy('id', 'ASC')->paginate(8);
        
        // dd('index');
        return view('SerfarL.Authentication.brands.BrandAdminList')
              ->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratory = laboratory::orderBy('id', 'ASC')->paginate(5);
        
        // dd($laboratory->render());
        return view('SerfarL.Authentication.Brands.BrandAdminRegistration')
            ->with('laboratory', $laboratory)
            ->with('render', $laboratory->render());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new brand($request->all());

        $brand->save();

        return redirect()->route('BrandAdmin.index')
            ->with('notification', $brand->name . ' '. 'se a guardado satisfactoriamente!');

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
        $brand = brand::find($id);
        // dd($laboratory);
        // $laboratory = laboratory::find($id);
        $laboratory = laboratory::orderBy('id', 'ASC')->paginate(5);
        

        return view('SerfarL.Authentication.Brands.BrandAdminEdit')
            ->with('brand', $brand)
            ->with('laboratory', $laboratory)
            ->with('render', $laboratory->render());
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
        $brand = brand::find($id);

        $brand->update($request->all());

        return redirect()->route('BrandAdmin.index')->with('notification', $brand->name .' '. ' Se a Actualizo satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = brand::find($id);

        $brand->delete();
        
        return redirect()->route('BrandAdmin.index')->with('notification', $brand->name . ' ' . ' Se a Elimino satisfactoriamente!');
    }
}
