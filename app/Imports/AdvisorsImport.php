<?php

namespace Serfar\Imports;

use Serfar\advisor;
use Maatwebsite\Excel\Concerns\ToModel;

class AdvisorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new advisor([
          'name'         => $row[0],
          'lastname1'    => $row[1],
          'lastname2'    => $row[2],
          'position'     => $row[3],
          'email'        => $row[4],
          'number'       => $row[5]
        ]);
    }
}
