<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'name','email','fav_product'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'fav_product');
    }
}
