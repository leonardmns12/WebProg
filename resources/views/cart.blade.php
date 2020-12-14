@extends('layouts.app' , ["Cart"=> "0"])

@section('content')
    <div class="container d-flex flex-column">
        @if($Cart != null)
        @foreach($Cart as $cart)    
        <div class="d-flex container-cart">
            <div class="p-2">
            <img alt="cart-image" style="height:150px; width:200px" src="{{asset('storage/'.$cart->Product->image)}}"/>
            </div>
            <div class="p-2">
                <p style="font-weight: bold;">{{$cart->Product->name}}</p>
                <p>Product price: IDR {{$cart->Product->price}}</p> 
                <p>quantity : {{$cart->quantity}}</p>
                @if($pages == "cart")
                <div class="display:flex; flex-direction:column">
                    <a href="{{route('deletecart' , $cart->id)}}" class="btn btn-danger">Delete</a>
                    <button class="btn btn-success">Edit</button>
                </div>
                @endif  
            </div>
        </div> 
        @endforeach  
        @if($pages == "cart")
        <a href="{{route('cartcheckout')}}" class="btn btn-danger" style="width:200px">Checkout</a> 
        @endif
        @endif
    </div>
@endsection

<style>
    .container-cart{
        background-color:#FFFFFF;
        padding:10px;
        width:500px;
        border: solid 2px #DAD6CE; 
        margin-bottom: 10px;

    }
    .container {
    }
</style>