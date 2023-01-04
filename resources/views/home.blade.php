<!DOCTYPE html>
<html lang="de">
<head>
    <title>Willkommen bei Shop</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1f2fd08344.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <link rel="stylesheet" href="css/home.css" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="js/config.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body onload="init()" class="bg-gray-200">
@include('cookie-consent::index')
<header class="bg-gray-300">
    <div class="h-20  flex flex-nowrap">
        <div class="m-auto max-lg:ml-10">
            <a href="/"><img src="img/zalin-2.png" alt="Logo" class="w-16"></a>
        </div>
        <nav class="mr-80 mt-auto mb-auto flex gap-6 text-gray-800 max-lg:hidden">
            <div class="underline decoration-2 decoration-green-500 underline-offset-8 font-bold">
                <a href="/">Willkommen</a>
            </div>
            <div class="hover:underline decoration-2 decoration-green-500 underline-offset-8 ">
                <a href="/shop">Shop</a>
            </div>
            <div class="hover:underline decoration-2 decoration-green-500 underline-offset-8 ">
                <a href="mission">Mission</a>
            </div>
            <div class="hover:underline decoration-2 decoration-green-500 underline-offset-8 ">
                <a href="contact">Kontakt</a>
            </div>
            <div class="hover:text-green-500">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="hover:text-green-500">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </nav>
        <nav class="mr-40 max-sm:mr-10 mt-auto mb-auto flex gap-6 text-gray-800 lg:hidden grid grid-cols-3">
            <div>
                <i class="fa-solid fa-magnifying-glass scale-125"></i>
            </div>
            <div>
                <i class="fa-solid fa-cart-shopping scale-125"></i>
            </div>
            <div>
                <button id="nav" onclick="navbar()"><i class="fa-solid fa-bars scale-125"></i></button>
            </div>
        </nav>
        <div id="navbar" class="bg-gray-400 fixed top-20 w-full transition-all lg:hidden">
            <div id="navitems" class="h-full text-gray-800 text-center grid grid-cols-1 grid-rows-4  place-items-center">
                <div>
                    <a href="/" class="font-bold">Willkommen</a>
                </div>
                <div>
                    <a href="/shop" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Shop</a>
                </div>
                <div>
                    <a href="/mission" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Mission</a>
                </div>
                <div>
                    <a href="/contact" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Kontakt</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="mt-5">
    <div>
        <img src="img/header-1.jpg" alt="Header" class="w-full">
    </div>
    <div class="mt-10 flex flex-wrap flex-1 gap-10 justify-evenly">
        <a href="/products/gekochte-wassermelonenkerne">
        <div class="card w-96">
            <img src="img/Gekochte-Wassermelonenkerne-0-300x300.png" class="w-full" alt="Gekochte Wassermelonenkerne">
            <div class="container">
                <h4 class="text-lg mb-2"><b>Gekochte Wassermelonenkerne</b></h4>
                <p class="mb-2 text-sm">5,98€ / kg</p>
                <p class="text-green-700 text-lg font-bold">ab 2,99€</p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-kuerbiskerne">
        <div class="card w-96">
            <img src="img/KAVRULMUS-KABAK-CEKIRDEGI-300x300.png" class="w-full" alt="Geröstete Kürbiskerne">
            <div class="container">
                <h4 class="text-lg mb-2"><b>Geröstete Kürbiskerne 200g</b></h4>
                <p class="mb-2 text-sm">1.25€ / 100g</p>
                <p class="text-green-700 text-lg font-bold">ab 2,49€</p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-sonnenblumenkerne">
        <div class="card w-96">
            <img src="img/Geröstet-und-gesalzen-Sonnenblumenkerne-0-300x300.png" class="w-full" alt="Geröstete Sonnenblumenkerne">
            <div class="container">
                <h4 class="text-lg mb-2"><b>Geröstete Sonnenblumenkerne 200 g</b></h4>
                <p class="mb-2 text-sm">1,04€ / 100g</p>
                <p class="text-green-700 text-lg font-bold">ab 2,49€</p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-wassermelonenkerne">
        <div class="card w-96">
            <img src="img/Geröstete-Wassermelonenkerne-300x300.png" class="w-full" alt="Geröstete Wassermelonenkerne">
            <div class="container ">
                <h4 class="text-lg mb-2"><b>Geröstete Wassermelonenkerne 240 g</b></h4>
                <p class="mb-2 text-sm">1,04€ / 100g</p>
                <p class="text-green-700 text-lg font-bold">ab 2,49€</p>
            </div>
        </div>
        </a>
    </div>

    <div class="bg-white mt-10 max-lg:hidden h-60 pb-12 grid grid-cols-3 grid-rows-2 place-items-center gap-5 text-gray-800">
        <div class="">
            <i class="fa-solid fa-truck scale-250 text-pink-600"></i>
        </div>
        <div class="">
            <i class="fa-solid fa-hand-holding-dollar scale-250 text-pink-600"></i>
        </div>
        <div class="">
            <i class="fa-solid fa-envelope scale-250 text-pink-600"></i>
        </div>
        <div class="text-center mx-10">
            Wir versprechen nur schonend behandelte Produkte: das originale Geschmackserlebnis, das die Menschen im Orient bereits seit Jahrtausenden lieben.
        </div>
        <div class="text-center mx-10">
            Dass wir ohne Zwischenhändler arbeiten, führt noch zu einem weiteren Vorteil: Die Kosten, die wir hier einsparen, können wir als Preisvorteil direkt an dich und alle unsere Kunden weitergeben.
        </div>
        <div class="text-center mx-10">

            Echte Freunde sagen einander auch, falls mal etwas nicht ganz rund läuft. Sollten Geschmack oder Frische dich also einmal nicht überzeugen, freuen wir uns über ehrliches Feedback.
        </div>
    </div>

    <div class="bg-white mt-10 lg:hidden h-128 grid grid-cols-1 grid-rows-3 place-items-center gap-5 text-gray-800">
        <div class="text-center mx-10">
            <div class="">
                <i class="fa-solid fa-truck scale-250 text-pink-600 my-5"></i>
            </div>
            Wir versprechen nur schonend behandelte Produkte: das originale Geschmackserlebnis, das die Menschen im Orient bereits seit Jahrtausenden lieben.
        </div>
        <div class="text-center mx-10">
            <div class="">
                <i class="fa-solid fa-hand-holding-dollar scale-250 text-pink-600 my-5"></i>
            </div>
            Dass wir ohne Zwischenhändler arbeiten, führt noch zu einem weiteren Vorteil: Die Kosten, die wir hier einsparen, können wir als Preisvorteil direkt an dich und alle unsere Kunden weitergeben.
        </div>
        <div class="text-center mx-10">
            <div class="">
                <i class="fa-solid fa-envelope scale-250 text-pink-600 my-5"></i>
            </div>
            Echte Freunde sagen einander auch, falls mal etwas nicht ganz rund läuft. Sollten Geschmack oder Frische dich also einmal nicht überzeugen, freuen wir uns über ehrliches Feedback.
        </div>
    </div>
    <div class="w-full lg:h-40 h-72 text-center mt-10 grid grid-cols-1 grid-rows-4 gap">
        <div>
            <i class="fa-solid fa-envelope-open-text text-gray-800 scale-250"></i>
        </div>
        <div>
            <h2 class="font-bold text-2xl">Newsletter abonnieren</h2>
        </div>
        @if(Session::get('errorMsg'))
            <div class="text-red-600 font-bold">
                {{Session::get('errorMsg')}}
            </div>
        @elseif(Session::get('successMsg'))
            <div class="text-green-500 font-bold">
                {{Session::get('successMsg')}}
            </div>
        @endif
        <div>
            <p class="text-gray-800 text-sm">Wir bringen Sonderangebote, Rabattaktionen und persönliche Trends zu dir nach Hause.</p>
        </div>
        <div >
            <form class="grid grid-cols-2 gap-10 place-items-center max-lg:hidden relative" method="post" action="/newsletter-anmeldung">
                @csrf
                <div class="ml-auto">
                    <input type="email" name="newsletter-mail" class="rounded-lg" size="40" placeholder="Ihre E-Mail-Adresse">
                </div>

                <div class="mr-auto">
                    <input type="submit" value="Kostenlos abonnieren" name="submit" class="border-2 text-gray-800 border-solid border-gray-500 p-1 w-72 bg-white rounded-sm cursor-pointer">
                </div>
            </form>
            <form class="grid grid-cols-1 grid-rows-2 place-items-center lg:hidden gap-2" method="post" action="/newsletter-anmeldung">
                @csrf
                <div>
                    <input type="email" name="newsletter-mail" class="rounded-lg" size="40" placeholder="Ihre E-Mail-Adresse">
                </div>
                <div >
                    <input type="submit" value="Kostenlos abonnieren" name="submit" class="border-2 text-gray-800 border-solid border-gray-500 p-1 w-72 bg-white rounded-sm cursor-pointer">
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 bg-white h-32">

    </div>

</main>
</body>
