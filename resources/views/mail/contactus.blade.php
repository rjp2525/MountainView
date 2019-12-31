@component('mail::message')
# New Message via Contact Form

A new message was received via the contact form:

<b>Name:</b> {{ $data->name }}

<b>Email Address:</b> {{ $data->email }}

<b>Phone:</b> {{ phone($data->phone, 'US') }}

<b>Type:</b> {{ ucfirst($data->type) }}

<b>Message:</b> {{ $data->message }}


@component('mail::button', ['url' => 'https://mountainviewlandscapers.com', 'color' => 'success'])
View Message
@endcomponent

Mountain View Landscaping
@endcomponent
