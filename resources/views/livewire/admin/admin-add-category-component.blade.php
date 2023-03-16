<div>
    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]

  @layer components {
    .no-spinner {
      -moz-appearance: textfield;
    }

    .no-spinner::-webkit-outer-spin-button,
    .no-spinner::-webkit-inner-spin-button {
      margin: 0;
      -webkit-appearance: none;
    }
  }
-->
    <main class="main">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <header class="text-center">
                    <h1 class="mb-12 text-xl font-bold text-blue-600 dark:text-white sm:text-3xl">Voeg Categorie Toe</h1>
                </header>
                <div class="mb-6 float-right">
                    <a href="{{ route('admin.categories') }}"
                        class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                        Terug Naar Alle Categorieën
                    </a>
                </div>
                <!--add categories form -->
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
                <form wire:submit.prevent="storeCategory">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Categorie Naam" wire:model="name" wire:keyup="generateSlug">
                            @error('name')
                                <p class="text-red">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                            Slug
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 bg-white dark:bg-gray-400 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                            id="slug" type="text" placeholder="slug" wire:model="slug">
                            @error('slug')
                                <p class="text-red">{{ $message }}</p>
                            @enderror
                    </div>
                    <button type="submit"
                        class="float-right bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                        Voeg Toe Aan Categorieën
                </button>
                </form>
                </div>
            </div>
        </div>
    </main>
</div>
