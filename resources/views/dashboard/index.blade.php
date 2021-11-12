@extends('layouts.app')

@section('subtitle', 'Dashboard')

@section('content')

    <div class="py-4">
        <div class="text-2xl">Persoonsgegevens:</div>
        <div class="text-xl text-gray-700">{{ $user->firstname }} {{$user->lastname }}</div>
    </div>

    <div class="py-4">
        <div class="text-2xl">Bedrijf:</div>
        <div class="text-xl text-gray-700">{{ $user->company->name }}</div>
    </div>

    <div class="py-4">
        <div class="text-2xl">Groepen:</div>

        <div class="">
            @foreach($groups as $group)
                <div>{{ $group->name }}</div>
            @endforeach
        </div>
    </div>

@endsection
