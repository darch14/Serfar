<?php

namespace Serfar\Exports;

use Serfar\product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{

    public function view(): View
    {
        return view('SerfarL.Authentication.Export.Product-Export', [
            'products' => product::all()
        ]);
    }

}
