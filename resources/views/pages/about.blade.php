@extends('layout.app')

@section('content')

    @if ($about)
        <section>
            <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

                @if ($about->heroImageUrl())
                    <img src="{{ $about->heroImageUrl() }}" alt="About Hero"
                         class="absolute inset-0 w-full h-full object-cover z-0">
                @endif

                <div class="absolute inset-0 bg-black/50 z-10"></div>

                <div class="relative z-20">
                    <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                        {{ $about->hero_heading }}
                    </h1>

                    <x-page-breadcrumb current="About" />
                </div>

            </div>
        </section>

        @if (filled($about->features_tagline) || filled($about->features_heading) || ! empty($about->features))
            <section data-aos="fade-up">
                <div class="py-24 px-4 sm:px-6 lg:px-8">

                    <div class="max-w-[88%] mx-auto">

                        @if (filled($about->features_tagline) || filled($about->features_heading))
                            <div class="text-center max-w-2xl mx-auto mb-16">
                                @if (filled($about->features_tagline))
                                    <span class="text-[#4870F8] text-lg tracking-wide block mb-3">
                                        {{ $about->features_tagline }}
                                    </span>
                                @endif
                                @if (filled($about->features_heading))
                                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-semibold tracking-tight leading-tight">
                                        {{ $about->features_heading }}
                                    </h2>
                                @endif
                            </div>
                        @endif

                        @if (! empty($about->features))
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                                @foreach ($about->features as $card)
                                    <div class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] border border-slate-100 p-6 transition duration-300 group">
                                        <div class="mb-6">
                                            @if (filled($about->mediaUrl($card['icon'] ?? null)))
                                                <img src="{{ $about->mediaUrl($card['icon'] ?? null) }}"
                                                     alt="{{ $card['title'] ?? 'Feature' }}"
                                                     class="bg-[#EEF2FF] rounded-full w-16 transition duration-300">
                                            @endif
                                        </div>

                                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                                            {{ $card['title'] ?? '' }}
                                        </h4>

                                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                                            {{ $card['description'] ?? '' }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                </div>
            </section>
        @endif

        <section data-aos="fade-up" class="relative w-full bg-slate-50 overflow-hidden">
            <div class="relative min-h-[650px] lg:min-h-[700px] xl:min-h-[750px] w-full flex items-end lg:items-end overflow-hidden">

                @if ($about->aboutImageUrl())
                    <img src="{{ $about->aboutImageUrl() }}" alt="About Background"
                         class="absolute inset-0 w-full h-full object-cover z-0">
                @endif

                <div class="relative z-20 w-full lg:max-w-[45%] xl:max-w-[40%] 2xl:max-w-[42%] lg:ml-auto bg-white p-6 sm:p-10 shadow-2xl mt-50 mx-4 sm:mx-8 lg:mx-0 lg:mr-32 lg:rounded-t-xl lg:rounded-b-none overflow-y-auto xl:overflow-hidden bottom-0 self-end">

                    @if (filled($about->about_tagline))
                        <span class="text-[#4870F8] font-medium text-lg tracking-wide block mb-5">
                            {{ $about->about_tagline }}
                        </span>
                    @endif

                    @if (filled($about->about_heading))
                        <h2 class="text-[#0F172A] text-3xl lg:text-4xl font-semibold tracking-tight leading-[45px] mb-5">
                            {{ $about->about_heading }}
                        </h2>
                    @endif

                    @if (filled($about->about_description))
                        <p class="text-[#555555] font-sans text-sm leading-[25px] mb-7">
                            {{ $about->about_description }}
                        </p>
                    @endif

                    @if (! empty($about->about_highlights))
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            @foreach ($about->about_highlights as $feature)
                                <div class="flex flex-col items-start">
                                    <div class="mb-3">
                                        @if (filled($about->mediaUrl($feature['icon'] ?? null)))
                                            <img src="{{ $about->mediaUrl($feature['icon'] ?? null) }}"
                                                 alt="{{ $feature['title'] ?? 'Highlight' }}"
                                                 class="w-16 h-16 object-contain">
                                        @endif
                                    </div>
                                    <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">{{ $feature['title'] ?? '' }}</h3>
                                    <p class="text-[#555555] text-md leading-[25px] font-sans">
                                        {{ $feature['description'] ?? '' }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if (filled($about->about_cta_text))
                        <div class="pb-2">
                            <a href="{{ $about->ctaUrl($about->about_cta_url, '/contact-us') }}"
                               class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-semibold px-8 py-3 rounded-full transition shadow-md hover:shadow-lg text-sm tracking-wide">
                                {{ $about->about_cta_text }}
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </section>
    @endif

    <x-team.section
        wrapper-class="bg-white py-24"
        inner-class="max-w-[85%] mx-auto"
        grid-class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
    />

@endsection
