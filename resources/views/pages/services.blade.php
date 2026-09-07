@extends('layout.app')

@section('content')

    @if ($servicesPage)
        <section>
            <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
                @if ($servicesPage->heroImageUrl())
                    <img src="{{ $servicesPage->heroImageUrl() }}" alt="Services Hero"
                         class="absolute inset-0 w-full h-full object-cover z-0">
                @endif
                <div class="absolute inset-0 bg-black/10 z-10"></div>
                <div class="relative z-20">
                    <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                        {{ $servicesPage->hero_heading }}
                    </h1>
                    <x-page-breadcrumb current="Service" />
                </div>
            </div>
        </section>

        @if (filled($servicesPage->services_tagline) || filled($servicesPage->services_heading) || $serviceItems->isNotEmpty())
            <section data-aos="fade-up" data-aos-delay="100" class="max-w-[85%] mx-auto py-16">

                @if (filled($servicesPage->services_tagline) || filled($servicesPage->services_heading))
                    <div class="text-center mb-12">
                        @if (filled($servicesPage->services_tagline))
                            <span class="text-[#4870F8] font-semibold text-sm tracking-widest uppercase">{{ $servicesPage->services_tagline }}</span>
                        @endif
                        @if (filled($servicesPage->services_heading))
                            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2">{{ $servicesPage->services_heading }}</h2>
                        @endif
                    </div>
                @endif

                @if ($serviceItems->isNotEmpty())
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($serviceItems as $index => $service)
                            <div data-aos="fade-up" data-aos-delay="{{ (($index % 3) + 1) * 100 }}"
                                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">

                                <div
                                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                                            @if (filled($service->iconUrl()))
                                                <img src="{{ $service->iconUrl() }}"
                                                     alt="{{ $service->title }}">
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                                        {{ $service->title }}
                                    </h3>
                                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                                        {{ $service->description }}
                                    </p>
                                </div>

                                <div class="service-learn-more-wrap">
                                    <a href="{{ $service->linkHref() }}" class="service-learn-more">
                                        {{ $service->link_text ?? 'Read More' }} <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>
        @endif

        <x-testimonials.section-slider />

        @if (filled($servicesPage->contact_tagline) || filled($servicesPage->contact_heading) || filled($servicesPage->contact_paragraph_1) || filled($servicesPage->contact_paragraph_2))
        <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
            <div class="max-w-[85%] mx-auto">

                <div class="grid lg:grid-cols-2 gap-20 items-start">

                    <div>
                        @if (filled($servicesPage->contact_tagline))
                            <span class="text-[#4870F8] text-xl font-medium">
                                {{ $servicesPage->contact_tagline }}
                            </span>
                        @endif

                        @if (filled($servicesPage->contact_heading))
                            <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-semibold text-[#20233F] mt-5 mb-8">
                                {{ $servicesPage->contact_heading }}
                            </h2>
                        @endif

                        @if (filled($servicesPage->contact_paragraph_1))
                            <p class="text-gray-500 text-[16px] leading-7 mb-4">
                                {{ $servicesPage->contact_paragraph_1 }}
                            </p>
                        @endif

                        @if (filled($servicesPage->contact_paragraph_2))
                            <p class="text-gray-500 text-[16px] leading-7 mb-4">
                                {{ $servicesPage->contact_paragraph_2 }}
                            </p>
                        @endif

                        <a href="tel:{{ $sitePhoneTel ?? '+16043137091' }}" class="inline-flex overflow-hidden rounded-xl border border-[#4870F8]">
                            <span class="size-14 bg-linear-to-r from-[#4870F8] to-[#6B8AFF] flex items-center justify-center text-white text-lg">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span class="px-4 flex items-center text-[#4870F8] text-xl font-medium bg-white">
                                {{ $site[\App\Support\SiteSettings::PHONE] ?? '+1 (604) 313-7091' }}
                            </span>
                        </a>
                    </div>

                    <div>
                        <x-contact-form />
                    </div>

                </div>

            </div>
        </section>
        @endif
    @endif

@endsection
