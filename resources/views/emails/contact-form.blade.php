<x-mail::message>
# Contact Form Email

From: {{ $email }}

Message: {{ $message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
