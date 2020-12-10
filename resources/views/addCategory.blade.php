@extends('layouts.adminBar')

@section('content')
    <div class="containter">
        <h3 class="d-flex justify-content-center">Name</h3>

        <div id="textInput_Container" class="d-flex justify-content-center">
            <input type="text" placeholder="Category Name" class="w-50">
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button class="bg-primary text-white d-flex justify-content-center">Add Category</button>
        </div>
        
    </div>
    
@endsection