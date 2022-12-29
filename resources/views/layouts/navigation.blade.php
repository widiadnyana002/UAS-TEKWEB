<nav class="bg-white shadow-sm">
    <div class="max-w-6xl mx-auto px-2">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="{{ route('home.index') }}" class="flex items-center py-4 md:ml-20 lg:ml-6 px-2">
                        <span class="font-bold text-2xl text-black">Aa<span class="text-red-600 mr-4">Bread</span></span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home.index') }}"
                        class="py-4 px-2 text-gray-800 font-semibold hover:text-red-500 transition duration-300">Home</a>
                    <a href="{{ route('shop') }}"
                        class="py-4 px-2 text-gray-800 font-semibold hover:text-red-500 transition duration-300">Menu</a>
                    <a href=""
                        class="py-4 px-2 text-gray-800 font-semibold hover:text-red-500 transition duration-300">Services</a>
                    <a href=""
                        class="py-4 px-2 text-gray-800 font-semibold hover:text-red-500 transition duration-300">Contact</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="md:flex items-center space-x-3 ">
                @livewire('cart-icon-component')
                @auth
                    <div class="flex items-center justify-center">
                        <div class="hidden relative md:lg:inline-block text-left dropdown">
                            <span class="shadow-sm">
                                <button
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                                    type="button" aria-haspopup="true" aria-expanded="true"
                                    aria-controls="headlessui-menu-items-117">
                                    <span
                                        class="hidden md:lg:block items-center pt-4 md:lg:pt-0">{{ Auth::user()->name }}</span>
                                    <svg class="hidden md:lg:block w-5 h-5 ml-2 mt-4 md:lg:mt-0 -mr-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </span>
                            <div
                                class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                <div class="absolute right-0 w-32 mt-2 origin-top-right bg-white border-gray-200 divide-gray-100 shadow-lg outline-none"
                                    aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                    role="menu">
                                    <div class="">
                                        <div class="py-1">
                                            @if (Auth::user()->utype == 'ADM')
                                                <a href="{{ route('admin.products') }}" tabindex="3"
                                                    class="text-gray-700 flex justify-between px-4 py-2 text-sm text-center"
                                                    role="menuitem">Admin</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                                        tabindex="3"
                                                        class="text-gray-700 flex justify-between px-4 py-2 text-sm text-center"
                                                        role="menuitem">Log Out</a>
                                                </form>
                                            @else
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                                        tabindex="3"
                                                        class="text-gray-700 flex justify-between px-4 py-2 text-sm text-center"
                                                        role="menuitem">Log Out</a>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('register') }}"
                        class="hidden sm:hidden md:block lg:block rounded-lg font-semibold bg-red-600 hover:bg-red-800 duration-500 text-white py-2 px-6">Register</a>
                    @endif
                </div>


                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                @auth
                    <li><a href="{{route ('home.index')}}"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Home</a>
                    </li>
                    <li><a href="{{route ('shop')}}"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Menu</a>
                    </li>
                    <li><a href="#service"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Service</a>
                    </li>
                    <li><a href="#contact"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Contact</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                tabindex="3"
                                class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Log Out</a>
                        </form>
                    </li>
                @else
                    <li><a href="{{route ('home.index')}}"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Home</a>
                    </li>
                    <li><a href="#menu"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Menu</a>
                    </li>
                    <li><a href="#service"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Service</a>
                    </li>
                    <li><a href="#contact"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Contact</a>
                    </li>
                    <li><a href="{{ route('register') }}"
                            class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>

            <style>
                .dropdown:focus-within .dropdown-menu {
                    opacity: 1;
                    transform: translate(0) scale(1);
                    visibility: visible;
                }
            </style>
        </nav>
