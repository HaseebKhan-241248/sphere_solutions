@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ $service->detailHeroImageUrl() }}" alt="{{ $service->title }}"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/10 z-10"></div>
            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">{{ $service->title }}</h1>
                <x-page-breadcrumb :current="$service->title" />
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-16">
        <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">
            <div class="lg:col-span-2">
                <img src="{{ $service->detailImageUrl() }}"
                     alt="{{ $service->detail_heading ?? $service->title }}"
                     class="w-full h-105 object-cover rounded-lg mb-8">

                @if (filled($service->detail_heading))
                    <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">{{ $service->detail_heading }}</h2>
                @endif

                @foreach (['detail_paragraph_1', 'detail_paragraph_2'] as $field)
                    @if (filled($service->{$field}))
                        <p @class([
                            'font-sans text-gray-600 leading-8 text-[17px]',
                            'mb-5' => $field === 'detail_paragraph_1',
                            'mb-10' => $field === 'detail_paragraph_2',
                        ])>{{ $service->{$field} }}</p>
                    @endif
                @endforeach

                <x-services.work-process />
                <x-services.faqs :faqs="$service->faqs ?? []" />
            </div>

            <x-services.detail-sidebar :service="$service" :all-services="$allServices" />
        </div>
    </section>
@endsection
