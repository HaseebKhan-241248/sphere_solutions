<x-mail::message>
# New Entrepreneur Signup – Sphere Marketing Solutions

A new entrepreneur has joined the Sphere Global Network.

**Name:** {{ $signup->name }}  
**Email:** {{ $signup->email }}  
**Country / City:** {{ $signup->location }}  
**Main Skill:** {{ $signup->main_skill }}  
**Additional Skills:** {{ $signup->additional_skills ?: '—' }}  
**LinkedIn / Portfolio:** {{ $signup->portfolio_url ?: '—' }}  

**Message:**  
{{ $signup->message ?: '—' }}

**Submitted From:** {{ $signup->submitted_from ?: '—' }}  
**Submission Date:** {{ $signup->created_at?->timezone(config('app.timezone'))->format('F j, Y g:i A T') }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
