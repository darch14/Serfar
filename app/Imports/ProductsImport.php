<?php

namespace Serfar\Imports;

use Serfar\product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new product([
            'name'         => $row[0],
            'description'  => $row[0],
            'category'     => $row[0],
            'unit'         => $row[0],
        ]);
    }
}
