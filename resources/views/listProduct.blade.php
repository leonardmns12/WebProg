@extends('layouts.adminBar')

@section('content')
    <div id="container">
        <h1 class="d-flex justify-content-center">Product</h1>
        <div class="d-flex justify-content-center">
            <table class="table w-75">
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
                    <tr>
                        <th>Test Id 1</th>
                        <th>Test Image 1</th>
                        <th>Test Name 1</th>
                        <th>Test Category 1</th>
                        <th>Test Price 1</th>
                        <th>Test Description 1</th>
                        <th><button class="w-75 border-0 bg-danger text-white">Delete</button></th>
                    </tr>
                    <tr>
                        <th>Test Id 2</th>
                        <th>Test Image 2</th>
                        <th>Test Name 2</th>
                        <th>Test Category 2</th>
                        <th>Test Price 2</th>
                        <th>Test Description 2</th>
                        <th><button class="w-75 border-0 bg-danger text-white">Delete</button></th>
                    </tr>
                </tbody>
        </table>
        </div>
        
    </div>
@endsection