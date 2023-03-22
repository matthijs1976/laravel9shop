<div>
    <main class="main">
        <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto">
                <div class="mb-3 float-right">
                    <a href="{{ route('admin.product.add') }}"
                        class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 p-3 px-3 sm:px-5 rounded-full">
                        Nieuw Product Toevoegen
                    </a>
                </div>
                <header class="text-center">
                    <h1 class="text-xl font-bold text-blue-600 dark:text-white sm:text-3xl">Producten</h1>
                </header>
                <!-- categories table -->
                <div class="md:px-32 py-8 w-full">
                    <!-- session message -->
                    @if (Session::has('message'))
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                            role="alert">
                            <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                    </svg></div>
                                <div>
                                    <p class="font-bold">Success | {{ Session::get('message') }} </p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        <table class="min-w-full bg-white">
                            <thead
                                class="bg-gradient-to-r from-green-400 to-blue-400 text-white dark:bg-gradient-to-r dark:from-slate-800 dark:to-slate-400">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">afb</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Naam</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aantal</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Prijs</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Categorie</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Datum</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actie</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-blue-600 dark:text-white dark:bg-gray-700">
                                @php
                                    $i = ($products->currentPage() - 1) * $products->perPage();
                                @endphp
                                @foreach ($products as $product)
                                    @if ($i % 2 == 0)
                                        <tr class="bg-gray-200 dark:bg-gray-500">
                                            {{-- odd:bg-white even:bg-gray-200 tailwind psuedo class ipv if/else darkmode? --}}
                                        @else
                                        <tr>
                                    @endif
                                    <td class="text-left py-3 px-4">{{ ++$i }}</td>
                                    <td class="py-3 px-4"><img class="object-scale-down h-32 w-80 transition ease-in-out hover:scale-110" src="{{ asset('assets/imgs/producten') }}/{{ $product->image }}" alt="{{ $product->name }}"/></td>
                                    <td class="text-left py-3 px-4">{{ $product->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $product->stock_status }}</td>
                                    <td class="text-left py-3 px-4">{{ $product->regular_price }}</td>
                                    <td class="text-left py-3 px-4">{{ $product->category->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $product->created_at }}</td>
                                    <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
