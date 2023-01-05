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
<body onload="init()" class="bg-gray-200 font-mono">
@include('cookie-consent::index')
<header class="bg-gray-300">
    <div class="h-20  flex flex-nowrap">
        <div class="m-auto max-lg:ml-10">
            <a href="/"><img src="img/logo-home.png" alt="Logo" class="w-16"></a>
        </div>
        <nav class="mr-80 mt-auto mb-auto flex gap-6 text-gray-800 max-lg:hidden">
            <div class="underline decoration-2 decoration-green-500 underline-offset-8 font-bold">
                <a href="/">Willkommen</a>
            </div>
            <div class="hover:underline decoration-2 decoration-green-500 underline-offset-8 ">
                <a href="/shop">Shop</a>
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
            <div class="hover:text-green-500">
                <i class="fa-solid fa-user"></i>
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
        <div id="navbar" class="bg-gray-400 fixed top-20 w-full transition-all lg:hidden z-20">
            <div id="navitems" class="h-full text-gray-800 text-center grid grid-cols-1 grid-rows-4  place-items-center">
                <div>
                    <a href="/" class="font-bold">Willkommen</a>
                </div>
                <div>
                    <a href="/shop" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Shop</a>
                </div>
                <div>
                    <a href="/mission" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Anmelden</a>
                </div>
                <div>
                    <a href="/contact" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Kontakt</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="mt-3">
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade relative">
            <div class="numbertext">1 / 3</div>
            <img src="img/banner-home-1.png" class="w-full h-full">

        </div>

        <div class="mySlides fade relative">
            <div class="numbertext">2 / 3</div>
            <img src="img/banner-home-1.png" class="w-full h-full">

        </div>

        <div class="mySlides fade relative">
            <div class="numbertext">3 / 3</div>
            <img src="img/banner-home-1.png" class="w-full">

        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="mt-10 flex flex-wrap flex-1 gap-10 justify-evenly">
        <a href="/products/gekochte-wassermelonenkerne">
        <div class="card w-96">
            <img src="img/denim-male-gefuetterte-stiefel-black.png" class="w-full" alt="denim-male-gefuetterte-stiefel-black">
            <div class="container">
                <p class="mb-2 text-sm">Denim Male</p>
                <h4 class="text-lg mb-2"><b>Gefütterte Stiefel</b></h4>
                <p class="text-lg ">79.95€</p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-kuerbiskerne">
        <div class="card w-96">
            <img src="img/denim-male-gefuetterte-stiefel-brown.png" class="w-full" alt="denim-male-gefuetterte-stiefel-brown">
            <div class="container">
                <p class="mb-2 text-sm">Denim Male</p>
                <h4 class="text-lg mb-2"><b>Gefütterte Stiefel</b></h4>
                <p class="text-lg ">79.95€</p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-sonnenblumenkerne">
        <div class="card w-96">
            <img src="img/trekking-stiefel-green.png" class="w-full" alt="trekking-stiefel-green">
            <div class="container">
                <p class="mb-2 text-sm">Denim Male</p>
                <h4 class="text-lg mb-2"><b>Trekking Stiefel</b></h4>
                <p class="text-lg "><span class="text-orange-700">62,99€</span> <span class="line-through">79,95€</span></p>
            </div>
        </div>
        </a>
        <a href="/products/geroestete-wassermelonenkerne">
        <div class="card w-96">
            <img src="img/sneaker-mit-applikationen-black.png" class="w-full" alt="sneaker-mit-applikationen-black">
            <div class="container ">
                <p class="mb-2 text-sm">Denim Male</p>
                <h4 class="text-lg mb-2"><b>Sneaker mit Applikationen</b></h4>
                <p class="text-lg ">69.95€</p>
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
        <div class="text-center mx-5">
            Wir versprechen nur schonend behandelte Produkte: alle Produkte werden in der EU angefertig und verpackt.
        </div>
        <div class="text-center mx-5">
            Dass wir ohne Zwischenhändler arbeiten, führt noch zu einem weiteren Vorteil: Die Kosten, die wir hier einsparen, können wir als Preisvorteil direkt an dich und alle unsere Kunden weitergeben.
        </div>
        <div class="text-center mx-5">

            Echte Freunde sagen einander auch, falls mal etwas nicht ganz rund läuft. Sollte Qualität dich also einmal nicht überzeugen, freuen wir uns über ehrliches Feedback.
        </div>
    </div>

    <div class="bg-white mt-10 lg:hidden h-128 grid grid-cols-1 grid-rows-3 place-items-center gap-5 text-gray-800">
        <div class="text-center mx-10">
            <div class="">
                <i class="fa-solid fa-truck scale-250 text-pink-600 my-5"></i>
            </div>
            Wir versprechen nur schonend behandelte Produkte: alle Produkte werden in der EU angefertig und verpackt.
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
            Echte Freunde sagen einander auch, falls mal etwas nicht ganz rund läuft. Sollte Qualität dich also einmal nicht überzeugen, freuen wir uns über ehrliches Feedback.
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
    <div class="mt-5 bg-neutral-800 h-80 text-white flex flex-1 flex-shrink-1 justify-evenly flex-wrap max-lg:hidden">
        <div class="mt-20">
            <h4 class="text-neutral-400">Kontaktiere uns!</h4><br>
            <div>Tel.: 02402 127398</div><br>
            <h4>Öffungszeiten</h4>
            <div>Mo - Fr: 10-15 Uhr</div>
        </div>
        <div class="mt-20">
            <h4 class="text-neutral-400">Kundenservice</h4><br>
            <div>Versand</div>
            <div>Widerruf</div>
            <div>Kontakt</div>
            <div>FAQ</div>
            <div>Großhandel/Einzelhandel</div>
        </div>
        <div class="mt-20">
            <h4 class="text-neutral-400">Aytan</h4><br>
            <div>Mission</div>
            <div>Geschichte</div>
            <div>Produktionsprozess</div>
            <div>Jobs</div>
            <div>Kooperationen</div>
        </div>
        <div class="mt-20">
            <h4 class="text-neutral-400">Rechtliches</h4><br>
            <div>Impressum</div>
            <div>AGB</div>
            <div>Datenschutz</div>
        </div>
        <div class="mt-20">
            <h4 class="text-neutral-400">Aytan International</h4><br>
            <ul class="list-disc">
                <li>Deutschland</li>
                <li>Schweden</li>
                <li>Europa</li>
            </ul>
        </div>
    </div>
    <div class="lg:hidden mt-5 bg-neutral-800 h-224 text-white"><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Kontaktiere uns!</h4><br>
            <div>Tel.: 02402 127398</div><br>
            <h4>Öffungszeiten</h4>
            <div>Mo - Fr: 10-15 Uhr</div>
        </div><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Kundenservice</h4><br>
            <div>Versand</div>
            <div>Widerruf</div>
            <div>Kontakt</div>
            <div>FAQ</div>
            <div>Großhandel/Einzelhandel</div>
        </div><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Aytan</h4><br>
            <div>Mission</div>
            <div>Geschichte</div>
            <div>Produktionsprozess</div>
            <div>Jobs</div>
            <div>Kooperationen</div>
        </div><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Rechtliches</h4><br>
            <div>Impressum</div>
            <div>AGB</div>
            <div>Datenschutz</div>
        </div><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Aytan International</h4><br>
            <ul class="list-disc">
                <li>Deutschland</li>
                <li>Schweden</li>
                <li>Europa</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="bg-neutral-800 h-60 text-neutral-400 flex flex-1 flex-shrink-1 justify-evenly flex-wrap max-lg:hidden">
        <div class="mt-20">
            <div>Versand</div>
            <div class="mt-5">
                <img src="img/2000px-DHL_Logo.png">
            </div>
        </div>
        <div class="mt-20">
            <div>Zahlung</div>
            <img src="img/1280px-PayPal_logo.png" class="inline mt-5  scale-100">
            <img src="img/Vorkasse.png" class="inline mt-5 ml-3 scale-75">
            <img src="img/Visa_2014_logo_detail.png" class="inline mt-5 ml-3 scale-100">
            <img src="img/mc_hrz_thmb_282_2x.png" class="inline mt-5 ml-3 scale-100">
        </div>
        <div class="mt-20">
            <div>Social Media</div>
            <img src="img/f_logo_RGB-Hex-Blue_512.png" class="inline mt-5 ml-3">
            <img src="img/2000px-Instagram_logo_2016.png" class="inline mt-5 ml-3">
            <img src="img/image_preview.png" class="inline mt-5 ml-3">
            <img src="img/tiktok-app-icon-8.png" class="inline mt-5 ml-3">
        </div>
    </div>
    <div class="bg-neutral-800 h-96 text-neutral-400 lg:hidden">
        <div class="ml-8"><br>
            <div>Versand</div>
            <div class="mt-5">
                <img src="img/2000px-DHL_Logo.png">
            </div>
        </div>
        <div class="mt-20 ml-8">
            <div>Zahlung</div>
            <img src="img/1280px-PayPal_logo.png" class="inline mt-5  scale-100">
            <img src="img/Vorkasse.png" class="inline mt-5 ml-3 scale-75">
            <img src="img/Visa_2014_logo_detail.png" class="inline mt-5 ml-3 scale-100">
            <img src="img/mc_hrz_thmb_282_2x.png" class="inline mt-5 ml-3 scale-100">
        </div>
        <div class="mt-20 ml-8">
            <div>Social Media</div>
            <img src="img/f_logo_RGB-Hex-Blue_512.png" class="inline mt-5 ml-3">
            <img src="img/2000px-Instagram_logo_2016.png" class="inline mt-5 ml-3">
            <img src="img/image_preview.png" class="inline mt-5 ml-3">
            <img src="img/tiktok-app-icon-8.png" class="inline mt-5 ml-3">
        </div>
    </div>
    <hr class="">
    <div class="bg-neutral-800 h-16 text-neutral-400 text-center text-sm">
        <p>Alle Preise inkl. der gesetzl. MwSt. und zzgl. <span class="text-neutral-200">Versandkosten</span></p>
    </div>

</main>
</body>
