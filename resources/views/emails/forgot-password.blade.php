@component('mail::message')
# Introduction

forgot password? you dumbass

@component('mail::button', ['url' => route('password.set', $token)])
    Wachtwoord instellen
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
