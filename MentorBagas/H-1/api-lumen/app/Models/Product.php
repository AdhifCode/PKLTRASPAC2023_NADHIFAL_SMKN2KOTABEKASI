<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title','price','photo','description'
    ];

    public function customer(){
        return $this->hasMany(Customer::class, 'id');
    }
    
}
