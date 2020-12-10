@extends('layouts.adminBar')

@section('content')
    <div id="Product_form" > <!--d-flex membuat title dan form bersebelahan. Bingung mau center content gimana-->
        <h1 class="d-flex justify-content-center">This is the Product Form</h1>
        </br>
        <form action="">
            <h5 class="d-flex justify-content-center mt-3">Name</h5>
            <div class="d-flex justify-content-center">
                <input type="text" placeholder="Product Name" class="d-flex justify-content-center w-50">
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Category</h5>
            <div class="dropdown" class="d-flex justify-content-center">
                <button class="btn btn-secondary dropdown-toggle w-50" type="button" id="categoryDropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu w-50" aria-labelledby="categoryDropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <h5 class="d-flex justify-content-center mt-3">Description</h5>
            <div class="d-flex justify-content-center">
                <input type="text" placeholder="Product Description" class="d-flex justify-content-center w-50">
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Price</h5>
            <div class="d-flex justify-content-center">
                <input type="text" placeholder="Product Price" class="d-flex justify-content-center w-50">
            </div>
            
            <h5 class="d-flex justify-content-center mt-3">Choose file</h5>
            <div class="d-flex justify-content-center">
                <input class="" type="file" id="" name="">
            </div>
            
            </br>
            </br>
            <div class="d-flex justify-content-center">
                <button class="bg-primary text-white d-flex justify-content-center">Add Product</button>
            </div>
            
        </form>
    </div>
@endsection