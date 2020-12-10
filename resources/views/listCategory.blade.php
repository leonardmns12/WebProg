@extends('layouts.adminBar')

@section('content')
    <div>
        <div id="Categories">
            <h1 class="d-flex justify-content-center">Category</h1>
            <div class="m-auto border w-75 p-2"><h4 class="d-flex justify-content-center">Phone</h4></div>
            <div class="m-auto border w-75 p-2"><h4 class="d-flex justify-content-center">Laptop</h4></div>
            <div class="m-auto border w-75 p-2"><h4 class="d-flex justify-content-center">TV</h4></div>
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
                        <tr>
                            <th>Test Id 1</th>
                            <th>Test Image 1</th>
                            <th>Test Name 1</th>
                            <th>Test Category 1</th>
                            <th>Test Price 1</th>
                            <th>Test Description 1</th>
                        </tr>
                        <tr>
                            <th>Test Id 2</th>
                            <th>Test Image 2</th>
                            <th>Test Name 2</th>
                            <th>Test Category 2</th>
                            <th>Test Price 2</th>
                            <th>Test Description 2</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection