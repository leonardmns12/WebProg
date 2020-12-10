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

    public function addProductPage(){

        $Category = Category::all();

        return view('addProduct', [ 'Category' =>$Category]);
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

    public function addCategory(Request $request){

        $this->validate($request, [
            "name" => 'required'
        ]);

        $category = new Category;

        $category->name = $request->name;

        $category->save();

        return redirect()->back();
    }

    public function addProduct(Request $request){

        $this->validate($request, [ //TODO: Complete the validation process
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|min:100',
            'image' => 'required|max:10000'

        ]);

        $product = new Product;

        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;

        $product->save();

        return redirect()->back();

    }

    public function deleteProduct($id){

        $Product = Product::find($id);
        $Product->delete();

        $Product = Product::all();

        return view('listProduct', ['Product' => $Product]);

    }
}
