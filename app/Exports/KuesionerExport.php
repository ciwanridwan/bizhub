<?php

namespace App\Exports;

use App\Kuesioner;
use Maatwebsite\Excel\Concerns\FromCollection;

class KuesionerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kuesioner::all();
    }
}
