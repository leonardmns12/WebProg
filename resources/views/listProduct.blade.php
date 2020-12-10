@extends('layouts.adminBar')

@section('content')
    <div id="container">
        <h1 class="d-flex justify-content-center">Products</h1>
        <div class="d-flex justify-content-center">
            <table class="table w-75 border">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Product Description</th>
                        <th></th>
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
                        <td><button class="w-75 border-0 bg-danger text-white">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
        
    </div>
@endsection