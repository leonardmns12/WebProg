<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use App\DetailTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    //
    public function index() {
        $Cart = Cart::where('user' , Auth::id())->get();
        if($Cart->count() > 0){
            return view('cart', ["Cart" => $Cart , "pages" => "cart"]);
        } else {
            return view('cart', ["Cart" => null , "pages" => "cart"]);
        }
    }

    public function deleteCart($id) {
        $Cart = Cart::find($id);
        $Cart->delete();
        $Cart = Cart::all();
        return view('cart', ["Cart" => $Cart , "pages" => "cart"]);
    }

    public function checkout() {
        $Cart = Cart::where('user', Auth::id())->get();
        $Transaction = Transaction::create(["user" => Auth::id()]);
        foreach($Cart as $cart) {
            $dt = new DetailTransaction;
            $dt->transaction_id = $Transaction->id;
            $dt->product = $cart->product;
            $dt->quantity = $cart->quantity;
            $dt->save();
        }
        $Cart = DB::table('carts')->where('user' , Auth::id())->delete();
        return view('cart', ["Cart" => null , "pages" => "cart"]);
    }
}
