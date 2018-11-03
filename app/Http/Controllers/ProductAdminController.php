<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\brand;
use Serfar\laboratory;
use Serfar\product;
use Serfar\proimage;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::orderBy('id', 'ASC')->paginate(8);
        
        // $product->pro_image = $image;

        return view('SerfarL.Authentication.Products.ProductAdminList')
              ->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = brand::orderBy('id', 'ASC')->paginate(8);
        
        return view('SerfarL.Authentication.Products.ProductAdminRegistration')
                ->with('brand', $brand)
                ->with('render', $brand->render());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product($request->all());

        $file = $request->file('file');
        $name = 'product_' . time() . '.' . $file->getClientOriginalName();
        $path = public_path() . '\images\prod';
        $file->move($path, $name);
        // dd($name);

        $image = new proimage();
        $image->name = $name;
        $product->save();
        // dd($image);
        $image->product_id = $product->id;
        $image->save();

        return redirect()->route('ProductAdmin.index')
            ->with('notification', $product->name . ' '. 'se a guardado satisfactoriamente!');
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
