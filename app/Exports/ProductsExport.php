<?php

namespace Serfar\Exports;

use Serfar\product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProductsExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('SerfarL.Authentication.Export.Product-Export', [
            'products' => product::all()
        ]);
    }

}
