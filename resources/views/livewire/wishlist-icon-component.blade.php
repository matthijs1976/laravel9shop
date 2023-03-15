<div class="flex p-3 mb-1 justify-center dark:text-gray-400 dark:bg-slate-800"><a href="{{ route('shop.wishlist') }}" class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
  </svg></a>
  @if(Cart::instance('wishlist')->count() > 0)
  <p class="text-blue-600 dark:text-gray-400 dark:bg-slate-800">{{ Cart::instance('wishlist')->count() }}</p>
  @endif
</div>      
