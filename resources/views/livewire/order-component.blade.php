    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <div class="flex-1">
                <a href="/">
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
                <div class="border-b pb-4 mt-6">
                    <span class="text-3xl">Your Order</span>
                </div>

                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div
                        class="flex flex-col justify-start items-start bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        @foreach ($orders as $key => $item)
                            <div
                                class="mt-4 md:mt-6 flex flex-row md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                                <div class="pb-4 md:pb-8 w-full md:w-40">
                                    <img class="w-full hidden md:block"
                                        src="{{ asset('storage/' . $item->product->img) }}" />
                                    <img class="w-44 h-48 md:hidden"
                                        src="{{ asset('storage/' . $item->product->img) }}" />
                                </div>
                                <div
                                    class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                    <div class="w-full flex flex-col justify-start items-start space-y-8">
                                        <h3 class="text-xl xl:text-2xl font-semibold leading-6 text-gray-800">
                                            {{ $item->product->name }}</h3>
                                        <div class="flex items-start flex-col space-y-2">
                                            <span class="flex text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 mt-0.5 mr-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                                </svg>
                                                {{ $item->city }}
                                            </span>
                                            <span class="flex text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 mr-2 mt-0.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                {{ $item->payment_method }}
                                            </span>
                                            <span class="flex text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 mr-2 mt-0.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                                </svg>
                                                {{ $item->status }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between space-x-8 items-start w-full">
                                        <p class="text-base xl:text-lg leading-6">Rp{{ $item->product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
