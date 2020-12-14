<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

        $Product = null;
        $Category = Category::all();

        return view('listCategory', ['Product' => $Product], ['Category' => $Category]);
    }

    public function listCategoryPageWithProducts($id){

        $Category = Category::all();
        $Product = Product::where('category', $id)->get();

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
            'price' => 'required|numeric|min:100',
            'image' => 'required|file|max:10000'

        ]);
        $storage = storage_path('images');
        $fileName = $request->file('image')->getClientOriginalName();
        if(!File::isDirectory($storage)){
        File::makeDirectory($storage, 0777, true, true);
        }
        Storage::putFileAs('images', $request->file('image'), $fileName);
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = 'images/' .$fileName;
        $product->save();

        return redirect()->back();
    }

    public function deleteProduct($id){

        $Product = Product::find($id);

        Storage::delete($Product->image);
        $Product->delete();

        $Product = Product::all();

        return view('listProduct', ['Product' => $Product]);

    }
}
