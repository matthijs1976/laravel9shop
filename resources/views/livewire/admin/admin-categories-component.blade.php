<div>
    <main class="main">
        <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto">
                <div class="mb-3 float-right">
                    <a href="{{ route('admin.category.add') }}"
                        class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                        Nieuwe Categorie Toevoegen
                    </a>
                </div>
                <header class="text-center">
                    <h1 class="text-xl font-bold text-blue-600 dark:text-white sm:text-3xl">Categorieën</h1>
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
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Slug</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-blue-600 dark:text-white dark:bg-gray-700">
                                @php
                                    $i = ($categories->currentPage() - 1) * $categories->perPage();
                                @endphp
                                @foreach ($categories as $category)
                                    @if ($i % 2 == 0)
                                        <tr class="bg-gray-200 dark:bg-gray-500">
                                            {{-- odd:bg-white even:bg-gray-200 tailwind psuedo class ipv if/else darkmode? --}}
                                        @else
                                        <tr>
                                    @endif
                                    <td class="text-left py-3 px-4">{{ ++$i }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->slug }}</td>
                                    <td class="flex justify-start gap-8 py-3 px-4"><a
                                            href="{{ route('admin.category.edit', ['category_id' => $category->id]) }}"
                                            class="flex p-2.5 bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 rounded-xl hover:rounded-3xl transition-all duration-300 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>Pas Aan</a>
                                        {{-- delete category delete btn and modal  --}}
                                        <div x-data="{ modelOpen: false }">
                                            <button @click="modelOpen =!modelOpen"
                                                onclick="deleteConfirmation({{ $category->id }})"
                                                class="button open-button py-3 px-3 text-red-700 hover:text-orange-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                            <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                                aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div
                                                    class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100"
                                                        x-transition:leave-end="opacity-0"
                                                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                                        aria-hidden="true">
                                                    </div>
                                                    <div x-cloak x-show="modelOpen"
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                                        <div class="flex items-center justify-between space-x-4">
                                                            <h1 class="text-xl font-medium text-gray-800 ">Bevestig
                                                                Verwijderen {{ $category->name }} categorie</h1>

                                                            <button @click="modelOpen = false"
                                                                class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>

                                                            </button>
                                                        </div>
                                                        <p class="mt-2 text-sm text-gray-500 ">
                                                            Weet je het zeker?
                                                        </p>
                                                        <div class="flex justify-between">
                                                            <a href="#" @click="modelOpen = false"
                                                                class="flex p-2.5 bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 rounded-xl hover:rounded-3xl transition-all duration-300 ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>Ga terug</a>
                                                            <a href="#" onclick="deleteCategory()"
                                                                @click="modelOpen = false"
                                                                class="flex p-2.5 bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 rounded-xl hover:rounded-3xl transition-all duration-300 ">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    stroke-width="2">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>verwijder</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('category_id', id);
        }

        function deleteCategory() {
            @this.call('deleteCategory');
        }
    </script>
@endpush
