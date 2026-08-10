<x-mail::message>
# Thank you, {{ $signup->name }}!

We received your signup for Sphere’s Global Entrepreneur Network.

Our team will review your details and contact you if there is a suitable opportunity.

**Name:** {{ $signup->name }}  
**Email:** {{ $signup->email }}  
**Country / City:** {{ $signup->location }}  
**Main Skill:** {{ $signup->main_skill }}

If you need to reach us sooner, reply to this email or call us at +1 (604) 313-7091.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
