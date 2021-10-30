@extends('layouts.base')

@section('subtitle', 'pagina')

@section('content_base')

    <nav class="flex justify-center bg-green-500 p-6">
        <ul class="flex justify-between w-1/2 font-semibold text-gray-100">
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
        </ul>
    </nav>

    @yield('content')

@endsection
