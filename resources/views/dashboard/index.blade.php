@extends('layouts.app')

@section('subtitle', 'Dashboard')

@section('content')

    @foreach(auth()->user()->groups as $group)
        <div>{{ $group }}</div>
    @endforeach

@endsection
