@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="p-2">
            <img class="img-preview" src="{{asset('storage/'.$Product->image)}}" alt="Card image cap">
        </div>
        <div class="p-2" style="background-color:#ECECED;">
            <div style="padding:50px">
            <p style="font-weight:bold">{{$Product->name}}</p>
            <hr/>
            <div style="display:flex; flex-direction:row">
                <p style="font-size:24px;">Price : </p>
                <p style="font-size:24px; color:#FF852B;"> IDR. {{$Product->price}}</p>
            </div>
            <hr/>
            <p>Description : {{$Product->description}}</p>
            <div style="display:flex; flex-direction:row; padding:10px; line-height: 20px;">
            <form action="/product/cart" METHOD="POST">
            @csrf
            <p style="text-align:center">Quantity : </p>
            <input type="number" name="quantity"/>
            <input style="visibility:hidden;" type="text" name="product" value="{{$Product->id}}"/>
            </div>
            <Button class="btn btn-success">Add to cart</Button>
            </form>
            </div>
        </div>
    </div>

    <style> 
        .img-preview {
            max-height: 300px;
        }
    </style>
@endsection