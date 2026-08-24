@props([
    'testimonials' => null,
])

@php
    try {
        $testimonials = $testimonials ?? \App\Models\Testimonial::query()->active()->ordered()->get();
    } catch (\Throwable) {
        $testimonials = $testimonials ?? collect();
    }
@endphp

@if ($testimonials->isNotEmpty())
    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="md:max-w-[88%] mx-auto px-6">
            <div class="flex items-center justify-between mb-16">
                <div>
                    <h1 class="mb-4 text-[#4870F8] text-xl">Testimonial</h1>
                    <h2 class="text-[20px] md:text-[45px] font-semibold leading-[1.1] text-[#20233F] md:max-w-2xl">
                        What Our Clients Say
                    </h2>
                </div>

                <div class="flex gap-2 md:gap-4">
                    <button id="previous"
                            class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button id="next"
                            class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-hidden">
                <div id="slider" class="flex gap-8">
                    @foreach ($testimonials as $testimonial)
                        <x-testimonials.card-home
                            :testimonial="$testimonial"
                            :active="$loop->first"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
