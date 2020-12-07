@extends('layouts.adminBar')

@section('content')
    <div id="Product_form" class="d-flex justify-content-center"> <!--d-flex membuat title dan form bersebelahan. Bingung mau center content gimana-->
        <h1>This is the Product Form</h1>
        </br>
        <form action="">
            <h5>Name</h5>
            <input type="text" placeholder="Product Name">
            <h5>Category</h5>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="categoryDropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="categoryDropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <h5>Description</h5>
            <input type="text" placeholder="Product Description">
            <h5>Price</h5>
            <input type="text" placeholder="Product Price">
            <h5>Choose file</h5>
            <input type="file" id="" name="">
            </br>
            </br>
            <button>Add Product</button>
        </form>
    </div>
@endsection