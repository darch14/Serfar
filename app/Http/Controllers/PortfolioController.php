<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\product;
use Serfar\laboratory;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = product::orderBy('id', 'ASC')->get();
      $laboratory = laboratory::orderBy('id', 'ASC')->get();

      return view('SerfarL.Portfolio')
            ->with('product', $product)
            ->with('laboratory', $laboratory)
            ->with('validIndex', 'NO')
            ->with('nav', 'portafolio')
            ->with('fondo1', asset('images/fondos/quimicos.jpg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product = product::find($id);

        return view('SerfarL.PortfolioDetail')
              ->with('product', $product)
              ->with('validIndex', 'NO')
              ->with('fondo1', "data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = product::orderBy('id', 'ASC');
      $laboratory = laboratory::orderBy('id', 'ASC')->get();

      if (!empty($request->name)) {
        $product = $product->where('name', $request->name);
      }
      if ($request->category != "null") {
        $product = $product->where('category', $request->category);
      }
      if ($request->lab != "null") {
        $product = $product->where('laboratory_id', $request->lab);
      }
      $product = $product->get();

      return view('SerfarL.Portfolio')
            ->with('product', $product)
            ->with('laboratory', $laboratory)
            ->with('validIndex', 'NO')
            ->with('nav', 'portafolio')
            ->with('fondo1', asset('images/fondos/quimicos.jpg'));

    }

}
