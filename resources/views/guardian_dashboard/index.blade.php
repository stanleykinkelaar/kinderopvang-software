@extends('layouts.app')

@section('subtitle', 'Dashboard')

@section('content')

    <div class="py-4">
        <div class="text-2xl">Persoonsgegevens:</div>
        <div class="text-xl text-gray-700">{{ $user->firstname }} {{$user->lastname }}</div>
    </div>

    <a href="{{ route('logout') }}">logout</a>

@endsection
