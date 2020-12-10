@extends('layouts.adminBar')

@section('content')
    <div id="Product_form" > <!--d-flex membuat title dan form bersebelahan. Bingung mau center content gimana-->
        <h1 class="d-flex justify-content-center">This is the Product Form</h1>
        </br>
        <form METHOD="POST" action="/addProduct" enctype="multipart/form-data">
            @csrf
            <h5 class="d-flex justify-content-center mt-3">Name</h5>
            <div class="d-flex justify-content-center">
                <input class="d-flex justify-content-center w-50" type="text" placeholder="Product Name" name="name" >
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Category</h5>
            <div class="d-flex justify-content-center">
                
                <select class=" w-50" aria-labelledby="categoryDropdownMenuButton" name="category">
                    @foreach($Category as $category)
                    <option class="" href="#" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <h5 class="d-flex justify-content-center mt-3">Description</h5>
            <div class="d-flex justify-content-center">
                <input class="d-flex justify-content-center w-50" type="text" placeholder="Product Description" name="description">
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Price</h5>
            <div class="d-flex justify-content-center">
                <input class="d-flex justify-content-center w-50" type="number" placeholder="Product Price" name="price">
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Choose file</h5>
            <div class="d-flex justify-content-center">
                <input class="" type="file" id="" name="image">
            </div>
            
            </br>
            </br>
            <div class="d-flex justify-content-center">
                <button class="bg-primary text-white d-flex justify-content-center" type="submit" name="submit">Add Product</button>
            </div>
            
        </form>
    </div>
@endsection