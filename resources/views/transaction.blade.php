@extends('layouts.app' , ["Cart"=> "0"])

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white" style="font-weight:bold;">
                Transaction History
            </div>
            <div class="card-body">
                <ul>
                    @foreach($Transaction as $transaction)
                    <li style="list-style-type: none;">
                        <a  href="{{route('detailtransaction' , $transaction->id)}}">{{$transaction->created_at}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <style>
        a {
            text-decoration:none;
            color:black;
            font-weight: bold;
        }

        a:hover {
            color:red;
        }
    </style>
@endsection