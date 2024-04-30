<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <img class="logo" src="../imges/logos/nav_logo/logoCar.svg" alt="car_logo">

        @if (Route::has('login'))
            @auth
                <ul class="nav-links">
                    <div class="menu">
                        <li class="menu--list"><a href="{{ route('home') }}"
                                class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
                        <li class="menu--list"><a href="{{ route('cars.about') }}">About</a></li>
                        <li class="menu--list"><a href="{{ route('cars.service') }}">Service</a></li>
                        <li class="menu--list"><a href="{{ route('cars.create') }}">create</a></li>
                        <li class="menu--list"><a href="{{ route('cars.index') }}">Service</a></li>
                        {{-- <li class="menu--list"><a href="{{ route('cars.show') }}">show</a></li> --}}
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                        <li class="menu--list"><button class="btn icon btn-log">logout</button></li>
                        </form>
                        </li>
                    </div>
                </ul>
            @else
                <ul class="nav-links">
                    <div class="menu">
                        <li class="menu--list">
                            <a href="{{ route('login') }}" class="">
                                Log in
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="menu--list">
                                <a href="{{ route('register') }}"
                                    class="">
                                    Register
                                </a>
                            </li>
                        @endif
                        <button class="switch" id="switch">
                            <span><i class="fas fa-sun"></i></span>
                            <span><i class="fas fa-moon"></i></span>
                        </button>
                    </div>
                </ul>
            @endauth
        @endif
    </nav>

    <div class="stars-container">
        <div class="stars">
        </div>

        @yield('content');

    

    <footer>
        <div class="footer">
            <div class="footer_card">
                <div class="footer_logo">
                    <img class="footer_info--list--child" src="../imges/logos/nav_logo/logoCar.svg" alt="car_logo">
                </div>
                <div class="footer_info">
                    <div>
                        <ul class="footer_info--list">
                            <h4 class="footer_info--list--title"><a href="#">Car List</a></h4>
                            <li class="footer_info--list--child"><a href="./sedan.html">Sedan</a></li>
                            <li class="footer_info--list--child"><a href="./suv.html">SUV</a></li>
                            <li class="footer_info--list--child"><a href="./sedan.html">Premium</a></li>
                            <li class="footer_info--list--child"><a href="./suv.html">Coupe</a></li>
                            <li class="footer_info--list--child"><a href="./sedan.html">Hatchback</a></li>
                            <li class="footer_info--list--child"><a href="./suv.html">Crossover</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="footer_info--list">
                            <h4 class="footer_info--list--title"><a href="#">Service</a></h4>
                            <li class="footer_info--list--child"><a href="/">To Repair</a></li>
                            <li class="footer_info--list--child"><a href="/">Maintenance</a></li>
                            <li class="footer_info--list--child"><a href="/">Accidents</a></li>
                            <li class="footer_info--list--child"><a href="/">Change Oil</a></li>
                            <li class="footer_info--list--child"><a href="/">External Faults</a></li>
                            <li class="footer_info--list--child"><a href="/">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/dynamic.js') }}"></script>
</body>

</html>
