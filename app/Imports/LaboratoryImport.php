<?php

namespace Serfar\Imports;

use Serfar\laboratory;
use Maatwebsite\Excel\Concerns\ToModel;

class LaboratoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new laboratory([
            'name'   => $row[0],
            'web'    => $row[0],
        ]);
    }
}
