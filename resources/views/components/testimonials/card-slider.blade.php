@props(['testimonial', 'delay' => 100])

@php
    /** @var \App\Models\Testimonial $testimonial */
@endphp

<div data-aos="fade-up" data-aos-delay="{{ $delay }}"
     {{ $attributes->merge([
         'class' => 'testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300',
     ]) }}>
    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
        <img src="{{ $testimonial->photoUrl() }}"
             alt="{{ $testimonial->name }}"
             class="w-full h-full object-cover">
    </div>
    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
        {{ $testimonial->quote }}
    </p>
    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">{{ $testimonial->name }}</h4>
    <span class="prof text-[#4870F8] font-medium text-sm mt-1">{{ $testimonial->role }}</span>
</div>
