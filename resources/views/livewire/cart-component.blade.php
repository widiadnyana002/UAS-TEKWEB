<div>
    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <div class="flex-1">
                <a href="{{ route('shop') }}">
                    <div class="flex mb-4">
                        <button type="submit"
                            class="flex items-center bg-red-600 text-white px-4 py-2 focus:outline-none poppins rounded-full  hover:bg-red-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            <p class="font-medium pl-1">Back</p>
                        </button>
                    </div>
                </a>
                <div class="text-center mb-6">
                    <span class="border-b-2 border-red-400 text-center text-3xl">Your Products</span>
                </div>
                @if (Session::has('success_message'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ Session::get('success_message') }}</strong>
                  </div>
                @endif
                @if (Cart::count() > 0)
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">Product</th>
                                <th class="text-right">Price Unit</th>
                                <th class="hidden text-right md:table-cell">Quantity</th>
                                <th class="hidden text-right md:table-cell">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell border-b border-gray-200">
                                        <a href="">
                                            <img src="{{ asset('storage/' . $item->model->image) }}"
                                                class="w-20 mt-6 rounded" alt="Thumbnail">
                                        </a>
                                    </td>
                                    <td class="border-b border-gray-200">
                                        <a href="">
                                            <p class="mb-2 md:ml-0">{{ $item->model->name }}</p>
                                            <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')">
                                                <button type="submit" class="text-sky-700 md:ml-0">
                                                    <small>(Remove item)</small>
                                                </button>
                                            </a>
                                        </a>
                                    </td>

                                    <td class="hidden border-b border-gray-200 text-right md:table-cell">
                                        <span class="text-sm lg:text-base font-medium">
                                            Rp{{ number_format($item->model->price)}}
                                        </span>
                                    </td>

                                    <td class="hidden border-b border-gray-200 text-right md:table-cell">
                                        <a href="#" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"
                                            data-action="decrement"
                                            class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-20 rounded-l cursor-pointer outline-none">
                                            <span class="px-4 py-2 text-2xl font-thin">−</span>
                                        </a>
                                        <span class="bg-gray-300 text-black text-sm lg:text-base font-medium px-4 mt-0">
                                            {{ $item->qty }}
                                        </span>
                                        <a href="#" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"
                                            data-action="increment"
                                            class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                            <span class="px-4 py-2 text-2xl font-thin">+</span>
                                        </a>
                                    </td>

                                    <td class="hidden border-b border-gray-200 text-right md:table-cell">
                                        <span class="text-sm lg:text-base font-medium">
                                            Rp{{number_format($item->subtotal)}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No item in cart!</p>
                @endif
                <a class="justify-end" href="{{route ('checkout')}}">
                    <button
                        class="bg-red-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-4 transform transition duration-300 hover:scale-105">
                        Order Now
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
