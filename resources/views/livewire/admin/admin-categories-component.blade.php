<div>
    <h2 class="font-semibold text-3xl text-gray-600 mb-6">Category</h2>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="grid grid-cols-12 bg-white">
            <div class="col-span-6 p-4">
                <a href="{{ route('admin.category.add') }}">
                    <button
                        class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah</button></a>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = ($category->currentPage() - 1) * $category->perPage();
                @endphp
                @foreach ($category as $key => $item)
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ ++$i }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $item->name }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route('admin.category.edit', $item->id) }}"
                                class="pr-6 font-medium text-blue-500 hover:text-blue-800 hover:underline">
                                Edit
                            </a>

                            <button wire:click="deleteCategory({{$item['id']}})"
                                class="font-medium text-blue-500 hover:text-blue-800 hover:underlinemd:ml-0">
                                Remove
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-4 ">{{ $category->links() }}</div>
    </div>
</div>
