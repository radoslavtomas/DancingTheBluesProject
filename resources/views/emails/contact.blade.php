@component('mail::message')
@component('mail::panel')
#You have a new message

##Message
{{ $data['body_message'] }}

###This message was sent by:
{{ $data['name'] }} - {{ $data['email'] }}

Yours,<br>
{{ config('app.name') }}
@endcomponent
@endcomponent