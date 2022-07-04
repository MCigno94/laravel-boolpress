@component('mail::message')

# Check Message

Admin you have one message from {{$message->full_name}}

Previous: <br>
Email: {{$message->email}} <br>
Subject: {{$message->subject}} <br>
Message: {{$message->message}} <br>

Thanks,<br>
{{ config('app.name') }}

@endcomponent