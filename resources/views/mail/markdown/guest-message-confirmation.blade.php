@component('mail::message')
# Introduction

Grazie per averci scritto!

Name: {{ $message->full_name}}
Email: {{ $message->email}}

Il tuo messaggio: <br>
{{ $message->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
