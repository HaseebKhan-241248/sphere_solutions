@props(['testimonial', 'active' => false])

@php
    /** @var \App\Models\Testimonial $testimonial */
@endphp

<div {{ $attributes->merge([
    'class' => 'testi-card' . ($active ? ' animate' : ''),
]) }}>
    <img src="{{ $testimonial->photoUrl() }}" alt="{{ $testimonial->name }}">
    <p class="text-[#20233F] font-sans text-20px">{{ $testimonial->quote }}</p>
    <h3>{{ $testimonial->name }}</h3>
    <span>{{ $testimonial->role }}</span>
</div>
