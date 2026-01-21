<x-guest-layout>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <h2 class="text-3xl text-center font-bold mb-4">Login to Your Account</h2>

        <!-- Name -->
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 my-4">
            <div class="">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input name="first_name" id="first_name" class="block mt-1 w-full" type="text"
                    :value="old('first_name')" required autofocus autocomplete="first_name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <div class="">
                <x-input-label for="middle_name" :value="__('Middle Name')" />
                <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                    :value="old('middle_name')" autofocus autocomplete="middle_name" />
                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
            </div>

            <div class="">

                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input name="last_name" id="last_name" class="block mt-1 w-full" type="text"
                    :value="old('last_name')" required autofocus autocomplete="last_name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input name="email" id="email" class="block mt-1 w-full" type="email"
                :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />
                <a class="text-blue-600  hover:text-blue-900 ">
                    forgot?
                </a>
            </div>

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('role')" />

            <select name="role" id="role"
                class="block mt-1 w-full border-gray-300 focus:border-[#D1E9FF] focus:ring-[#D1E9FF] rounded-md shadow-sm">
                <option value="admin">Admin</option>
                <option value="sales-rep">Sales Rep</option>
            </select>

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center justify-center gap-2">
                <p>Don't have an account?</p>
                <a class="text-blue-600  hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
                    href="{{ route('register') }}">
                    {{ __('Sign Up') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>