<div>
    <!-- component -->
<section class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img class="lg:w-1/2 w-full object-cover object-center rounded border shadow-lg border-gray-200 bg-white dark:bg-slate-800" src="{{ asset('assets/imgs/shop/digital_')}}{{ $product->id}}.jpg" alt="{{ $product->name }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">          
          <h2 class="text-sm title-font text-blue-600 dark:text-white tracking-widest">BRAND NAME</h2>          
          <h1 class="text-blue-600 dark:text-white text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-blue-600 dark:text-white ml-3">4 Reviews</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
          <p class="leading-relaxed text-blue-600 dark:text-white">{{ $product->short_description }}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            
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
                </div></div>
                {{-- <!-- begin wishlist button for product. method [addToWishlist] to be inserted on component: [details-component]--> 
                @php
                  $witems = Cart::instance('wishlist')->content()->pluck('id');
                @endphp
                <div class="flex p-3 mb-1 justify-center dark:text-gray-400 dark:bg-slate-800">
                  @if($witems->contains($product->id))
                  <a href="#" class="flex text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                          </svg>
                          <p class="text-blue-600 dark:text-gray-400 dark:bg-slate-800">Toegevoegd Aan Verlanglijst</p>
                      </a>
                    
                  @else
                  <a href="#" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price}})" class="flex text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                      </svg>
                      <p class="text-blue-600 dark:text-gray-400 dark:bg-slate-800">Voeg Toe Aan Verlanglijst</p>
                  </a>
                
                @endif
              </div> 
              <!-- end wishlist button-->     --}}
        
          <div class="flex">
            <span class="title-font font-medium text-2xl text-blue-600 dark:text-white">&euro; {{ $product->regular_price }}</span>
            <a class="ml-auto bg-gradient-to-r from-green-400 to-blue-400 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center"
            href="#" wire:click.prevent="store({{ $product->id}},'{{ $product->name}}',{{ $product->regular_price}})">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Add to cart
        </a>
            {{--reserve wishlist icon still under consideration--}} 
            {{--   <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-red-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button> --}}
          </div>
          <p class="mt-6 text-blue-600 dark:text-white">{{ $product->description }}</p>
        </div>
        <h2 class="text-3xl title-font font-medium mt-6 text-blue-600 dark:text-white">Related Products</h2>
        <div class="grid grid-flow-row grid-cols-1 pt-2 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            @foreach($rel_products as $rel_product)
            <div class="shadow-lg bg-white dark:bg-slate-600">
                <a href="{{ route('product.details',['slug'=>$rel_product->slug])}}">
                    <img src="{{ asset('assets/imgs/shop/digital_')}}{{ $rel_product->id}}.jpg" alt="{{ $rel_product->name }}"/>
                </a>
                <div class="p-5">
                    <h3><a href="{{ route('product.details',['slug'=>$rel_product->slug])}}" class="text-blue-600 dark:text-white">{{ $rel_product->name }}</a></h3>
                        <h2 class="text-blue-600 dark:text-white">&euro; {{ $rel_product->regular_price }}</h2>
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
                            href="{{ route('product.details',['slug'=>$rel_product->slug])}}">
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
            </div>{{-- end related product card --}}
            @endforeach
            
      </div>
      <h2 class="text-3xl title-font font-medium mt-6 text-blue-600 dark:text-white">Newest Products</h2>
        <div class="grid grid-flow-row grid-cols-1 pt-2 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            @foreach($new_products as $new_product)
            <div class="shadow-lg bg-white dark:bg-slate-600">
                <a href="{{ route('product.details',['slug'=>$new_product->slug])}}">
                    <img src="{{ asset('assets/imgs/shop/digital_')}}{{ $new_product->id}}.jpg" alt="{{ $new_product->name }}"/>
                </a>
                <div class="p-5">
                    <h3><a href="{{ route('product.details',['slug'=>$new_product->slug])}}" class="text-blue-600 dark:text-white">{{ $new_product->name }}</a></h3>
                        <h2 class="text-blue-600 dark:text-white">&euro; {{ $new_product->regular_price }}</h2>
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
                            href="{{ route('product.details',['slug'=>$new_product->slug])}}">
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
            </div>{{-- end newest product card --}}
            @endforeach
    </div>
  </section>
</div>
