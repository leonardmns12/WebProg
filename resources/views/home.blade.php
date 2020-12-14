@extends('layouts.app', ["Cart" => $Cart->count()])

@section('content')
<div class="container product-container">
    <div class="d-flex flex-row">
            @foreach($Product as $product)
            <div class="card" style="width: 18rem; padding:20px; margin-left:50px">
                <img class="card-img-top" src="{{asset('storage/'.$product->image)}}" alt="Card image cap">
                <div class="d-flex justify-content-center flex-column">
                <h2 class="text-primary">{{$product->name}}</h2>
                <p class="card-text">IDR.{{$product->price}}</p>
                </div>
                <div class="body-card d-flex justify-content-center mt-auto p-2">
                    <a href="{{route('detail' , $product->id)}}" class="btn btn-success">Product Detail</a>
                </div>
            </div>
            @endforeach
    </div>
    <div class="d-flex justify-content-center" style="margin-top:70px;">
            {{$Product->links()}}
    </div>
</div>
@endsection
