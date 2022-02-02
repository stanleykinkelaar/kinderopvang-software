@extends('layouts.base')

@section('subtitle', 'login')

@section('content_base')
        <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
            <a href="{{ route('index') }}"
               class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
                <img src="{{ asset('images/logo.svg') }}" class="h-10 mr-4" alt="Logo">
                <span class="self-center text-4xl font-bold whitespace-nowrap">Kidler</span>
            </a>

            <!-- Card -->
            <div
                class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-0 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
                <div class="hidden lg:flex w-2/3">
                    <img class="rounded-l-lg" src="{{ asset('images/authentication/login.jpg') }}" alt="login image">
                </div>
                <div class="w-full p-6 sm:p-8 lg:p-16 lg:py-0 space-y-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
                        Inloggen
                    </h2>

                    <div class="">
                        @if(session()->has('error'))
                            <p>{{ session()->get('error') }}</p>
                        @endif
                    </div>

                    <form class="mt-8 space-y-6" method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div>
                            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">E-mailadres</label>
                            <input type="email" name="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                   placeholder="naam@email.nl" required>
                        </div>
                        <div>
                            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Wachtwoord</label>
                            <input type="password" name="password" id="password" placeholder="••••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                   required>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                       class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                            </div>
                            <div class="text-sm ml-3">
                                <label for="remember" class="font-medium text-gray-900">Onthoud me</label>
                            </div>
                            <a href="{{ route('forgot-password') }}" class="text-sm text-teal-500 hover:underline ml-auto">Wachtwoord vergeten?</a>
                        </div>
                        <button type="submit"
                                class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection
