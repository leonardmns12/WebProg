@extends('layouts.adminBar')

@section('content')
    <div class="containter">
        <h3 class="d-flex justify-content-center">Name</h3>

        <form method="POST" action="/addCategory" enctype="multipart/form-data">
            @csrf
            <div id="textInput_Container" class="d-flex justify-content-center">
                <input class="w-50" type="text" placeholder="Category Name" name="name">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="bg-primary text-white d-flex justify-content-center" type="submit" name="submit">Add Category</button>
            </div>
        </form>
    </div>
    
@endsection