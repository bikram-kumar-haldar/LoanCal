<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="max-w-lg mx-auto p-8 bg-white rounded-lg shadow-xl">
        @csrf

        <!-- Page Title -->
        <h1 class="text-4xl font-semibold text-center text-gray-800 mb-8">Login to Your Account</h1>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email Address')" class="text-lg font-medium text-gray-700" />
            <x-text-input 
                id="email" 
                class="block mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-lg font-medium text-gray-700" />
            <x-text-input 
                id="password" 
                class="block mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" 
                type="password" 
                name="password" 
                required 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="block mb-6">
            <label for="remember_me" class="inline-flex items-center text-lg font-medium text-gray-700">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                    name="remember"
                />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-800 underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 px-6 py-3 rounded-lg">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Custom Message after login -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Don’t have an account? 
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 underline">{{ __('Register here') }}</a>
            </p>
        </div>
    </form>
</x-guest-layout>
