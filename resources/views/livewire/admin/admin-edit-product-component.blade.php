<div>
    <!--
  This component uses @tailwindcss/forms  
  npm install @tailwindcss/forms
  plugins: [require('@tailwindcss/forms')]  
-->
    <main class="main">
        <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <header class="text-center">
                    <h1 class="mb-12 text-xl font-bold text-blue-600 dark:text-white sm:text-3xl">Pas Product Aan</h1>
                </header>
                <div class="mb-6 float-right">
                    <a href="{{ route('admin.products') }}"
                        class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                        Terug Naar Alle Producten
                    </a>
                </div>
                <!--add productss form -->
                <div>
            @if(Session::has('message'))                
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                        <p class="font-bold">Success | {{ Session::get('message') }} </p>
                        <p class="text-sm"></p>
                      </div>
                    </div>
                  </div>
            @endif
                <form wire:submit.prevent="updateProduct">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="name">
                            Naam
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Product Naam" wire:model="name" wire:keyup="generateSlug">
                            @error('name')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="slug">
                            Slug
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="slug" type="text" placeholder="slug" wire:model="slug">
                            @error('slug')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="short_description">
                            Korte Beschrijving
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="short_description" type="text" placeholder="Korte Beschrijving" wire:model="short_description"></textarea>
                            @error('short_description')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="description">
                            Beschrijving
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="description" type="text" placeholder="Beschrijving" wire:model="description"></textarea>
                            @error('description')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="regular_price">
                            Prijs
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="regular_price" type="text" placeholder="Prijs" wire:model="regular_price">
                            @error('regular_price')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="sale_price">
                            Aanbieding  Prijs
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="sale_price" type="text" placeholder="Aanbieding Prijs" wire:model="sale_price">
                            @error('sale_price')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="art_num">
                            Artikel Nummer
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="art_num" type="text" placeholder="Artikel Nummer" wire:model="art_num">
                            @error('art_num')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="stock-status">
                            Voorraad
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="stock_status" type="text" placeholder="Aantal" wire:model="stock-status">
                            <option value="instock">Op Voorraad</option>
                            <option class="text-red-700 font-bold" value="outofstock">NIET Op Voorraad</option>
                        </select>
                            @error('stock-status')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="featured">
                            Aanbieding
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="featured" type="text" placeholder="Aanbevolen" wire:model="featured">
                            <option value="1">Aanbieding</option>
                            <option class="text-red-700 font-bold" value="0">NIET In Aanbieding</option>
                        </select>
                            @error('featured')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="quantity">
                            Aantal
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="quantity" type="text" placeholder="Aantal" wire:model="quantity">
                            @error('quantity')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="image">
                            Afbeelding
                        </label>
                        <input
                            class="text-gray-900 bg-white dark:bg-gray-400 dark:text-white"
                            id="image" type="file" wire:model="image">
                            @if($newimage)
                                <img class="object-scale-down h-32 w-80 transition ease-in-out hover:scale-110" src="{{ $image->temporaryUrl() }}"/>
                            @else
                            <img class="object-scale-down h-32 w-80 transition ease-in-out hover:scale-110" src="{{ asset('assets/imgs/producten') }}/{{ $image}}"/>
                            @endif
                            @error('newimage')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="category_id">
                            Categorie
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="category_id" type="text" placeholder="Categorie" wire:model="category_id">
                            <option value="">Selecteer</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                            @error('category_id')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                    </div>
                    <button type="submit"
                        class="float-right bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                        Pas Product Aan
                </button>
                </form>
                </div>
            </div>
        </div>
    </main>
</div>
