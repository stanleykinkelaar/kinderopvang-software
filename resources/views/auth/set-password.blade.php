@extends('layouts.base')

@section('subtitle', 'Wachtwoord Aanpassen')

@section('content_base')

    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
        <a href="{{ route('index') }}" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
            <img src="{{ asset('images/logo.svg') }}" class="h-10 mr-4" alt="Kidler logo">
            <span class="self-center text-4xl font-bold whitespace-nowrap">Kidler</span>
        </a>
        <!-- Card -->
        <div
            class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-0 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
            <div class="hidden lg:flex w-2/3 h-full">
                <img class="rounded-l-lg" src="{{ asset('images/authentication/reset-password.jpg') }}"
                     alt="reset password image">
            </div>
            <div class="w-full p-6 sm:p-8 lg:p-16 space-y-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
                    Wachtwoord aanpassen
                </h2>
                <form class="mt-8 space-y-6" method="POST" action="{{ route('password.set.post', $token) }}">
                    @csrf

                    <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2">
                            Nieuw wachtwoord
                        </label>
                        <input type="password" name="password" id="password" placeholder="••••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                               required>
                    </div>

                    <div>
                        <label for="confirm-password" class="text-sm font-medium text-gray-900 block mb-2">
                            Bevestig nieuw wachtwoord
                        </label>
                        <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                               required>
                    </div>

                    <button type="submit"
                            class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">
                        Pas wachtwoord aan
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
