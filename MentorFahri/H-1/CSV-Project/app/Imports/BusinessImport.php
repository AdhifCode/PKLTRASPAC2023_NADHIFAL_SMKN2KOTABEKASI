<?php

namespace App\Imports;

use App\Models\Business;
use Maatwebsite\Excel\Concerns\ToModel;

class BusinessImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Business([
            'series_reference' => $row['0'], 
                    'period' => $row['1'],
                    'data_value' => $row['2'],
                    'suppressed' => $row['3'],
                    'status' => $row['4'],
                    'units' => $row['5'],
                    'magnitude' => $row['6'],
                    'subject' => $row['7'],
                    'group' => $row['8'],
                    'series_title_1' => $row['9'],
                    'series_title_2' => $row['10'],
                    'series_title_3' => $row['11'],
                    'series_title_4' => $row['12'],
                    'series_title_5' => $row['13'],
        ]);
    }
}
