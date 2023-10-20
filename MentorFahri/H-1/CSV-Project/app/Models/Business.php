<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'series_reference', 
        'period',
        'data_value',
        'suppressed',
        'status',
        'units',
        'magnitude',
        'subject',
        'group',
        'series_title_1',
        'series_title_2',
        'series_title_3',
        'series_title_4',
        'series_title_5',
    ];
}
