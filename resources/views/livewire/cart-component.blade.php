<div>
    <main class="main">
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

<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-3xl">
        <header class="text-center">
          <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Your Cart</h1>
        </header>
  
        <div class="mt-8">
            @if(Session::has('success_message'))                
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                        <p class="font-bold">Success | {{ Session::get('success_message')}} </p>
                        <p class="text-sm">Make sure you know how these changes affect you.</p>
                      </div>
                    </div>
                  </div>
            @endif
            @if(Cart::count() > 0) 
            @foreach(Cart::content() as $item)
           
          <ul class="space-y-4">
            <li class="flex items-center gap-4">
              <img
              src="{{ asset('assets/imgs/shop/digital_')}}{{ $item->model->id}}.jpg"
                alt=""
                class="h-16 w-16 rounded object-cover"
              />
  
              <div>
                <h3 class="text-sm text-gray-900">{{ $item->model->name }}</h3>
  
                <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                  <div>
                    <dt class="inline">Size:</dt>
                    <dd class="inline">XXS</dd>
                  </div>
  
                  <div>
                    <dt class="inline">Color:</dt>
                    <dd class="inline">White</dd>
                  </div>

                  <div>
                    <dt class="inline">Prijs:</dt>
                    <dd class="inline">{{ $item->model->regular_price }}</dd>
                  </div>

                  <div>
                    <dt class="inline">Subtotal</dt>
                    <dd class="inline">{{ $item->subtotal }}</dd>
                  </div>
                </dl>
              </div>
  
              <div class="flex flex-1 items-center justify-end gap-2">
                <form>
                  <label for="Line1Qty" class="sr-only"> Quantity </label>
  
                  <input
                    type="number"
                    min="1"
                    value="1"
                    id="Line1Qty"
                    class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"
                  />
                </form>
  
                <button class="text-gray-600 transition hover:text-red-600">
                  <span class="sr-only">Remove item</span>
  
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-4 w-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                    />
                  </svg>
                </button>
              </div>
            </li>
            @endforeach
            @else
            <p>Uw Winkelmandje Is Leeg</p>
            @endif            
          </ul>
  
          <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
            <div class="w-screen max-w-lg space-y-4">
              <dl class="space-y-0.5 text-sm text-gray-700">
                <div class="flex justify-between">
                  <dt>Subtotal</dt>
                  <dd>&euro;{{ Cart::subtotal() }}</dd>
                </div>
  
                <div class="flex justify-between">
                  <dt>BTW</dt>
                  <dd>&euro;{{ Cart::tax() }}</dd>
                </div>
  
                <div class="flex justify-between">
                  <dt>Discount</dt>
                  <dd>-£20</dd>
                </div>
  
                <div class="flex justify-between !text-base font-medium">
                  <dt>Total</dt>
                  <dd>&euro;{{ Cart::total() }}</dd>
                </div>
              </dl>
  
              <div class="flex justify-end">
                <span
                  class="inline-flex items-center justify-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-indigo-700"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="-ml-1 mr-1.5 h-4 w-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z"
                    />
                  </svg>
  
                  <p class="whitespace-nowrap text-xs">2 Discounts Applied</p>
                </span>
              </div>
  
              <div class="flex justify-end">
                <a
                  href="#"
                  class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600"
                >
                  Checkout
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    </main>
</div>
