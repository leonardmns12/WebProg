@extends('layouts.adminBar')

@section('content')
    <div>
        <div id="Categories">
            <h1 class="d-flex justify-content-center">Category</h1>
            @foreach($Category as $category)
            <div class="m-auto border w-75 p-2"><h4 class="d-flex justify-content-center">{{$category->name}}</h4></div>
            @endforeach
        </div>
        
        <div id="Products" class="mt-4">
            <h1 class="d-flex justify-content-center">Products</h1>
            <div class="d-flex justify-content-center">
                <table class="table w-75 mt-3">
                    <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Product as $product)
                        <tr>
                            <td>{{$product->id}}</td> <!--Product Id-->
                            <td><img src="{{asset($product->image)}}" alt=""></td> <!--Image-->
                            <td>{{$product->name}}</td> <!--Product Name-->
                            <td>{{$product->category}}</td> <!--Product Category--> <!--To Do: Fix how to display name-->
                            <td>Rp.{{$product->price}}</td> <!--Product Price-->
                            <td>{{$product->description}}</td> <!--Product Description-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection