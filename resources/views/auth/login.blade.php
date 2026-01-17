<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="text-3xl text-center font-bold mb-4">Login to Your Account</h2>

        <!-- Name -->
        <div class="flex gap-6 my-2">
            <div class="">
                <x-input-label for="first-name" :value="__('First Name')" />
                <x-text-input id="first-name" class="block mt-1 w-full" type="text" name="first-name" :value="old('first-name')" required autofocus autocomplete="first-name" />
                <x-input-error :messages="$errors->get('first-name')" class="mt-2" />
            </div>

            <div class="">
                <x-input-label for="middle-name" :value="__('Middle Name')" />
                <x-text-input id="middle-name" class="block mt-1 w-full" type="text" name="middle-name" :value="old('middle-name')" required autofocus autocomplete="middle-name" />
                <x-input-error :messages="$errors->get('middle-name')" class="mt-2" />
            </div>

            <div class="">

                <x-input-label for="last-name" :value="__('Last Name')" />
                <x-text-input id="last-name" class="block mt-1 w-full" type="text" name="last-name" :value="old('last-name')" required autofocus autocomplete="last-name" />
                <x-input-error :messages="$errors->get('last-name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />

                @if (Route::has('password.request'))
                <a class="text-sm text-blue-600  hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot?') }}
                </a>
                @endif
            </div>

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center justify-center gap-2">
                <p>Don't have an account?</p>
                <a class="text-blue-600  hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('register') }}">
                    {{ __('Sign Up') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>