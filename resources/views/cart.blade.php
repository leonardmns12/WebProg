@extends('layouts.app' , ["Cart"=> "0"])

@section('content')
    <div class="container d-flex flex-column">
        <div class="d-flex container-cart">
            <div class="p-2">
            <img alt="cart-image" style="height:150px; width:200px" src="{{asset('image/macbook16.png')}}"/>
            </div>
            <div class="p-2">
                <p style="font-weight: bold;">Macbook 16</p>
                <p>Product price: IDR xxxxxxx</p> 
                <p>quantity :100</p>
                <div class="display:flex; flex-direction:column">
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>   
        <div class="d-flex container-cart">
            <div class="p-2">
            <img alt="cart-image" style="height:150px; width:200px" src="{{asset('image/macbook16.png')}}"/>
            </div>
            <div class="p-2">
                <p style="font-weight: bold;">Macbook 16</p>
                <p>Product price: IDR xxxxxxx</p> 
                <p>quantity :100</p>
                <div class="display:flex; flex-direction:column">
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>   
    </div>
    
@endsection

<style>
    .container-cart{
        background-color:#FFFFFF;
        padding:10px;
        width:500px;
        border: solid 2px #DAD6CE; 

    }
    .container {
    }
</style>