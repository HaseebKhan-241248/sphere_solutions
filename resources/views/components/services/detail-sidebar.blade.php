@props(['service', 'allServices'])

<aside class="space-y-8">
    <div class="shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] p-5 rounded-lg">
        <div class="relative">
            <input type="text" placeholder="Search..." class="w-full h-14 rounded-xl border border-gray-300 px-5 pr-14 text-[17px] outline-none focus:border-[#4870F8]">
            <button type="button" class="absolute right-1 top-1 h-12 w-12 rounded-lg text-[#4870F8] flex items-center justify-center">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>

    <div>
        <h3 class="text-2xl font-bold text-[#20233F] mb-4">Our Services</h3>
        <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
            @foreach ($allServices as $sidebarService)
                <a href="{{ $sidebarService->detailUrl() }}"
                   @class([
                       'flex items-center justify-between border-l-4 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)]',
                       'border-[#4870F8] text-[#4870F8]' => $sidebarService->is($service),
                       'border-gray-300 text-[#20233F]' => ! $sidebarService->is($service),
                   ])>
                    {{ $sidebarService->title }}
                    <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    <div>
        <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
        <form class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
            <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
            <input type="email" placeholder="Your Email" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
            <input type="text" placeholder="Your Mobile" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
            <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                <option>Choose A Service</option>
                @foreach ($allServices as $optionService)
                    <option @selected($optionService->is($service))>{{ $optionService->title }}</option>
                @endforeach
            </select>
            <textarea rows="4" placeholder="Message" class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4870F8]"></textarea>
            <a href="{{ route('contact') }}" class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4870F8] to-[#6B8AFF] hover:opacity-90 duration-300 flex items-center justify-center">
                Submit Now
            </a>
        </form>
    </div>

    <div class="bg-white shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-lg p-8 text-center">
        <h3 class="text-xl md:text-3xl font-semibold text-[#20233F] mb-6">Interested in this service?</h3>
        <a href="{{ route('contact') }}" class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-medium px-8 py-4 rounded-lg transition">
            Let's work together
        </a>
    </div>
</aside>
