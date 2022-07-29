<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('Title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                <img src="/images/bringitlogo1.png" width=140px; height=50px;>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto" id="spacing">
                    <li class="nav-item">
                        <a id="color" class="nav-link" href="/welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="color" class="nav-link" href="/categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a id="color" class="nav-link" href="/stores">Stores</a>
                    </li>
                    <li class="nav-item">
                        <a id="color" class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                    <a href="/cart"><button type="button" class="btn btn-success position-relative">
                        Shopping Cart
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                    {{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    </button></a>
                        <!--<a id="color" class="nav-link" href="/cart">Shopping Cart<span style="color:black;">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}}</span></a>!-->
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                    <form action="/search">
                    <div class="input-group">
                    <div class="form-outline">
                        <input type="text" name="query" class="form-control" style="width: 170px;" placeholder="Search" />
                    </div>
                    <button type="submit" class="btn btn-success">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    </div>
                    </form>
                    <li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/admin/admin">Dashboard</a>
                                    <a class="dropdown-item" href="/admin/chart">Charts</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <style>

    body {

    margin-top: 20px;
    font-family: 'Product Sans';
  font-style: bold;
  font-weight: 500;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    }


    #color {
        color: black;
        margin-left: 30px;
        margin-right: 30px;
        font-size: 16px;
    }

    #spacing {
        margin-left: 50px;
    }
  </style>
</body>


</html>
