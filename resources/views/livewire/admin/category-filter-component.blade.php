<div>
    <h2 class="font-semibold text-3xl text-gray-600 mb-6">All Products</h2>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div>
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
                <div class="grid grid-cols-1 md:grid-cols-2 p-4">
                    <div class="flex justify-between">
                        <!-- menampilkan url untuk menampilkan halaman input berita -->
                        <a href="{{ route('admin.products.add') }}">
                            <button
                                class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outlinenone">Tambah</button>
                        </a>
                        <form action="/products" method="GET">
                            <div class="flex ml-96">
                                <button
                                    class="text-black border-gray-300 border focus:ring-4 bg-gray-50 focus:ring-blue-300 font-normal rounded text-sm px-4 py-1 text-center inline-flex items-center"
                                    type="button" data-dropdown-toggle="dropdown">Sort<svg
                                        class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4"
                                    id="dropdown">
                                    <ul class="py-1" aria-labelledby="dropdown">
                                        @foreach ($categories as $item)
                                            <li><a href="{{ route('admin.category', $item->slug) }}"
                                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">{{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="ml-12">
                                    <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative flex">
                                        <input type="text" name="s" value=""
                                            placeholder="Search something . ." wire:model="search"
                                            class="py-1 px-2 text-sm text-gray-900 bg-gray-50 rounded-l-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                                        <button type="submit"
                                            class="py-1 px-4 text-sm text-gray-900 bg-gray-50 rounded-r-md border hover:bg-blue-500 hover:text-white border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead>
                        <tr class="text-sm font-medium text-gray-700 border-b border-gray-200">
                            <td class="py-4 px-4 text-center font-extrabold text-sm">No</td>
                            <td class="pl-10">
                                <div class="flex items-center gap-x-4 font-bold">Product Name</div>
                            </td>
                            <td class="py-4 px-4 text-center font-bold">Price</td>
                            <td class="py-4 px-4 text-center font-bold">Date</td>
                            <td class="py-4 px-4 text-center font-bold">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($products->currentPage() - 1) * $products->perPage();
                        @endphp
                        @foreach ($products as $key => $item)
                            <tr class="hover:bg-gray-100 transition-colors group">
                                <td class="font-medium text-center">{{ ++$i }}</td>
                                <td class="flex gap-x-4 items-center py-4 pl-10">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="w-20 aspect-[3/2] rounded-lg object-cover object-top border border-gray-200">
                                    <div>
                                        <a href="#"
                                            class="text-lg font-semibold text-gray-700">{{ $item->name }}</a>
                                        <div class="font-medium text-gray-400">{{ $item->category->name }}</div>
                                    </div>
                                </td>
                                <td class="font-medium text-center pl-8">Rp{{ number_format($item->price) }}</td>
                                <td class="font-medium text-center pl-24">{{ $item->created_at }}</td>
                                <td class="py-4 pl-20 font-medium">
                                    <a href="{{ route('admin.product.edit', $item->id) }}"
                                        class="pl-4 font-medium text-blue-500 hover:text-blue-800 hover:underline">Edit</a>
                                    <a href=""
                                        wire:click="deleteProduct({{ $item['id'] }})
                                        class="pl-4 font-medium text-blue-500 hover:text-blue-800 hover:underline">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-4 ">{{ $products->links() }}</div>
            </div>
        </div>
    </div>
</div>
