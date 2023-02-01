<?php

namespace App\Imports;

use App\Models\Vente;
use Maatwebsite\Excel\Concerns\ToModel;

class VentesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vente([
            //
        ]);
    }
}
