@props([
    'testimonials' => null,
    'title' => 'What Clients Say About Our Services!',
    'buttonClass' => 'w-16 h-16',
])

@php
    try {
        $testimonials = $testimonials ?? \App\Models\Testimonial::query()->active()->ordered()->get();
    } catch (\Throwable) {
        $testimonials = $testimonials ?? collect();
    }
@endphp

@if ($testimonials->isNotEmpty())
    <section data-aos="fade-up" data-aos-delay="100" class="w-full bg-[#F8F9FA] py-16 md:py-24 font-sans antialiased overflow-hidden">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="text-[#4870F8] font-semibold text-xl tracking-wide block mb-2">Testimonial</span>
                    <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-lg">
                        {{ $title }}
                    </h2>
                </div>

                <div class="flex items-center gap-4 shrink-0">
                    <button id="customPrevBtn"
                            class="{{ $buttonClass }} rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>
                    </button>
                    <button id="customNextBtn"
                            class="{{ $buttonClass }} rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="testimonialSlider"
                 class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none py-4">
                @foreach ($testimonials as $testimonial)
                    <x-testimonials.card-slider
                        :testimonial="$testimonial"
                        :delay="$loop->iteration * 100"
                    />
                @endforeach
            </div>
        </div>
    </section>
@endif
