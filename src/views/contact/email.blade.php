@component('mail::message')
# Introduction
{{ $name }}
<br>
{{ $message }}
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
