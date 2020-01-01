@component('mail::message')
# New Message via Contact Form

<b>Name:</b> {{ $data->name }}

<b>Email Address:</b> {{ $data->email }}

<b>Phone:</b> {{ phone($data->phone, 'US') }}

<b>Type:</b> {{ ucfirst($data->type) }}

<b>Message:</b> {{ $data->message }}

@endcomponent
