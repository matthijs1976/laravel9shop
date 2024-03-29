<div>
    <div class="mb-3">
        <a href="{{ route('shop.cart') }}" class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4  w-4 sm:h-6 sm:w-6 inline-block" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>Cart
        @if(Cart::count() > 0)({{ Cart::instance('cart')->count() }})
        @endif
        </a>
    </div>
</div>
