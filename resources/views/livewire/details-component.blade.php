<div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-2">
    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
        <img class="w-full h-96 rounded" src="{{ asset('storage/' . $product->image) }}" />

    </div>
    <div class="md:hidden">
        <img class="w-32" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
    </div>
    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
        <div class="border-b border-gray-200 pb-3">
            <p class="text-xs md:lg:text-sm leading-none uppercase text-gray-600">{{ $product->category->name }}</p>
            <h1
                class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 uppercase text-gray-800 :text-white mt-2">
                <strong>{{ $product->name }}</strong></h1>
                <span class="flex items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow"
                        class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow"
                        class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow"
                        class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow"
                        class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1" stroke="yellow" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <span class="text-xs ml-2 text-gray-500">10k reviews</span>
                </span>
        </div>

        <div class="border-b border-gray-200 flex items-center">
            <p class="xl:pr-48 text-sm md:lg:text-base lg:leading-tight leading-normal text-gray-600  mt-5 mb-5">
                {{ $product->description }}</p>
        </div>
        <form wire:submit.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->price}})">
            <div class="py-4 border-b border-gray-200 flex items-center">
                <p class="text-sm md:lg:text-base leading-4 text-gray-800 mr-3">Size: </p>
                <div class="relative">
                    <select
                        class="rounded border appearance-none border-gray-400 focus:outline-none focus:border-red-500 text-base pl-3 pr-7">
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                    <span
                        class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </span>
                </div>

            </div>
            <div class="py-4 border-b border-gray-200 flex items-center">
                <p class="text-sm md:lg:text-base leading-4 text-gray-800 mr-3">Quantity: </p>
                <input type="number" name="quantity" id="quantity" wire:model="qty"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-600 focus:border-blue-600 block p-1"
                    required="">
            </div>
            <h1
                class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 :text-white mt-2">
                Rp.{{ $product->price }}</h1>
            <input type="hidden" name="id" value="{{ $product->id }}" class="text-sm bg-gray-100">
            <button type="submit"
                class="flex items-center bg-red-600 text-white px-6 py-2 focus:outline-none poppins rounded-lg mt-4 md:lg:mt-8 hover:bg-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="pl-3 font-bold">Add to Cart</span>
            </button>
        </form>
    </div>
</div>
