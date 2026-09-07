@if (! empty($faqs))
    <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Some Important FAQ's</h3>

    <div class="rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] divide-y divide-gray-100 overflow-hidden">
        @foreach ($faqs as $faq)
            <div class="faq-item">
                <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
                    <span>Q: {{ $faq['question'] ?? '' }}</span>
                    <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-[#777] text-[15px] pb-5">{{ $faq['answer'] ?? '' }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endif
