<div>
    <h2 class="font-semibold text-xl text-gray-600 mb-6">Add New Menu</h2>
    @if (Session::has('message'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{ Session::get('message') }}</strong>
      </div>
    @endif
    <form wire:submit.prevent="addProduct">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" wire:model="name"
                            class="@error('name') border-red-500 @enderror h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                            value="" placeholder="New Product Name" />
                        <div class="text-xs text-red-600">
                            @error('name')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="name">Slug Name</label>
                        <input type="text" name="name" wire:model="slug"
                            class="@error('slug') border-red-500 @enderror h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                            value="" placeholder="New Slug Name" />
                        <div class="text-xs text-red-600">
                            @error('slug')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="category_id">Category</label>
                        <select name="category_id" wire:model="category_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            <option value="">Add Category here</option>
                            @foreach ($category as $key => $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-xs text-red-600">
                            @error('category_id')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="price">Price</label>
                        <input type="number" name="price" wire:model="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                            value="" placeholder="Price" />
                        <div class="text-xs text-red-600">
                            @error('price')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="description text-sm">Description</label>
                        <input id="about" name="description" wire:model="description"
                            class="shadow-sm py-6 focus:ring-indigo-500 px-4 border focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" />
                        <div class="text-xs text-red-600">
                            @error('description')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                            file</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" wire:model="image" type="file">
                        @if ($image)
                            <img src="{{$image->temporaryUrl()}}" width="120">
                        @endif
                        <div class="text-xs text-red-600">
                            @error('image')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
