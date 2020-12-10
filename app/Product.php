<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = [
        "user",
        "product",
        "quantity"
    ];

    public function Category(){
        return $this->belongsTo(Category::Class, 'category');
    }
}
