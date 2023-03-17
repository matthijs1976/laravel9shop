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
                                            {{-- odd:bg-white even:bg-gray-200 tailwind psuedo class ipv if/else darkmode? --}}
                                        @else
                                        <tr>
                                    @endif
                                    <td class="text-left py-3 px-4">{{ ++$i }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $category->slug }}</td>
                                    <td class="flex justify-center py-3 px-4"><a href="{{ route('admin.category.edit',['category_id'=>$category->id]) }}" class="flex p-2.5 bg-gradient-to-r from-green-400 to-blue-400 text-gray-50 rounded-xl hover:rounded-3xl transition-all duration-300 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>Pas Aan</a>
                                        <button type="button" data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init data-te-ripple-color="light" class="py-3 px-2 text-red-700 hover:text-orange-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                          </svg></button>
                                          
                                          </td>
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
<!-- Modal -->
<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalLabel">
          Modal title
        </h5>
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        Modal body text goes here.
      </div>
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Close
        </button>
        <button
          type="button"
          class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>