<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel9shop</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/favicon.ico') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    
    @vite('resources/css/app.css')
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white dark:bg-slate-800">
    <div class="container mx-auto p-5 bg-white dark:bg-slate-800">
        <div class="md:flex md:flex-row md:justify-between text-center text-sm sm:text-base bg-white dark:bg-slate-800">
            <div class="flex flex-row justify-center">
                <div class="bg-gradient-to-r from-green-400 to-blue-400 w-10 h-10 rounded-lg"></div>
                <h1 class="text-3xl text-blue-600 ml-2 dark:text-white">Tailwind</h1>
                <div class="sun text-blue-600 hover:text-purple-600  sm:px-4  dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                  </svg>              
                </div>
            </div>
            <div class="mt-2">                
                <a href="/" class="text-blue-600 hover:text-purple-600 p-4 px-3 sm:px-4 dark:text-white">Home</a>
                <a href="{{ route('shop') }}" class="text-blue-600 hover:text-purple-600 p-4 px-3 sm:px-4 dark:text-white">Shop</a>
                <a href="/checkout" class="text-blue-600 hover:text-purple-600 p-4 px-3 sm:px-4 dark:text-white">Checkout</a>                
                @auth
                    <div class="inline-flex flex-col items-center">
                        <button id="menu-btn" class="menu-btn relative border border-green-400 rounded-full text-blue-400 h-10 pl-5 pr-5 hover:border-gray-400 focus:outline-none appearance-none bg-white dark:bg-slate-800 dark:text-white">
                            {{ Auth::user()->name }}
                        </button>
                        <div id="dropdown" class="dropdown absolute bg-gradient-to-r from-green-400 to-blue-400 hidden flex-col rounded mt-10  p-2 text-sm text-gray-100 w-32">
                            @if (Auth::user()->utype == 'ADM')
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="{{ route('admin.categories')}}">Categories</a></li>
                                    <li><a href="#">Coupons</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                                    </form>
                                </ul>
                        </div>
                    </div>
                @elseif(Auth::user()->utype == 'USR')
                    <ul>
                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                        </form>
                    </ul>
                </div>
            </div>
        @endauth
    @else
        <div class="inline-flex flex-col items-center">
            <ul>
                <!--login for unauthenticated or new user-->
                <li><a href="{{ route('login') }}" class="text-blue-600 p-4 m-2 dark:text-white">Log In </a></li>
                <li><a href="{{ route('register') }}" class="text-blue-600 dark:text-white">Sign Up</a></li>
            </ul>
        </div>
        @endif       
        @livewire('cart-icon-component')
        
    </div>
    </div><!-- Main Navigation -->
        
    {{ $slot }}
   
    </div>
    <footer>
        <div class="bg-gradient-to-r from-green-400 to-blue-400 p-10 text-gray-200 dark:bg-gradient-to-r dark:from-slate-800 dark:to-slate-400">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Laravel9shop</h4>
                        Langestraat 304106<br>
                        1234AA Nergenshuizen<br>
                        Nederland<br>
                        <strong>Tel:</strong>0612345678<br>
                        <strong>Email:</strong>info@website.from<br>
                    </div>
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Links</h4>
                        <ul>
                            <li class="pb-3"><i class="">- </i><a href="/">Home</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Over Ons</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Contact</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Algemene Voorwaarden</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Klantenservice</h4>
                        <ul>
                            <li class="pb-3"><i class="">- </i><a href="#">Bestellen</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Bezorgen</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Retour</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Garantie</a></li>
                            <li class="pb-3"><i class="">- </i><a href="#">Mijn Account</a></li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4  class="text-2xl pb-4">Meld je aan voor onze nieuwsbrief</h4> 
                        <p>Blijf op de hoogte van onze aanbiedingen en meer...</p> 
                        <form>
                            <input class="text-blue-800" type="text" name="" id="newsletter">
                            <button class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center">Ik Meld Mij Aan</button>
                        </form>                     
                    </div>                    
                </div>
            </div>
        </div>
    </footer>

</body>

<script src="{{ asset('assets/js/main.js')}}"></script>
@livewireScripts
@stack('scripts')

</html>
