@props([
    'members' => null,
    'eyebrow' => 'Our Team',
    'title' => 'Meet Our Team',
    'gridClass' => 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8',
    'wrapperClass' => 'bg-white py-24 px-4 sm:px-6 lg:px-8',
    'innerClass' => 'max-w-[85%] mx-auto',
])

@php
    try {
        $members = $members ?? \App\Models\TeamMember::query()->active()->ordered()->get();
    } catch (\Throwable) {
        $members = $members ?? collect();
    }
@endphp

@if ($members->isNotEmpty())
    <section data-aos="fade-up" {{ $attributes }}>
        <div class="{{ $wrapperClass }}">
            <div class="{{ $innerClass }}">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-[#4870F8] text-lg tracking-wide block mb-3">
                        {{ $eyebrow }}
                    </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                        {!! $title !!}
                    </h2>
                </div>

                <div class="{{ $gridClass }}">
                    @foreach ($members as $member)
                        <x-team.member-card :member="$member" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
