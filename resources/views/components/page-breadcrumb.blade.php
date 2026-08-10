@props([
    'current',
    'parents' => [],
])

<nav {{ $attributes->merge(['class' => 'flex items-center justify-center space-x-2 text-white text-base font-medium']) }}>
    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>

    @foreach ($parents as $parent)
        <span class="text-slate-300">/</span>
        <a href="{{ $parent['url'] }}" class="hover:underline transition text-slate-200">{{ $parent['label'] }}</a>
    @endforeach

    <span class="text-slate-300">/</span>
    <span class="text-[#4870F8] font-semibold truncate max-w-[220px]">{{ $current }}</span>
</nav>
