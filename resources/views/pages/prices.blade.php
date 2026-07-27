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
                    <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">Packages</span>
                </nav>
            </div>

        </div>
    </section>

    <section>
        <div class="w-full bg-slate-50/50 py-16 font-sans antialiased text-slate-800">
            <div class="w-[85%] mx-auto max-w-6xl">

                <div class="text-center mb-12">
                <span class="text-[#4761FF] text-lg font-semibold tracking-wide block mb-2">
                    Pricing Plans
                </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-bold tracking-tight">
                        Digital Marketing Packages
                    </h2>
                    <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                        Domain and hosting to be provided by the customer. Packages can be customized based on your business requirements.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                    <!-- Basic -->
                    <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                        <div>
                            <div class="bg-[#1E293B] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden">
                                <h3 class="text-lg font-bold tracking-wide mb-1 text-slate-200">Basic Package</h3>
                                <p class="text-sm text-slate-400 mb-3">Startups testing digital marketing</p>
                                <div class="flex items-baseline font-black">
                                    <span class="text-xl text-[#4761FF] font-extrabold mr-1 -translate-y-3">$</span>
                                    <span class="text-4xl tracking-tight">150</span>
                                    <span class="text-sm text-[#4761FF] font-medium ml-2">/ Month</span>
                                </div>
                            </div>

                            <div class="space-y-4 px-2 mb-8 text-left">
                                <div class="flex items-center justify-between text-[14px] text-slate-600">
                                    <span>Social Media Management (1 platform)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Basic SEO Optimization</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Blog Posts / Articles per month</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>150 Backlinks (DAPA) Guaranteed</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Monthly Performance Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Website Audit Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>1 Promotional Video (editing included)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 pt-2 text-left">
                            <a href="{{ route('contact') }}" class="inline-block w-fit bg-[#1E293B] hover:bg-slate-900 text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider shadow-sm transition duration-200">
                                Buy Now
                            </a>
                        </div>
                    </div>

                    <!-- Standard -->
                    <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                        <div>
                            <div class="bg-[#4761FF] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden shadow-md">
                                <h3 class="text-lg font-bold tracking-wide mb-1 text-blue-100">Standard Package</h3>
                                <p class="text-sm text-blue-100/80 mb-3">Grow visibility &amp; engagement</p>
                                <div class="flex items-baseline font-black">
                                    <span class="text-2xl text-black font-extrabold mr-1 -translate-y-3">$</span>
                                    <span class="text-4xl tracking-tight">300</span>
                                    <span class="text-sm text-black font-medium ml-2">/ Month</span>
                                </div>
                            </div>

                            <div class="space-y-4 px-2 mb-8 text-left">
                                <div class="flex items-center justify-between text-[14px] text-slate-600">
                                    <span>Social Media Management (3 platforms)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Basic SEO Optimization</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Blog Posts / Articles per month</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>400 Backlinks (DAPA) Guaranteed</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Monthly Performance Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Website Audit Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>2 Promotional Videos (editing included)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 pt-2 text-left">
                            <a href="{{ route('contact') }}" class="inline-block w-fit bg-[#4761FF] hover:bg-blue-700 text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider shadow-md transition duration-200">
                                Buy Now
                            </a>
                        </div>
                    </div>

                    <!-- Premium -->
                    <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                        <div>
                            <div class="bg-[#1E293B] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden">
                                <h3 class="text-lg font-bold tracking-wide mb-1 text-slate-200">Premium Package</h3>
                                <p class="text-sm text-slate-400 mb-3">Scale and drive significant growth</p>
                                <div class="flex items-baseline font-black">
                                    <span class="text-2xl text-[#4761FF] font-extrabold mr-1 -translate-y-3">$</span>
                                    <span class="text-4xl tracking-tight">500</span>
                                    <span class="text-sm text-[#4761FF] font-medium ml-2">/ Month</span>
                                </div>
                            </div>

                            <div class="space-y-4 px-2 mb-8 text-left">
                                <div class="flex items-center justify-between text-[14px] text-slate-600">
                                    <span>Social Media Management (5 platforms)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Advanced SEO Optimization</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Blog Posts / Articles per month</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>400 Backlinks + Weekly Reports</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Monthly Performance Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>Website Audit Report</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                    <span>5 Promotional Videos (editing included)</span>
                                    <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 pt-2 text-left">
                            <a href="{{ route('contact') }}" class="inline-block w-fit bg-[#1E293B] hover:bg-slate-900 text-white font-semibold px-7 py-3 rounded-full text-sm tracking-wider shadow-sm transition duration-200">
                                Buy Now
                            </a>
                        </div>
                    </div>

                </div>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl border border-slate-100 p-8 shadow-sm">
                        <h3 class="text-xl font-bold text-[#0F172A] mb-2">Platinum Package — $700 / Month</h3>
                        <p class="text-slate-500 text-sm mb-4">For businesses that want a stronger digital impact with advanced SEO, campaign management, and 600 backlinks guaranteed.</p>
                        <a href="{{ route('contact') }}" class="text-[#4761FF] font-semibold hover:underline">Contact for details →</a>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-100 p-8 shadow-sm">
                        <h3 class="text-xl font-bold text-[#0F172A] mb-2">Enterprise Package — Custom</h3>
                        <p class="text-slate-500 text-sm mb-4">Website development, Google Ads, CRO, custom video production, and a data-driven marketing approach tailored to your industry.</p>
                        <a href="{{ route('contact') }}" class="text-[#4761FF] font-semibold hover:underline">Request a custom quote →</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
