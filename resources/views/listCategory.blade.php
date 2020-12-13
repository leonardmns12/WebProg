@extends('layouts.adminBar')

@section('content')
    <div>
        <div id="Categories">
            <h1 class="d-flex justify-content-center">Category</h1>
            
            @foreach($Category as $category)
            <div class="m-auto border w-75 p-2"><a class="d-flex justify-content-center" href="{{route('categoryWithProductList', $category->id)}}">{{$category->name}}</a></div>
            @endforeach
        </div>
        
        @if($Product != null)
        <div id="Products" class="mt-4">
            <h1 class="d-flex justify-content-center">Products</h1>
            <div class="d-flex justify-content-center">
                <table class="table w-75 mt-3">
                    <thead>
                        <tr>
                            <th><p>Product Id</p></th>
                            <th><p>Product Image</p></th>
                            <th><p>Product Name</p></th>
                            <th><p>Product Category</p></th>
                            <th><p>Product Price</p></th>
                            <th><p>Product Description</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Product as $product)
                        <tr>
                            <td><p>{{$product->id}}</p></td> <!--Product Id-->
                            <td><img src="{{asset($product->image)}}" alt=""></td> <!--Image-->
                            <td><p>{{$product->name}}</p></td> <!--Product Name-->
                            <td><p>{{$product->category}}</p></td> <!--Product Category--> <!--To Do: Fix how to display name-->
                            <td><p>Rp.{{$product->price}}</p></td> <!--Product Price-->
                            <td><p>{{$product->description}}</p></td> <!--Product Description-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
        @endif
    </div>
@endsection