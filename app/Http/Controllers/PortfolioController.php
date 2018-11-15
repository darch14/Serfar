<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Serfar\product;

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

      return view('SerfarL.Portfolio')
            ->with('product', $product)
            ->with('validIndex', 'NO')
            ->with('fondo1', "data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==");
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
        
    }

}
