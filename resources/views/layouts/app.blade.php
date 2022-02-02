@extends('layouts.base')

@section('subtitle', 'pagina')

@section('content_base')
    @include('partials.navbar')

    <div class="flex overflow-hidden bg-white pt-16">
        @include('partials.sidebar')


        <div id="main-content" class="h-full w-full bg-gray-50 relative ml-16 lg:ml-64 overflow-y-auto">
            <main class="pt-6 px-4">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>

    </div>
@endsection
