<x-mail::message>
# Thank you, {{ $contact->name }}!

We got your message. Our team will contact you soon.

@if ($contact->subject)
**Subject:** {{ $contact->subject }}
@endif

If you need to reach us sooner, reply to this email or call us at +1 (604) 313-7091.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
