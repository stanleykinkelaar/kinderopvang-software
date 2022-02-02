@extends('layouts.base')

@section('subtitle', 'login')

@section('content_base')
    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
        <a href="{{ route('index') }}" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
            <img src="{{ asset('images/logo.svg') }}" class="h-10 mr-4" alt="Windster Logo">
            <span class="self-center text-4xl font-bold whitespace-nowrap">kidler</span>
        </a>
        <!-- Card -->
        <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
            <div class="w-full p-6 sm:p-8 md:p-16">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-3">
                    Wachtwoord vergeten?
                </h2>
                <p class="text-base font-normal text-gray-500">
                    Geeft niks! vul je e-mailadres hier beneden in en je ontvangt binnen no-time uitleg hoe dit op te
                    lossen is.
                </p>
                <form class="mt-8 space-y-6" method="POST" action="{{ route('forgot-password.post') }}">
                    @csrf

                    <div>
                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Jouw e-mailadres</label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                               placeholder="naam@email.nl" required>
                    </div>
                    <button type="submit"
                            class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">
                        Verstuur uitleg
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
