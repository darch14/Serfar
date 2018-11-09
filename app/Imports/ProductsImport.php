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
            'reference'    => $row[0],
            'name'         => $row[1],
            'description'  => $row[2],
            'category'     => $row[3],
            'use'          => $row[4],
            'invima'       => $row[5],
            'unit'         => $row[6],
        ]);
    }
}
