@component('mail::message')
EVENT TICKET
the event name : {{$event->name}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent


