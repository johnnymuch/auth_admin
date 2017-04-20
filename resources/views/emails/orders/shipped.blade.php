@component('mail::message')
# {{ $content['title'] }}

{{ $content['body'] }}

@component('mail::table')
| Technology    | Table         | Example  |
| ------------- |:-------------:| --------:|
| PHP           | Centered      | $100     |
| Laravel       | Right-Aligned | $200     |
| java       	| Sample		| $900     |
@endcomponent

@component('mail::button', ['url' => url('editemail/'.$content['token'])])
{{ $content['button'] }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent