<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/nav.css">
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

    <div id="scroll-navbar" class="fixed top-0 left-0 right-0 hidden bg-red-800 text-white py-4 px-6 shadow-lg z-40">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Monastery</h1>
            <nav>
                <a href="{{route('donate')}}" class="mx-2 hover:text-orange-600 text-xl">Donate</a>

                <!-- Add other navigation links as needed -->
            </nav>
        </div>
    </div>

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
<script>
    // Handle the scroll event to show/hide the scroll navbar
    window.addEventListener('scroll', function() {
        const scrollNavbar = document.getElementById('scroll-navbar');
        if (window.scrollY > 100) { // Show navbar after 100px scroll
            scrollNavbar.classList.remove('hidden');
            scrollNavbar.classList.add('block');
        } else {
            scrollNavbar.classList.remove('block');
            scrollNavbar.classList.add('hidden');
        }
    });

</script>
