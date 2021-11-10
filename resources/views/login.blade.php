@extends('layouts.base')

@section('subtitle', 'login')

@section('content_base')

    <div class="flex h-screen">
        <div class="m-auto w-1/3">

            <div class="bg-white p-32 rounded-xl shadow-md">
                @if(session()->has('error'))
                    <p>{{ session()->get('error') }}</p>
                @endif

                {!! form_start($form) !!}

                <div class="py-4">
                    <div>
                        {!! form_label($form->email) !!}
                    </div>
                    {!! form_widget($form->email)  !!}
                </div>

                <div class="py-4">
                    <div>
                        {!! form_label($form->password) !!}
                    </div>
                    {!! form_widget($form->password)  !!}
                </div>

                <div class="flex justify-end">
                    {!! form_row($form->submit)  !!}
                </div>

                {!! form_end($form, false) !!}
            </div>

        </div>
    </div>

@endsection