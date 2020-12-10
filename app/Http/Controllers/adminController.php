<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index() {
        return view('adminPanel');

    }

    public function addProduct(){
        return view('addProduct');
    }

    public function listProductPage(){
        
        $Product = Product::all();

        return view('listProduct', ['Product' => $Product]);
    }

    public function addCategoryPage(){
        return view('addCategory');
    }

    public function listCategoryPage(){

        $Product = Product::all();
        $Category = Category::all();

        return view('listCategory', ['Product' => $Product], ['Category' => $Category]);
    }
}
