@component('mail::message')
# Welcome, {{$user->name}}

Thank you for using my blog website

@component('mail::button', ['url' => 'https://github.com/AhmedHassan273'])
My github
@endcomponent

@component('mail::panel', ['url' => ''])
{{ config('app.name') }} 2018
@endcomponent

@endcomponent