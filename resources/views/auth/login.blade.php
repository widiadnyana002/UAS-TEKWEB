{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-app-layout>
    <section class="bg-gray-100">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl hite">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route ('login')}}" method="post">
                      @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 hite">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 y-700 -gray-600 older-gray-400 hite ring-blue-500 border-blue-500" 
                            placeholder="Enter Your Email" :value="('email')" required autofocus >
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 hite">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 borde text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 y-700 -gray-600 older-gray-400 hite ring-blue-500 border-blue-500" required autocomplete="current-password">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 y-700 -gray-600 ring-primary-600 ffset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500 ray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="{{route ('password.request')}}" class="text-sm font-medium text-primary-600 hover:underline lue-500">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center e-600 bg-blue-700 ring-primary-800">Sign in</button>
                        <p class="text-sm font-light text-gray-500 ray-400">
                            Don’t have an account yet? <a href="{{route ('register')}}" class="font-medium text-primary-600 hover:underline rimary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
