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
</head>

<body class="w-screen bg-white dark:bg-slate-800">
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
                <a href="/shop" class="text-blue-600 hover:text-purple-600 p-4 px-3 sm:px-4 dark:text-white">Shop</a>
                <a href="/checkout" class="text-blue-600 hover:text-purple-600 p-4 px-3 sm:px-4 dark:text-white">Checkout</a>                
                @auth
                    <div class="inline-flex flex-col items-center">
                        <button
                            class="relative border border-green-400 rounded-full text-blue-400 h-10 pl-5 pr-5 hover:border-gray-400 focus:outline-none appearance-none bg-white dark:bg-slate-800 dark:text-white"
                            id="menu-btn">{{ Auth::user()->name }}</button>
                        <div class="absolute bg-gradient-to-r from-green-400 to-blue-400 hidden flex-col rounded mt-10  p-2 text-sm text-gray-100 w-32"
                            id="dropdown">
                            @if (Auth::user()->utype == 'ADM')
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Categories</a></li>
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
        <div><a href="/cart" class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4  w-4 sm:h-6 sm:w-6 inline-block" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>Cart(0)
        </a></div>
    </div>
    </div><!-- Main Navigation -->
    <div class="carousel mt-4 relative shadow-2xl bg-white dark:bg-slate-800">
        <div class="carousel-inner relative overflow-hidden">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                <div class="block bg-no-repeat bg-cover bg-center h-full w-full  text-blue-600 text-5xl text-center"
                    style="background-image: url(https://www.wbcsd.org/var/site/storage/images/programs/cities-and-mobility/sustainable-cities/transforming-the-built-environment/decarbonization/resources/the-building-system-carbon-framework/146939-1-eng-GB/The-Building-System-Carbon-Framework_i1140.jpg)">
                    Slide 1</div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-green-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                hidden="">
            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                <div class="block bg-no-repeat bg-center bg-cover h-full w-full  text-blue-600 text-5xl text-center"
                    style="background-image: url(https://assets.new.siemens.com/siemens/assets/api/uuid:0cb5ab7e-727d-4129-87e0-184815e47fb6/width:1125/crop:0:0,0536:0,996:0,85911/quality:high/digital-building-lifecycle.jpg)">
                    Slide 2</div>
            </div>
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                hidden="">
            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                <div class="block bg-no-repeat bg-center bg-cover h-full w-full  text-blue-600 text-5xl text-center"
                    style="background-image: url(https://i.ytimg.com/vi/LtRMnK-SgRk/maxresdefault.jpg)">Slide 3
                </div>
            </div>
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
            </ol>

        </div>
    </div>
    <!--End carousel-->
    {{ $slot }}
    <div class="grid grid-flow-row grid-cols-1 pt-2 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
        <div class="shadow-lg bg-white dark:bg-slate-600">
            <a href="#">
                <img src="https://southpark-online.nl/assets/images/clips/what-the-hell-is-a-sodosopa.jpg" />
            </a>
            <div class="p-5">
                <h3><a href="#" class="text-blue-600 dark:text-white">City Wok</a></h3>
                <div class="flex flex-row my-3">
                    <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XXL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">L</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">M</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        View Details
                    </a>
                </div>
            </div>
        </div>
        <div class="shadow-lg">
            <a href="#">
                <img src="https://southpark-online.nl/assets/images/clips/what-the-hell-is-a-sodosopa.jpg" />
            </a>
            <div class="p-5">
                <h3><a href="#">City Wok</a></h3>
                <div class="flex flex-row my-3">
                    <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XXL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">L</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">M</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        View Details
                    </a>
                </div>
            </div>
        </div>
        <div class="shadow-lg">
            <a href="#">
                <img src="https://southpark-online.nl/assets/images/clips/ctpatown.jpg" />
            </a>
            <div class="p-5">
                <h3><a href="#">CtPaTown</a></h3>
                <div class="flex flex-row my-3">
                    <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XXL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">L</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">M</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        View Details
                    </a>
                </div>
            </div>
        </div>
        <div class="shadow-lg">
            <a href="#">
                <img src="https://southpark-online.nl/assets/images/clips/the-lofts-at-sodosopa.jpg" class="" />
            </a>
            <div class="p-5">
                <h3><a href="#">The Lofts</a></h3>
                <div class="flex flex-row my-3">
                    <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XXL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">L</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">M</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        View Details
                    </a>
                </div>
            </div>
        </div>
        <div class="shadow-lg">
            <a href="#">
                <img src="https://southpark-online.nl/assets/images/clips/ctpatown.jpg" class="" />
            </a>
            <div class="p-5">
                <h3><a href="#">CtPaTown</a></h3>
                <div class="flex flex-row my-3">
                    <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                    <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">XXL</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">L</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">M</a>
                    <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs"
                        href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Men's Collection Section -->
    </div>
</body>

<script src="{{ asset('assets/js/main.js')}}"></script>
@livewireScripts

</html>
