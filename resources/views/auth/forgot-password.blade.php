<!DOCTYPE html>
<html lang="de">
<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1f2fd08344.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <link rel="stylesheet" href="css/home.css" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="js/login.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<header class="bg-gray-300 font-mono">
    <div class="h-20  flex flex-nowrap">
        <div class="m-auto max-lg:ml-10">
            <a href="/"><img src="img/logo-home.png" alt="Logo" class="w-16"></a>
        </div>
        <nav class="mr-80 mt-auto mb-auto flex gap-6 text-gray-800 max-lg:hidden">
            <div class="hover:underline decoration-2 decoration-green-500 underline-offset-8 ">
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
                @if(\Illuminate\Support\Facades\Auth::user())
                    <a href="/profile"><i class="fa-solid fa-user"></i>
                        <span class="ml-1.5">{{\Illuminate\Support\Facades\Auth::getUser()->forename}}</span>
                    </a>
                @else
                    <a href="/login"><i class="fa-solid fa-user text-green-500"></i></a>
                @endif
            </div>
        </nav>
        <nav class="mr-40  max-sm:mr-10 mt-auto mb-auto flex gap-6 text-gray-800 lg:hidden grid grid-cols-3">
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
        <div id="navbar" class="bg-gray-400 h-0 absolute top-20 w-full transition-all lg:hidden z-20">
            <div id="navitems" class="h-full text-gray-800 text-center grid grid-cols-1 grid-rows-4  place-items-center">
                <div>
                    <a href="/" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Willkommen</a>
                </div>
                <div>
                    <a href="/shop" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Shop</a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <a href="/profile" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Profil</a>
                    @else
                        <a href="/login" class="underline decoration-2 font-bold underline-offset-8">Anmelden</a>
                    @endif
                </div>
                <div>
                    <a href="/contact" class="hover:underline decoration-2 hover:font-bold underline-offset-8">Kontakt</a>
                </div>
            </div>
        </div>
    </div>
</header>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 font-mono">
        {{ __('Passwort vergessen? Kein Problem. Teilen Sie uns einfach Ihre E-Mail-Adresse mit und wir senden Ihnen per E-Mail einen Link zum Zur??cksetzen Ihres Passworts.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="font-mono">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="font-mono">
                {{ __('Link zum Zur??cksetzen des Passworts per E-Mail') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
<footer class="font-mono">
    <div class="bg-neutral-800 h-80 text-white flex flex-1 flex-shrink-1 justify-evenly flex-wrap max-lg:hidden">
        <div class="mt-20">
            <h4 class="text-neutral-400">Kontaktiere uns!</h4><br>
            <div>Tel.: 02402 127398</div><br>
            <h4>??ffungszeiten</h4>
            <div>Mo - Fr: 10-15 Uhr</div>
        </div>
        <div class="mt-20">
            <h4 class="text-neutral-400">Kundenservice</h4><br>
            <div>Versand</div>
            <div>Widerruf</div>
            <div>Kontakt</div>
            <div>FAQ</div>
            <div>Gro??handel/Einzelhandel</div>
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
            <h4>??ffungszeiten</h4>
            <div>Mo - Fr: 10-15 Uhr</div>
        </div><br>
        <div class="ml-8">
            <h4 class="text-neutral-400">Kundenservice</h4><br>
            <div>Versand</div>
            <div>Widerruf</div>
            <div>Kontakt</div>
            <div>FAQ</div>
            <div>Gro??handel/Einzelhandel</div>
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

    <div class="bg-neutral-800 h-16 text-neutral-400 text-center text-sm max-lg:hidden">
        <p class="">Alle Preise inkl. der gesetzl. MwSt. und zzgl. <span class="text-neutral-200">Versandkosten</span></p>
    </div>
    <div class="bg-neutral-800 h-32 text-neutral-400 text-center text-sm lg:hidden pt-20">
        <p class="">Alle Preise inkl. der gesetzl. MwSt. und zzgl. <span class="text-neutral-200">Versandkosten</span></p>
    </div>
</footer>
