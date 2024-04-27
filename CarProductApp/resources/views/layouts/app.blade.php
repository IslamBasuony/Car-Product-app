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

        <img class="logo" src="../imges/logos/nav_logo/logoCar.svg" alt="car_logo"></div>

        <ul class="nav-links">

            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>

            <div class="menu">

                <li class="menu--list"><a href="">Home</a></li>
                <li class="menu--list"><a href={{"admins/about"}}>About</a></li>

                <li class="services menu--list ">
                    <a href="">list car</a>

                    <ul class="dropdown">
                        <li class="dropdown_list "><a href="/shop/sedan"><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_sedan.svg" alt="sedan"> sedan</a></li>
                        <li class="dropdown_list "><a href="/shop/suv"><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_suv.svg" alt="suv"> suv</a></li>
                        <li class="dropdown_list "><a href=""><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_premume.svg" alt=""> premium</a></li>
                        <li class="dropdown_list "><a href="./suv.html"><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_cope.svg" alt="premium"> coupe</a></li>
                        <li class="dropdown_list "><a href="./sedan.html"><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_hatchbak.svg" alt="hatchback"> hatchback</a></li>
                        <li class="dropdown_list "><a href="./suv.html"><img class="dropdown__list--logo"
                                    src="../imges/logos/nav_logo/logo_crossover.svg" alt="crossover"> crossover</a></li>
                    </ul>
                </li>   

                <li class="menu--list"><a href={{"users/service"}}>service</a></li>
                <li class="menu--list"><a href={{"admins/createCar"}}>Contact</a></li>

                <li>
                    <button class="switch" id="switch">
                        <span><i class="fas fa-sun"></i></span>
                        <span><i class="fas fa-moon"></i></span>
                    </button>
                </li>
            </div>
        </ul>
    </nav>
    <div class="stars-container">
        <div class="stars">
        </div>

        @yield('content')

        <footer>
            <div class="footer">
                <div class="footer_card">
                    <div class="footer_logo">
                        <img class="footer_info--list--child" src="../imges/logos/nav_logo/logoCar.svg" alt="car_logo">
                    </div>
                    <div class="footer_info">
                        <div>
                            <ul class="footer_info--list">
                                <h4 class="footer_info--list--title"><a href="/">car list </a> </h4>
                                <li class="footer_info--list--child"><a href="./sedan.html">sedan </a> </li>
                                <li class="footer_info--list--child"><a href="./suv.html"> suv</a> </li>
                                <li class="footer_info--list--child"><a href="./sedan.html"> premium</a> </li>
                                <li class="footer_info--list--child"><a href="./suv.html">coupe </a> </li>
                                <li class="footer_info--list--child"><a href="./sedan.html">hatchback </a> </li>
                                <li class="footer_info--list--child"><a href="./suv.html"> crossover</a> </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="footer_info--list">
                                <h4 class="footer_info--list--title"><a href="./service.html">service </a> </h4>
                                <li class="footer_info--list--child"><a href="/"> to repair</a> </li>
                                <li class="footer_info--list--child"><a href="/">maintenance </a> </li>
                                <li class="footer_info--list--child"><a href="/">accidents </a> </li>
                                <li class="footer_info--list--child"><a href="/"> Change oil</a> </li>
                                <li class="footer_info--list--child"><a href="/">external faults </a> </li>
                                <li class="footer_info--list--child"><a href="/"> customers service</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/dynamic.js') }}"></script>
</body>

</html>
