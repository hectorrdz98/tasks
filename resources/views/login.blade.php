@extends('layouts.master')
@section('content')
    @if(session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded w-full absolute" role="alert">
            <strong class="font-bold">
                {{ session('error') }}
            </strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="close-alert fill-current h-6 w-6 text-red-500" role="button" 
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 
                    3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 
                    1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 
                    3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                </svg>
            </span>
        </div>
    @endisset
    <div class="bg-blue-50 w-full h-full p-4 flex flex-col items-center justify-center">
        <div id="login-form" class="w-full max-w-md">
            <form method="POST" action="{{ route('user.login') }}"
                class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
                @csrf
                <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                    Please Login
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-normal mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="email" type="email" required autofocus placeholder="Email"/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-normal mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                </div>
                <div class="flex items-center justify-center">
                    <button class="px-4 py-2 rounded text-white inline-block shadow-lg 
                        bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">
                        Sign In
                    </button>
                  </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                ¿Don't have an account? 
                <button id="change-register" class="px-4 py-2 ml-2 rounded text-white inline-block shadow-lg 
                    bg-purple-500 hover:bg-purple-600 focus:bg-purple-700" type="submit">
                    Register
                </button>
            </p>
        </div>
        <div id="register-form" class="w-full max-w-md" style="display: none">
            <form method="POST" action="{{ route('user.register') }}"
                class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
                @csrf
                <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                    Create an account
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                        Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="name" type="name" required autofocus placeholder="Name"/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="email" type="email" required placeholder="Email"/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-normal mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                </div>
                <div class="flex items-center justify-center">
                    <button class="px-4 py-2 rounded text-white inline-block shadow-lg 
                        bg-purple-500 hover:bg-purple-600 focus:bg-purple-700" type="submit">
                        Create account
                    </button>
                  </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                Already have account
                <button id="change-login" class="px-4 py-2 ml-2 rounded text-white inline-block shadow-lg 
                    bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">
                    Login
                </button>
            </p>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $("#change-register").click(function () {
            $("#login-form").slideUp();
            $("#register-form").slideDown();
        });
        $("#change-login").click(function () {
            $("#register-form").slideUp();
            $("#login-form").slideDown();
        });
    </script>
@endsection