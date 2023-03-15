
<main class="main">
    <div class="flex justify-around bg-white text-blue-600 dark:text-gray-400 dark:bg-slate-800">
        <!--Toggleable Link-->               
        <ul class="toggleable mb-1 border rounded-full">
            <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                <label for="toggle-one" class="block border rounded-full cursor-pointer   text-blue-600 dark:text-gray-400 dark:bg-slate-600 lg:p-3 text-sm lg:text-base font-bold">Categorieën</label>
                <div role="toggle" class="mega-menu mb-16 sm:mb-0 shadow-xl  ">
                <div class="absolute z-20 bg-gradient-to-r from-green-400 to-blue-400 container mx-auto w-full flex flex-wrap justify-start dark:bg-gradient-to-r dark:from-slate-800 dark:to-slate-400">
                    
                    @foreach($categories as $category)
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">                        
                        <h3 class="font-bold text-xl text-white text-bold mb-2"><a href="{{ route('product.category',['slug'=>$category->slug]) }}">{{ $category->name }}</a></h3>
                        <li>
                            <a href="#" class="block p-3 hover:bg-blue-400 text-gray-300 hover:text-white">Category One Sublink</a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
                        </li>                
                    </ul>
                @endforeach
            </div>
        </div>            
    </ul>        
        <!-- ## Toggleable Link Template ##-->
    <p class="border rounded-full p-3 mb-1"><strong class="search-result">{{ $products->total() }}</strong> Producten Gevonden</p>            
        <div class="relative flex-col mx-auto border rounded-full p-3 mb-1" x-data="{ open: false }">
            <button @click="open = true">Producten Per Pagina: {{ $pageSize }}</button>         
            <ul class="absolute bg-white z-10" x-show="open" @click.outside="open = false">
                <li class="px-4 border text-blue-600 dark:text-gray-400 dark:bg-slate-600"><a href="#" @click="open = false" wire:click.prevent="changePageSize(12)">12</a></li>
                <li class="px-4 border text-blue-600 dark:text-gray-400 dark:bg-slate-800"><a href="#" @click="open = false" wire:click.prevent="changePageSize(16)">16</a></li>
                <li class="px-4 border text-blue-600 dark:text-gray-400 dark:bg-slate-600"><a href="#" @click="open = false" wire:click.prevent="changePageSize(24)">24</a></li>
                <li class="px-4 border rounded-b text-blue-600 dark:text-gray-400 dark:bg-slate-800"><a href="#" @click="open = false" wire:click.prevent="changePageSize(32)">32</a></li>
            </ul>
        </div>
        <div class="relative border rounded-full p-3 mb-1" x-data="{ open: false }">
            <button @click="open = true">Sorteer op: {{ $orderBy }}</button>         
            <ul class="absolute bg-white z-10" x-show="open" @click.outside="open = false">
                <li class="px-4  border rounded-b  text-blue-600 dark:text-gray-400 dark:bg-slate-600"><a href="#" @click="open = false" wire:click.prevent="changeOrderBy('Default')">Default</a></li>
                <li class="px-4  border text-blue-600 dark:text-gray-400 dark:bg-slate-600"><a href="#" @click="open = false" wire:click.prevent="changeOrderBy('Laag->Hoog')">Prijs: <span class="text-sm">Laag->Hoog</span></a></li>
                <li class="px-4  border  text-blue-600 dark:text-gray-400 dark:bg-slate-800"><a href="#" @click="open = false" wire:click.prevent="changeOrderBy('Hoog->Laag')">Prijs: <span class="text-sm"> Hoog->Laag</span></a></li>
                <li class="px-4  border rounded-b  text-blue-600 dark:text-gray-400 dark:bg-slate-600"><a href="#" @click="open = false" wire:click.prevent="changeOrderBy('Nieuwste')">Nieuwste Producten</a></li>
            </ul>
        </div>
        @livewire('wishlist-icon-component')
    </div>    
    <!-- between two numbers priceslider comes here soon--> 
                     
    @livewire('search-bar-component') 
    <!-- start of product cards-->        
    <div class="grid grid-flow-row grid-cols-1 pt-2 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                
        @foreach($products as $product)
        <div class="shadow-lg bg-white dark:bg-slate-600">
            <a href="{{ route('product.details',['slug'=>$product->slug])}}">
                <img src="{{ asset('assets/imgs/shop/digital_')}}{{ $product->id}}.jpg" alt="{{ $product->name }}"/>
            </a>
            <div class="p-5">
                <h3><a href="{{ route('product.details',['slug'=>$product->slug])}}" class="text-blue-600 dark:text-white">{{ $product->name }}</a></h3>
                    <h2 class="text-blue-600 dark:text-white">&euro; {{ $product->regular_price }}</h2>
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
                 <!-- begin wishlist button for product--> 
                 @php
                 $witems = Cart::instance('wishlist')->content()->pluck('id');
               @endphp
               <div class="flex p-3 mb-1 justify-center dark:text-gray-400 dark:bg-slate-800">
                 @if($witems->contains($product->id))
                 <a href="#" wire:click.prevent="removeFromWishlist({{ $product->id }})" class="flex text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                         </svg>
                         <p class="text-blue-600 text-xs pt-1 dark:text-gray-400 dark:bg-slate-800">Verwijder Van Verlanglijst</p>
                     </a>
                   
                 @else
                 <a href="#" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price}})" class="flex text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                     </svg>
                     <p class="text-blue-600 text-xs pt-1 dark:text-gray-400 dark:bg-slate-800">Voeg Toe Aan Verlanglijst</p>
                 </a>
               
               @endif
             </div> 
             <!-- end wishlist button-->    
                <div class="flex flex-col xl:flex-row justify-between">                    
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
                        href="#" wire:click.prevent="store({{ $product->id}},'{{ $product->name}}',{{ $product->regular_price}})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                    </a>                    
                    <a class="bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center"
                        href="{{ route('product.details',['slug'=>$product->slug])}}">
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
        </div>{{-- end product card --}}
        @endforeach           
    </div>
    <!-- end shop cards -->
    <div>{{ $products->links() }}</div>
</main>


