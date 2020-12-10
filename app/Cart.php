<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $timestamps = false;

    public function Product(){
        return $this->belongsTo(Product::class , 'product');
    }
}
