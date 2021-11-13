@extends('layouts.app')

@section('subtitle', 'Dashboard')

@section('content')

    <div class="bg-gray-300 p-32 rounded-xl shadow-md">
        @if(session()->has('success'))
            <p>{{ session()->get('success') }}</p>
        @endif

        {!! form_start($form) !!}

        <div class="py-4">
            <div>
                {!! form_label($form->firstname) !!}
            </div>
            {!! form_widget($form->firstname) !!}
        </div>

        <div class="py-4">
            <div>
                {!! form_label($form->lastname) !!}
            </div>
            {!! form_widget($form->lastname) !!}
        </div>

        <div class="py-4">
            <div>
                {!! form_label($form->email) !!}
            </div>
            {!! form_widget($form->email)  !!}
        </div>

        <div class="flex justify-end">
            {!! form_row($form->submit)  !!}
        </div>

        {!! form_end($form, false) !!}
    </div>

@endsection
