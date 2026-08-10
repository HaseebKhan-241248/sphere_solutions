@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Blog Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/20 z-10"></div>
            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Blog
                </h1>
                <x-page-breadcrumb current="Blog" />
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="bg-[#F8F9FC] py-16 md:py-20">
        <div class="max-w-[85%] mx-auto">
            <div class="text-center mb-12 md:mb-14">
                <span class="text-[#4870F8] font-semibold text-sm tracking-widest uppercase">Insights</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#1C2035] mt-2">Latest Articles & Updates</h2>
                <p class="mt-3 text-gray-500 max-w-2xl mx-auto text-[15px] md:text-base">
                    Practical tips and updates on digital marketing, web development, video, and design.
                </p>
            </div>

            @if ($posts->isEmpty())
                <p class="text-center text-gray-500 text-lg">No blog posts published yet.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                    @foreach ($posts as $post)
                        <article class="group bg-white rounded-2xl border border-slate-200/60 shadow-[0_10px_30px_rgba(0,0,0,0.10)] overflow-hidden flex flex-col h-full transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(71,97,255,0.18)] hover:border-[#4870F8]/30">
                            <a href="{{ route('blog.show', $post->slug) }}" class="block relative overflow-hidden">
                                <img src="{{ $post->featuredImageUrl() }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#1C2035]/35 via-transparent to-transparent opacity-60"></div>
                            </a>

                            <div class="p-6 flex flex-col flex-1">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    @if ($post->published_at)
                                        <time datetime="{{ $post->published_at->toDateString() }}"
                                              class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-500">
                                            <i class="fa-regular fa-calendar text-[#4870F8]"></i>
                                            {{ $post->published_at->format('M d, Y') }}
                                        </time>
                                    @endif

                                    @forelse ($post->categories as $category)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-[#EEF1FF] text-[#4870F8] text-xs font-semibold">
                                            {{ $category->name }}
                                        </span>
                                    @empty
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-[#EEF1FF] text-[#4870F8] text-xs font-semibold">
                                            Insights
                                        </span>
                                    @endforelse
                                </div>

                                <h3 class="text-lg md:text-xl font-semibold text-[#1C2035] mb-3 leading-snug line-clamp-2">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-[#4870F8] transition">
                                        {{ $post->title }}
                                    </a>
                                </h3>

                                <p class="text-slate-500 text-[15px] leading-relaxed mb-5 line-clamp-3 flex-1">
                                    {{ \Illuminate\Support\Str::limit(trim(strip_tags((string) $post->excerpt)), 140) }}
                                </p>

                                <div class="pt-4 mt-auto border-t border-slate-100">
                                    <a href="{{ route('blog.show', $post->slug) }}"
                                       class="inline-flex items-center gap-2 text-[#4870F8] font-semibold text-sm group/link">
                                        Read More
                                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/link:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>

@endsection
