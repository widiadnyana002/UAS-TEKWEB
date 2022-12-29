<div>
    <div
        class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            @if (Session::has('message'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{ Session::get('message') }}</strong>
              </div>
            @endif
            <span class="text-2xl font-light ">Add New Category</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">

                <form wire:submit.prevent="storeCategory">
                    <div class="px-8 py-6 ">
                        <label class="block font-semibold">Category Name </label>
                        <input type="text" placeholder="New Category Name" wire:model="name"
                            class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                        <div class="text-xs text-red-600">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <label class="block font-semibold">Slug Name</label>
                        <input type="text" placeholder="New Slug Name" wire:model="slug"
                            class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                        <div class="text-xs text-red-600">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="flex justify-end items-baseline">
                            <button type="submit"
                                class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
