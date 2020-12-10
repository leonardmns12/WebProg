<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{url('/adminPanel')}}">
                    Admin
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a id="productNavbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Product
                            </a>

                            <div class="dropdown-menu" aria-labelledby="productNavbarDropdown">
                                    <a class="dropdown-item" href="{{url('/addProduct')}}">
                                        Add product
                                    </a>
                                    <a class="dropdown-item" href="{{url('/listProduct')}}">
                                        Show all product
                                    </a>
                                    
                                </div>
                        </li>

                        <li>
                            <a id="categoryNavbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoryNavbarDropdown">
                                <a class="dropdown-item" href="{{url('/addCategory')}}" >
                                    Add category
                                </a>
                                <a class="dropdown-item" href="{{url('/listCategory')}}" >
                                    Show all category
                                </a>
                                    
                            </div>
                        
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a id="sokopediaNavbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                $okopedia
                            </a>
                            <div class="dropdown-menu" aria-labelledby="sokopediaNavbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                    
                            </div>
                        
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>
    .nav-item{
        margin-left:10px;
    }
</style>
</html>
