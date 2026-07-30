<x-mail::message>
# New Contact Form Submission

You have received a new message from the website contact form.

**Name:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
**Mobile:** {{ $contact->mobile ?: '—' }}  
**Subject:** {{ $contact->subject ?: '—' }}

**Message:**  
{{ $contact->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
