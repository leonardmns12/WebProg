<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    //
    protected $fillable = [
        "transaction_id",
        "product",
        "quantity"
    ];

    public $timestamps = false;

    public function Product(){
        return $this->belongsTo(Product::class , 'product');
    }
}
