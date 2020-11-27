<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use App\Product;

class ProductController extends Controller
{
    //
    public function cart(Request $req) {
        $Product = new Cart;
        $Product->user = Auth::id();
        $Product->product = 1;
        $Product->quantity = $req->quantity;
        $Product->save();
        $p = Product::paginate(3);
        $Cart = Cart::where('user' , Auth::id());
        return view('home' , ["Product" => $p, "Cart" => $Cart]);
    }
}

