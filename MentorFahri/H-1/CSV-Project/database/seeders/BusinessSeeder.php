<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::truncate();
        $csvData = fopen(base_path('public/csv/machine-readable-business-employment-data-mar-2023-quarter.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Business::create([
                    'series_reference' => $data['0'], 
                    'period' => $data['1'],
                    'data_value' => $data['2'],
                    'suppressed' => $data['3'],
                    'status' => $data['4'],
                    'units' => $data['5'],
                    'magnitude' => $data['6'],
                    'subject' => $data['7'],
                    'group' => $data['8'],
                    'series_title_1' => $data['9'],
                    'series_title_2' => $data['10'],
                    'series_title_3' => $data['11'],
                    'series_title_4' => $data['12'],
                    'series_title_5' => $data['13'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
