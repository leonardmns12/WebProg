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
                        <td><img src="{{asset('storage/'.$product->image)}}" width="100px" height="100px" alt=""></td> <!--Image-->
                        <td>{{$product->name}}</td> <!--Product Name-->
                        <td>{{$product->Category->name}}</td> <!--Product Category--> <!--To Do: Fix how to display name-->
                        <td>Rp.{{$product->price}}</td> <!--Product Price-->
                        <td>{{$product->description}}</td> <!--Product Description-->
                        <td><a class="btn btn-danger text-white" href="{{route('deleteproduct', $product->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
        
    </div>
@endsection