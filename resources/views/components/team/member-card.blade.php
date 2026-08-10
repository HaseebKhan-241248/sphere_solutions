@props([
    'member',
])

@php
    /** @var \App\Models\TeamMember $member */
    $socials = array_filter([
        'facebook' => $member->facebook_url,
        'twitter' => $member->twitter_url,
        'instagram' => $member->instagram_url,
        'linkedin' => $member->linkedin_url,
    ]);
@endphp

<div {{ $attributes->merge(['class' => 'bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 transition duration-700 border border-slate-50 relative group']) }}>
    <div class="relative overflow-hidden mb-5">
        <img class="w-full h-[320px] object-cover" src="{{ $member->photoUrl() }}" alt="{{ $member->name }}">

        @if (count($socials))
            <ul class="absolute top-4 left-4 flex flex-col space-y-2">
                @foreach ($socials as $network => $url)
                    @php
                        $delay = match ($loop->index) {
                            0 => 'delay-0',
                            1 => 'delay-100',
                            2 => 'delay-200',
                            default => 'delay-300',
                        };
                    @endphp
                    <li class="opacity-0 -translate-x-8 transition-all duration-500 {{ $delay }} group-hover:opacity-100 group-hover:translate-x-0">
                        <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4870F8] rounded-full shadow hover:bg-[#4870F8] hover:text-white transition duration-200"
                           href="{{ $url }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="{{ $member->name }} on {{ ucfirst($network) }}">
                            @if ($network === 'facebook')
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/></svg>
                            @elseif ($network === 'twitter')
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/></svg>
                            @elseif ($network === 'instagram')
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                            @else
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <h5 class="text-[#0F172A] transition-colors duration-300 text-lg font-semibold mb-1">
        {{ $member->name }}
    </h5>
    <span class="text-[#4870F8] transition-colors duration-300 text-sm">
        {{ $member->role }}
    </span>
</div>
