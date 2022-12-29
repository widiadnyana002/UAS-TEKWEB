<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">All Menu</h1>
        <div class="flex items-center">
            <div class="max-w-lg mx-auto mr-6">
                <button
                    class="text-black border-gray-300 border focus:ring-4 bg-gray-50 focus:ring-blue-300 font-normal rounded text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button" data-dropdown-toggle="dropdown">Sort by category<svg class="w-4 h-4 ml-2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4"
                    id="dropdown">
                    <ul class="py-1" aria-labelledby="dropdown">
                        @foreach ($category as $item)
                            <li><a href="{{route ('product.category', $item->slug)}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="relative inline-block text-left">
                <div class="flex justify-center">
                    <div class="flex justify-center">
                        <div class="xl:w-96">
                            <div class="input-group relative flex flex-wrap items-stretch w-full">
                                <input type="search" name="q" wire:model="search"
                                    class="form-control relative flex-auto min-w-0 block w-32 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-lg my-4 font-medium tracking-tight text-gray-900">We Found <strong
            class="text-red-500">{{ $products->total() }}</strong> items for you! </h3>
    <div>
        <section id="menu" class="bg-white mt-4 max-w-screen-xl mx-auto px-6">

            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded">
                        <div class="px-4 py-5 flex-auto">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4">
                                @foreach ($products as $key => $item)
                                    <div class="flex items-center justify-center mt-12">
                                        <div
                                            class="bg-white text-gray-700 w-80 min-h-[10rem] shadow-lg rounded-md overflow-hideen">
                                            <img class="w-full h-full object-cover"
                                                src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                                            <div class="p-5 flex-col gap-3">
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs bg-gray-100">{{ $item->category->name }}</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">official
                                                    store</span>
                                            </div>
                                            <h2
                                                class="font-semibold uppercase pl-6 text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                                                <strong>{{ $item->name }}</strong></h2>
                                            <div>
                                                <span
                                                    class="text-xl pl-6 font-bold">Rp{{ number_format($item->price) }}</span>
                                            </div>
                                            <span class="flex items-center mt-4 pl-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="yellow" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="yellow" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="yellow" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="yellow" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1" stroke="yellow"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                </svg>
                                                <span class="text-xs ml-2 text-gray-500">10k reviews</span>
                                            </span>
                                            <div class="mt-5 m-3 mb-6 flex gap-2">
                                                <a wire:click.prevent="store({{ $item->id }}, '{{ $item->name }}', {{ $item->price }})"
                                                    class="bg-red-500 hover:bg-red-700 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                                                    href="#">
                                                    Add to cart
                                                </a>

                                                <a class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md"
                                                    href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 opacity-50">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                    </svg>
                                                </a>

                                                <a class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md"
                                                    href="{{ route('product.detail', $item->slug) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 opacity-50 hover:opacity-100">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-8 ">{{ $products->links() }}</div>
            </div>
        </section>
    </div>


</main>
