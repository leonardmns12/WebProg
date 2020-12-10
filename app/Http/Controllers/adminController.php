<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() {
        return view('adminPanel');

    }

    public function addProduct(){
        return view('addProduct');
    }

    public function listProductPage(){
        return view('listProduct');
    }

    public function addCategoryPage(){
        return view('addCategory');
    }

    public function listCategoryPage(){
        return view('listCategory');
    }
}
