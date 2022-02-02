@component('mail::message')
# Jouw account is bijna klaar!

Stel nog even je wachtwoord in en je kan aan de slag!

@component('mail::button', ['url' => route('password.set', $token)])
Wachtwoord instellen
@endcomponent

##### de link is 24 uur geldig

Thanks,<br>
{{ config('app.name') }}
@endcomponent
