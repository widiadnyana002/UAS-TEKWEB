<div>
    <div class="container mt-10 bg-white p-12 mx-auto">
        <h1 class="flex mb-6 border-b-2 items-center justify-center font-bold text-blue-600 text-md lg:text-3xl">
            Detail Your Information
            <br><br>
        </h1>
        <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
            <div class="flex flex-col md:w-full">
                <h2 class="mb-4 font-bold md:text-xl text-heading ">Shipping Address
                </h2>
                <form class="justify-center w-full mx-auto" method="POST" action="">
                    <div class="">
                        <div class="space-x-0 lg:flex lg:space-x-4">
                            <div class="w-full lg:w-1/2">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">
                                    First Name
                                </label>
                                <input name="firstname" type="text" placeholder="First Name"
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                            <div class="w-full lg:w-1/2 ">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">
                                    Last Name
                                </label>
                                <input name="lastname" type="text" placeholder="Last Name"
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="Email"
                                    class="block mb-3 text-sm font-semibold text-gray-500">Email</label>
                                <input name="email" type="text" placeholder="Email"
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="address"
                                    class="block mb-3 text-sm font-semibold text-gray-500">Address</label>
                                <textarea name="address"
                                    class="w-full px-4 py-3 text-xs border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    name="Address" cols="20" rows="4" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="space-x-0 lg:flex lg:space-x-4">
                            <div class="w-full lg:w-1/2">
                                <label for="city"
                                    class="block mb-3 text-sm font-semibold text-gray-500">City</label>
                                <input name="city" type="text" placeholder="City"
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                            <div class="w-full lg:w-1/2 ">
                                <label for="postcode" class="block mb-3 text-sm font-semibold text-gray-500">
                                    Postcode</label>
                                <input name="postcode" type="text" placeholder="Post Code"
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <label class="flex items-center text-sm group text-heading">
                                <input type="checkbox"
                                    class="w-5 h-5 border border-gray-300 rounded focus:outline-none focus:ring-1">
                                <span class="ml-2">Save this information for next time</span></label>
                        </div>
                        <div class="relative pt-3 xl:pt-6">
                            <label for="note" class="block mb-3 text-sm font-semibold text-gray-500">
                                Notes (Optional)
                            </label>
                            <textarea name="noted"
                                class="flex items-center w-full px-4 py-3 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-600"
                                rows="4" placeholder="Notes for delivery"></textarea>
                            <br>
                        </div>
                        <hr>
                        <div class="items-center mt-4">
                            <h2 class="font-bold md:text-xl text-heading ">Payment Methods</h2>
                            <h4 class="mb-4">Choose a way to pay your order:</h4>
                            <label class="items-center text-sm group text-heading">
                                <input type="radio" value="Credit Card" name="payment"
                                    class="w-4 h-4 border border-gray-300 rounded focus:outline-none focus:ring-1">
                                <span class="text-base ml-2">Credit or debit card</span><br><br>
                                <input type="radio" value="COD" name="payment"
                                    class="w-4 h-4 border border-gray-300 rounded focus:outline-none focus:ring-1">
                                <span class="text-base ml-2">Cash On Delivery (COD)</span>
                            </label>
                            <!-- <h4 class="mt-4 mb-6 font-medium">E-Wallet:</h4>
                            <span class="border border-black text-blue-500 px-8 py-2 focus:outline-none poppins rounded mt-4 transform transition duration-300 hover:scale-105">
                               Dana
                            </span> -->
                            <hr class="mt-6">
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="w-full mt-6 px-6 py-2 font-medium text-white bg-blue-600 hover:bg-blue-900">Checkout</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                <div class="pt-12 md:pt-0 2xl:ps-4">
                    <h2 class="text-xl font-bold">Order Summary
                    </h2>
                    <div class="mt-8">
                        <div class="flex flex-col space-y-4">
                            @foreach (Cart::content() as $item)
                                <div class="flex mb-4 space-x-4">
                                    <div>
                                        <img src="{{ asset('storage/' . $item->model->image)}}"
                                            alt="{{$item->model->name}}" class="w-20">
                                    </div>
                                    <div>
                                        <h2 class="text-xl font-bold">{{$item->model->name}}</h2>
                                        <span class="text-red-600">Rp{{number_format($item->subtotal)}}</span>
                                    </div>
                                    <div>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <h2 class="text-xl font-bold">Your Billing</h2>
                    </div>
                    <div
                        class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Subtotal<span class="ml-2">Rp</span></div>
                    <div
                        class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Shipping Tax<span class="ml-2">0</span></div>
                    <div
                        class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Total<span class="ml-2">Rp</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
