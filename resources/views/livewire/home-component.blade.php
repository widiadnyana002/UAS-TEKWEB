<div>
    <main>
        <div class="w-full h-full items-center justify-between p-20 md:pl-24 grid grid-cols-1 sm:grid-cols-3">
            <div class="sm:col-span-2 flex flex-col justify-start items-center space-y-4">
                <div class="flex flex-row justify-start items-start w-full">
                    <div class="bg-gray-900 text-white py-1 px-6">30% OFF</div>
                    <div class="bg-gray-300 text-gray-900 py-1 px-4">First Order</div>
                </div>

                <div class="flex justify-start items-start w-full">
                    <p class="text-gray-900 text-3xl md:text-3xl lg:text-6xl tracking-wider font-bold">
                        Order Your <br /> Favorite Food
                    </p>
                </div>

                <div class="flex justify-start items-start w-full">
                    <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor <br> incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="flex justify-start items-start w-full">
                    <a href="{{route ('shop')}}">
                        <button class="rounded-lg bg-red-600 hover:bg-red-800 duration-500 text-white py-2 px-8"
                            type="submit">
                            Order Now
                        </button></a>
                </div>
            </div>
            <div class="sm:block">
                <img src="https://parspng.com/wp-content/uploads/2022/05/pizzapng.parspng.com-3.png" alt="Pizza Home"
                    width="" />
            </div>
        </div>

        <section id="service" class="px-2">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"></div>
            <div class="text-center font-poppins pt-6 text-gray-900">
                <span class="font-semibold text-4xl">Service</span>
                <h1 class="pt-3">Our Awesome Service</h1>
            </div>

            <div class="items-center grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
                <div class="transition p-16 rounded-2xl">
                    <div class="overflow-hidden rounded-xl flex flex-grow">
                        <img class="transition duration-700 hover:scale-125"
                            src="https://i.postimg.cc/tRvyLtch/service1.png" alt="Fast Delivery" />
                    </div>
                    <div class="flex mt-6 space-x-3">
                        <div class="flex flex-col space-y-3 text-center font-poppins">
                            <h1 class="text-xl text-gray-800">Fast Delivery</h1>
                            <p class="text-sm text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="transition p-16 rounded-2xl">
                    <div class="overflow-hidden rounded-xl flex flex-grow">
                        <img class="transition duration-700 hover:scale-125"
                            src="https://i.postimg.cc/fRn4NHf0/service2.png" alt="Fast Responder" />
                    </div>
                    <div class="flex mt-6 space-x-3">
                        <div class="flex flex-col space-y-3 text-center font-poppins">
                            <h1 class="text-xl text-gray-800">Fast Responder</h1>
                            <p class="text-sm text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="transition p-16 rounded-2xl">
                    <div class="overflow-hidden rounded-xl flex flex-grow">
                        <img class="transition duration-700 hover:scale-125"
                            src="https://i.postimg.cc/j2w9VNWX/service3.png" alt="Home Delivery" />
                    </div>
                    <div class="flex mt-6 space-x-3">
                        <div class="flex flex-col space-y-3 text-center font-poppins">
                            <h1 class="text-xl text-gray-800">Home Delivery</h1>
                            <p class="text-sm text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="bg-white">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 font-poppins">Contact
                    Us
                </h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500sm:text-xl">Got a technical issue? Want to
                    send
                    feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" id="email"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 bg-gray-200"
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 bg-gray-200"
                            placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 bg-gray-200"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Send
                        message</button>
                </form>
            </div>
        </section>
    </main>
</div>
