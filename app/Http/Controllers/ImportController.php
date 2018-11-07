<?php

namespace Serfar\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Serfar\Imports\AdvisorsImport;
use Serfar\advisor;
use Serfar\image;
use Serfar\product;
use Serfar\proimage;
use Serfar\brand;
use Serfar\laboraty;
use Serfar\labimage;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SerfarL.Authentication.Import.Import-index');
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
      $file = $request->file('file');
      // dd($file);
      $name = 'Import_' . time() . $file->getClientOriginalName();
      $path = storage_path('app');
      $file->move($path, $name);

      if ($request->Input('data') == 'E') {
        $collection = Excel::toArray(new AdvisorsImport, $name);

        for ($i=1; $i < count($collection[0]); $i++) {
          $advisor = new advisor();
          $advisor->name = $collection[0][$i][0];
          $advisor->lastname1 = $collection[0][$i][1];
          $advisor->lastname2 = $collection[0][$i][2];
          $advisor->position = $collection[0][$i][3];
          $advisor->email = $collection[0][$i][4];
          $advisor->number = $collection[0][$i][5];

          $advisor->save();

          $img = new image();

          $img->name = $collection[0][$i][6];
          $img->advisor_id = $advisor->id;

          $img->save();
        }

        // Excel::import(new AdvisorsImport, $name);
      }else if ($request->Input('data') == 'P') {
        $collection = Excel::toArray(new ProductsImport, $name);

        for ($i=1; $i < count($collection[0]); $i++) {
          $lab = new laboraty();
          $lab->name = $collection[0][$i][6];
          $lab->web = $collection[0][$i][7];

          $lab->save();

          $labimage = new labimage();
          $labimage->name = $collection[0][$i][8];
          $labimage->laboratory_id = $lab->id;

          $labimage->save();

          $brand = new brand();
          $brand->laboratory_id = $lab->id;
          $brand->name = $collection[0][$i][9];

          $brand->save();

          $product = new product();
          $product->name = $collection[0][$i][0];
          $product->description = $collection[0][$i][1];
          $product->catagory = $collection[0][$i][2];
          $product->unit = $collection[0][$i][3];
          $product->brand_id = $brand->id;

          $product->save();

          $proimage = new proimage();
          $proimage->name = $collection[0][$i][5];
          $proimage->product_id = $product->id;

          $product->save();
        }
      }
      $info = 'Se importo con exito';

      return view('SerfarL.Authentication.Import.Import-index')
            ->with('info', $info);
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
