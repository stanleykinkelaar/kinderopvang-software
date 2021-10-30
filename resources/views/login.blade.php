@extends('layouts.base')

@section('subtitle', 'login')

@section('content_base')

    <div class="bg-red-200 w-full h-full">
        @if(session()->has('error'))
            <p>{{ session()->get('error') }}</p>
        @endif

        {!! form($form) !!}
    </div>

@endsection
