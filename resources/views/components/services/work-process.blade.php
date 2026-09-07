@php
    $steps = [
        ['title' => 'Research', 'description' => 'We review your goals, audience, competitors, and current digital footprint before recommending a plan.'],
        ['title' => 'Concept', 'description' => 'We map messaging, structure, and campaign direction so every deliverable supports the same outcome.'],
        ['title' => 'Development', 'description' => 'We build, optimize, and launch websites, creatives, and campaigns with room to iterate as data comes in.'],
        ['title' => 'Finalization', 'description' => 'We refine based on performance, hand over clear reporting, and keep support available as you grow.'],
    ];
@endphp

<h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Our Work Process</h3>

<div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100">
    @foreach ($steps as $index => $step)
        <div class="flex items-start gap-5 p-6">
            <div class="size-16 text-2xl shrink-0 rounded-full bg-[#EEF2FF] text-[#4870F8] flex items-center justify-center">
                {{ $index + 1 }}
            </div>
            <div>
                <h4 class="text-lg md:text-2xl font-semibold text-[#20233F] mb-1">{{ $step['title'] }}</h4>
                <p class="text-[#777] text-[15px] md:text-[18px]">{{ $step['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>
