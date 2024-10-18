@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="absolute top-4 right-4">
        <a href="{{ url('/') }}" class="text-blue-500 hover:underline" style="text-decoration: none">
            {{ __('Back') }}
        </a>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <div class="flex justify-center mb-4">
            <img alt="User icon" class="rounded-full" height="80" src="https://i.pinimg.com/564x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" width="80"/>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <input id="email" type="email" class="w-full p-2 border border-gray-300 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password" type="password" class="w-full p-2 border border-gray-300 rounded @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center mb-4">
                <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="text-sm text-gray-600" for="remember">Remember me</label>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
                LOGIN
            </button>
        </form>

        <div class="text-center my-4 text-gray-600">Or</div>
        <div class="text-center mb-4 text-gray-600">With your social media account</div>
        <div class="flex justify-center space-x-4">
            <a class="text-blue-700" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="text-blue-400" href="#"><i class="fab fa-twitter"></i></a>
            <a class="text-red-600" href="#"><i class="fab fa-google"></i></a>
        </div>

        <!-- Add the "Don't have an account? Register" section here -->
        <div class="text-center mt-4">
            <p class="text-gray-600 text-sm">Don't have an account?</p>
            <a class="text-blue-500 text-sm hover:underline" href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <footer class="text-center mt-8 text-gray-600 text-sm">
        © 2019 Inventaris Barang. All Rights Reserved | Design by
        <a class="text-blue-500" href="#">Gilang</a>
    </footer>
</div>
@endsection
