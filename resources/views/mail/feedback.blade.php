@component('mail::message')
{{$feedback->subject}}
{{$feedback->message}}
@component('mail::button', ['url' => ''])
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
