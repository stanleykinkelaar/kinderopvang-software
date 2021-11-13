@extends('layouts.base')

@section('subtitle', 'login')

@section('content_base')

    <div class="flex h-screen">
        <div class="m-auto w-1/3">

            <div class="bg-gray-300 p-32 rounded-xl shadow-md">
                forgot password

                {!! form_start($form) !!}

                <div class="py-4">
                    <div>
                        {!! form_label($form->email) !!}
                    </div>
                    {!! form_widget($form->email) !!}
                </div>

                <div class="py-4">
                    <div>
                        {!! form_label($form->password) !!}
                    </div>
                    {!! form_widget($form->password) !!}
                </div>

                <div class="py-4">
                    <div>
                        {!! form_label($form->password_confirm) !!}
                    </div>
                    {!! form_widget($form->password_confirm)  !!}
                </div>

                <div class="flex justify-end">
                    {!! form_row($form->submit)  !!}
                </div>

                {!! form_end($form, false) !!}

            </div>

        </div>
    </div>

@endsection
