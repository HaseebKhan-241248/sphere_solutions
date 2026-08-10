@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ $post->featuredImageUrl() }}" alt="{{ $post->title }}"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/40 z-10"></div>
            <div class="relative z-20 max-w-4xl px-4">
                <h1 class="text-white text-3xl md:text-5xl font-bold tracking-wide mb-4">
                    {{ $post->title }}
                </h1>
                <x-page-breadcrumb
                    :current="$post->title"
                    :parents="[['label' => 'Blog', 'url' => route('blog.index')]]"
                />
            </div>
        </div>
    </section>

    <section class="max-w-[85%] mx-auto py-16">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-8">
                @if ($post->published_at)
                    <time datetime="{{ $post->published_at->toDateString() }}">
                        {{ $post->published_at->format('F j, Y') }}
                    </time>
                @endif
                @foreach ($post->categories as $category)
                    <span class="px-2 py-0.5 rounded bg-[#EEF2FF] text-[#4870F8]">{{ $category->name }}</span>
                @endforeach
                @foreach ($post->tags as $tag)
                    <span class="px-2 py-0.5 rounded border border-gray-200 text-gray-600">#{{ $tag->name }}</span>
                @endforeach
            </div>

            <article class="blog-content prose prose-lg max-w-none">
                {!! $post->contentHtml() !!}
            </article>

            <div class="mt-12 pt-8 border-t border-gray-200">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-[#4870F8] font-medium hover:gap-3 transition-all">
                    <i class="fas fa-angle-double-left"></i> Back to Blog
                </a>
            </div>
        </div>

        @if ($related->isNotEmpty())
            <div class="mt-20">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8 text-center">Related Articles</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
                    @foreach ($related as $relatedPost)
                        <article class="group bg-white rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgba(28,32,53,0.06)] overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_40px_rgba(71,97,255,0.14)]">
                            <a href="{{ route('blog.show', $relatedPost->slug) }}" class="block">
                                <div class="overflow-hidden">
                                    <img src="{{ $relatedPost->featuredImageUrl() }}" alt="{{ $relatedPost->title }}"
                                         class="w-full h-44 object-cover transition-transform duration-500 group-hover:scale-105"
                                         loading="lazy">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-[#1C2035] group-hover:text-[#4870F8] transition line-clamp-2">
                                        {{ $relatedPost->title }}
                                    </h3>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </section>

@endsection
