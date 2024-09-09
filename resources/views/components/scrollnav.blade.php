<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/nav.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/custom_js/engMya.js', 'resources/css/lang.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/all.min.css"/>
    <title>Donating with Devotion</title>
</head>

<body class="bg-gray-200">
    <header class="header" id="navigation-menu">
        <div class="container">
            <nav>
                <!-- <a href="#" class="logo"><img src="/photo/log3.png" alt=""></a> -->
                <x-lang class=""/>
                <ul class="nav-menu flex space-x-4">
                    <li>
                        <a href="{{route('home')}}" class="nav-link">
                            <span class="en">Home</span>
                            <span class="mm">ပင်မစာမျက်နှာ</span>
                        </a>
                    </li>
                    <li><a href="{{route('userMonastery')}}" class="nav-link">
                        <span class="en">Monastery</span>
                        <span class="mm">ကျောင်းတိုက်</span>
                        </a>
                    </li>
                    <li><a href="{{route('donate')}}" class="nav-link">
                        <span class="en">Donation</span>
                        <span class="mm">လှူဒါန်းရန်</span>
                        </a>
                    </li>
                    <li><a href="{{ route('about') }}" class="nav-link">
                        <span class="en">About</span>
                        <span class="mm">အကြောင်းအရာ</span>
                    </a>
                    </li>
                    {{-- <li class="relative">
                        <button class="nav-link text-white" id="languageDropdownButton">
                            Language <i class="fas fa-chevron-down ml-1"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden" id="languageDropdownMenu">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">English</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Myanmar</a>
                        </div>
                    </li> --}}
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
            <h1 class="text-2xl font-bold"><span class="en">Monastery</span>
                <span class="mm">ကျောင်းတိုက်</span></h1>
            <nav>
                <a href="{{route('donate')}}" class="mx-2 hover:text-orange-600 text-xl">
                    <span class="en">Donate</span>
                <span class="mm">လှူဒါန်းရန်</span></a>

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

        document.getElementById('languageDropdownButton').addEventListener('click', function() {
        var menu = document.getElementById('languageDropdownMenu');
        menu.classList.toggle('hidden');
    });

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        var isClickInside = document.getElementById('languageDropdownButton').contains(event.target);
        var menu = document.getElementById('languageDropdownMenu');

        if (!isClickInside) {
            menu.classList.add('hidden');
        }
    });
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
