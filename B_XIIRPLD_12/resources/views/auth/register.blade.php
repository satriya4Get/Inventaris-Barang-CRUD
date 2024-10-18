@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm relative">
        <div class="absolute top-4 right-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                {{ __('Back to Login') }}
            </a>
        </div>
        <div class="flex justify-center mb-4">
            <h2 class="text-xl font-bold">{{ __('Register') }}</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                <input id="name" type="text" class="w-full p-2 border border-gray-300 rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="w-full p-2 border border-gray-300 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" class="w-full p-2 border border-gray-300 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="w-full p-2 border border-gray-300 rounded" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="mb-0">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>

    <footer class="text-center mt-8 text-gray-600 text-sm">
        © 2019 Inventaris Barang. All Rights Reserved | Design by Gilang
        <a class="text-blue-500" href="#">Gilang</a>
    </footer>
</div>
@endsection
