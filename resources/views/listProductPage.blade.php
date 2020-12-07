@extends('layouts.adminBar')

@section('content')
    <div id="container" class="d-flex justify-content-center ">
        <h1>Product</h1>
        <table class="table">
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
@endsection