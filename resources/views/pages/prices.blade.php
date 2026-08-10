@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="Packages Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Packages
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4870F8] font-semibold">Packages</span>
                </nav>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100">
        <div class="w-full py-24 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
            <div class="max-w-[88%] mx-auto">

                <div class="text-center mb-12">
                    <span class="text-[#4870F8] text-lg tracking-wide block mb-2">
                        Pricing Plans
                    </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-semibold tracking-tight">
                        Pricing Plan for Our Services
                    </h2>
                </div>

                @if (session('checkout_error'))
                    <div class="mb-8 rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
                        {{ session('checkout_error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-8 rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                    @foreach ($plans as $key => $plan)
                        @continue($key === 'enterprise')

                        @php
                            $isFeatured = ! empty($plan['featured']);
                            $canCheckout = ! empty($plan['checkout']);
                            $amount = isset($plan['amount_cents']) ? (int) $plan['amount_cents'] / 100 : null;
                            $headerBg = $isFeatured ? 'bg-[#4870F8]' : 'bg-[#1E293B]';
                            $titleClass = $isFeatured ? 'text-blue-100' : 'text-slate-200';
                            $taglineClass = $isFeatured ? 'text-blue-100/80' : 'text-slate-400';
                            $priceAccent = $isFeatured ? 'text-white' : 'text-[#4870F8]';
                            $buttonClass = $isFeatured
                                ? 'bg-[#4870F8] hover:bg-[#3A5CE0] shadow-md'
                                : 'bg-[#1E293B] hover:bg-slate-900 shadow-sm';
                        @endphp

                        <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 ease-out hover:shadow-xl hover:scale-[1.03]">
                            <div>
                                <div class="{{ $headerBg }} rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden {{ $isFeatured ? 'shadow-md' : '' }}">
                                    <h3 class="text-lg font-bold tracking-wide mb-1 {{ $titleClass }}">{{ $plan['name'] }}</h3>
                                    <p class="text-sm {{ $taglineClass }} mb-3">{{ $plan['tagline'] }}</p>

                                    @if ($amount !== null)
                                        <div class="flex items-baseline font-black">
                                            <span class="text-xl {{ $priceAccent }} font-extrabold mr-1 -translate-y-3">$</span>
                                            <span class="text-4xl tracking-tight">{{ number_format($amount, 0) }}</span>
                                            <span class="text-sm {{ $priceAccent }} font-medium ml-2">/ Month</span>
                                        </div>
                                    @else
                                        <div class="text-lg font-semibold text-white">
                                            {{ $plan['price_label'] ?? 'Custom pricing' }}
                                        </div>
                                    @endif
                                </div>

                                <div class="space-y-4 px-2 mb-6 text-left">
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Services Included</p>
                                    @foreach ($plan['features'] as $index => $feature)
                                        <div class="flex items-center justify-between text-[14px] text-slate-600 {{ $index > 0 ? 'pt-3 border-t border-slate-100' : '' }}">
                                            <span>{{ $feature }}</span>
                                            <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    @endforeach
                                </div>

                                @if (! empty($plan['notes']))
                                    <div class="px-2 mb-6 text-left">
                                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Note</p>
                                        <ul class="space-y-1 text-[13px] text-slate-500">
                                            @foreach ($plan['notes'] as $note)
                                                <li>- {{ $note }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="px-2 pt-2 text-left">
                                @if ($canCheckout)
                                    <form action="{{ route('checkout.store', $key) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                                class="inline-block w-fit {{ $buttonClass }} text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider transition duration-200 cursor-pointer">
                                            Buy Now
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('contact') }}"
                                       class="inline-block w-fit {{ $buttonClass }} text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider transition duration-200">
                                        Request a Quote
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    {{-- Custom Payment card (sits next to Platinum) --}}
                    <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 ease-out hover:shadow-xl hover:scale-[1.03]">
                        <div>
                            <div class="bg-[#1E293B] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden">
                                <h3 class="text-lg font-bold tracking-wide mb-1 text-slate-200">Custom Payment</h3>
                                <p class="text-sm text-slate-400 mb-3">Pay any custom amount securely through Stripe</p>
                                <div class="text-lg font-semibold text-white">
                                    Enter your amount
                                </div>
                            </div>

                            <div class="space-y-4 px-2 mb-6 text-left">
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Services Included</p>
                                <div class="flex items-center justify-between text-[14px] text-slate-600">
                                    <span>Choose any custom payment amount</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Secure Stripe Checkout</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Instant payment confirmation</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Flexible one-time payment</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Works for any service package</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Quick and secure checkout</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Receipt emailed after payment</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                            </div>

                            <div class="px-2 mb-6 text-left">
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Note</p>
                                <ul class="space-y-1 text-[13px] text-slate-500">
                                    <li>- Enter your preferred amount in the payment popup</li>
                                    <li>- Package customization can be made based on your business requirements.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="px-2 pt-2 text-left">
                            <button type="button"
                                    id="openCustomPaymentModal"
                                    class="inline-block w-fit bg-[#1E293B] hover:bg-slate-900 shadow-sm text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider transition duration-200 cursor-pointer">
                                Pay Now
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- Custom Payment Modal --}}
    <div id="customPaymentModal"
         class="fixed inset-0 z-[80] hidden items-center justify-center p-4"
         aria-hidden="true"
         style="z-index: 80;">
        <div id="customPaymentBackdrop" class="absolute inset-0 bg-slate-900/50" style="background: rgba(15, 23, 42, 0.5);"></div>

        <div class="relative z-10 w-full max-w-md rounded-2xl bg-white shadow-2xl border border-slate-100 overflow-hidden"
             role="dialog"
             aria-modal="true"
             aria-labelledby="customPaymentTitle"
             style="max-width: 28rem; background: #fff; border-radius: 1rem; box-shadow: 0 25px 50px rgba(15, 23, 42, 0.25);">
            <div class="flex items-start justify-between gap-4 px-6 pt-6 pb-2">
                <div class="min-w-0">
                    <h3 id="customPaymentTitle" class="text-xl font-semibold text-[#0F172A] mb-1">
                        Custom Payment
                    </h3>
                    <p class="text-sm text-slate-500">
                        Enter the amount you want to pay, then continue to Stripe Checkout.
                    </p>
                </div>
                <button type="button"
                        id="closeCustomPaymentModal"
                        class="shrink-0 inline-flex items-center justify-center w-9 h-9 rounded-full text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition cursor-pointer"
                        aria-label="Close"
                        style="flex-shrink: 0; width: 2.25rem; height: 2.25rem; border-radius: 9999px;">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 1.25rem; height: 1.25rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <form action="{{ route('checkout.custom') }}" method="POST" id="customPaymentForm" class="px-6 pb-6 pt-4">
                @csrf
                <label for="customAmount" class="block text-sm font-medium text-slate-700 mb-2">
                    Amount (USD)
                </label>
                <div class="flex items-stretch mb-2 rounded-xl border border-slate-200 overflow-hidden focus-within:ring-2 focus-within:ring-[#4870F8] focus-within:border-transparent"
                     style="display: flex; align-items: stretch; border: 1px solid #e2e8f0; border-radius: 0.75rem; overflow: hidden;">
                    <span class="inline-flex items-center justify-center px-4 bg-slate-50 text-slate-600 font-semibold border-r border-slate-200"
                          style="display: inline-flex; align-items: center; justify-content: center; padding: 0 1rem; background: #f8fafc; color: #475569; font-weight: 600; border-right: 1px solid #e2e8f0;">
                        $
                    </span>
                    <input type="number"
                           name="amount"
                           id="customAmount"
                           min="1"
                           max="100000"
                           step="0.01"
                           required
                           value="{{ old('amount') }}"
                           placeholder="0.00"
                           class="w-full border-0 px-4 py-3 text-slate-800 focus:outline-none focus:ring-0"
                           style="width: 100%; border: 0; padding: 0.75rem 1rem; color: #1e293b; outline: none;">
                </div>
                <p class="text-xs text-slate-400 mb-6">Minimum $1.00 — Maximum $100,000.00</p>

                <div class="flex items-center gap-3" style="display: flex; gap: 0.75rem;">
                    <button type="button"
                            id="cancelCustomPaymentModal"
                            class="flex-1 rounded-full border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition cursor-pointer"
                            style="flex: 1; border-radius: 9999px; border: 1px solid #e2e8f0; padding: 0.75rem 1.25rem; font-size: 0.875rem; font-weight: 600; color: #475569; cursor: pointer;">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 rounded-full bg-[#4870F8] hover:bg-[#3A5CE0] px-5 py-3 text-sm font-bold text-white shadow-md transition cursor-pointer"
                            style="flex: 1; border-radius: 9999px; background: #4870F8; padding: 0.75rem 1.25rem; font-size: 0.875rem; font-weight: 700; color: #fff; cursor: pointer; border: 0;">
                        Pay Now
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            const modal = document.getElementById('customPaymentModal');
            const openBtn = document.getElementById('openCustomPaymentModal');
            const closeBtn = document.getElementById('closeCustomPaymentModal');
            const cancelBtn = document.getElementById('cancelCustomPaymentModal');
            const backdrop = document.getElementById('customPaymentBackdrop');
            const amountInput = document.getElementById('customAmount');

            if (!modal || !openBtn) return;

            function openModal() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
                setTimeout(function () {
                    amountInput && amountInput.focus();
                }, 50);
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            openBtn.addEventListener('click', openModal);
            closeBtn && closeBtn.addEventListener('click', closeModal);
            cancelBtn && cancelBtn.addEventListener('click', closeModal);
            backdrop && backdrop.addEventListener('click', closeModal);

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            @if ($errors->has('amount') || old('amount'))
                openModal();
            @endif
        })();
    </script>
@endsection
