<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/all.min.css"/>
    <title>Donating with Devotion</title>
</head>

<body class="bg-gray-200">
    <header class="header" id="navigation-menu">
        <div class="container">
            <nav>
                <!-- <a href="#" class="logo"><img src="/photo/log3.png" alt=""></a> -->

                <ul class="nav-menu">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li><a href="{{route('userMonastery')}}" class="nav-link">Monastery</a></li>
                    <li><a href="{{route('donate')}}" class="nav-link">Donation</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <!-- <li><a href="#" class="nav-link"><i class="fa-solid fa-user"></i></a></li> -->

                </ul>

                <div class="hambuger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <script>
        const hambuger = document.querySelector('.hambuger');
        const navMenu = document.querySelector('.nav-menu');

        hambuger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hambuger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        const navLink = document.querySelectorAll('.nav-link');
        navLink.forEach((n) => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hambuger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>
