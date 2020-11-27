<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Cart = Cart::where('user' , Auth::id())->get();
        $Product = Product::paginate(3);
        return view('home' , ["Product" => $Product, "Cart" => $Cart]);
    }
    public function find(Request $req) {
        $name = $req->name;
        $Product = DB::table('products')->where('name' , 'like' , '%'.$name.'%')
        ->paginate();

        return view('home' , ["Product" => $Product]);
    }
    public function detail($id) {
        $Product = Product::find($id);
        return view('detail' , ['Product' => $Product]);
    }
}
