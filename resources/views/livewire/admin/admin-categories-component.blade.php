<div>
    <main class="main">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <div class="mb-3 float-right">
                    <a href="{{ route('admin.category.add') }}" class="bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 hover:bg-purple-700 p-3 px-3 sm:px-5 rounded-full">
                    Nieuwe Categorie Toevoegen                    
                    </a>
                </div>
                <header class="text-center">
                    <h1 class="text-xl font-bold text-blue-600 dark:text-white sm:text-3xl">Categorieën</h1>
                </header>
                
                <!-- categories table -->
                <div class="md:px-32 py-8 w-full">
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
                                    $i = ($categories->currentPage()-1)*$categories->perPage();
                                @endphp
                                @foreach ($categories as $category)
                                    @if ($i % 2 == 0)
                                        <tr class="bg-gray-200 dark:bg-gray-500">
                                        @else
                                        <tr>
                                    @endif
                                    <td class="text-left py-3 px-4">{{ ++$i }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->slug }}</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-900"
                                            href="#">{{ $category->id }}</a></td>
                                    </tr>
                                @endforeach
                                {{-- <tr class="bg-gray-400">
          <td class="w-1/3 text-left py-3 px-4">Emma</td>
          <td class="w-1/3 text-left py-3 px-4">Johnson</td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
        </tr>
        <tr>
          <td class="w-1/3 text-left py-3 px-4">Oliver</td>
          <td class="w-1/3 text-left py-3 px-4">Williams</td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
        </tr>
        <tr class="bg-gray-100">
          <td class="w-1/3 text-left py-3 px-4">Isabella</td>
          <td class="w-1/3 text-left py-3 px-4">Brown</td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
          <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
        </tr> --}}
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
