<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2 class="text-3xl text-center font-bold mb-4">Register Your Account</h2>
        <!-- Name -->
        <div class="flex gap-6 ">
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
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('role')" />

            <select name="role" id="role" class="block mt-1 w-full border-gray-300 focus:border-[#D1E9FF] focus:ring-[#D1E9FF] rounded-md shadow-sm">
                <option value="admin">Admin</option>
                <option value="sales-rep">Sales Rep</option>
            </select>

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-6">

            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-4">
            <a class="text-blue-600  hover:text-text-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>