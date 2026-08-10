@props([
    'action' => null,
])

@php
    $formAction = $action ?? route('entrepreneur-signup.store');
    $fieldClass = 'w-full border border-slate-300 rounded-lg px-4 py-4 text-sm focus:outline-none focus:border-[#4761FF] focus:bg-white transition duration-200 placeholder-slate-500';
    $mainSkills = [
        'Digital Marketing',
        'SEO Specialist',
        'Content Creator',
        'Web Developer',
        'Graphic Designer',
        'Sales',
        'Social Media Marketing',
        'Copywriting',
        'Freelance / Generalist',
        'Startup Founder',
        'Other',
    ];
@endphp

<form
    action="{{ $formAction }}"
    method="POST"
    novalidate
    data-entrepreneur-form
    {{ $attributes->merge(['class' => 'relative space-y-5']) }}
>
    @csrf

    <div data-entrepreneur-success class="hidden rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700"></div>
    <div data-entrepreneur-error class="hidden rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium"></div>

    @if (session('entrepreneur_success'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('entrepreneur_success') }}
        </div>
    @endif

    @if (session('entrepreneur_error'))
        <div class="rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
            {{ session('entrepreneur_error') }}
        </div>
    @endif

    {{-- Honeypot anti-spam field (hidden from users) --}}
    <div class="absolute left-[-9999px] top-auto h-0 w-0 overflow-hidden" aria-hidden="true">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" value="" tabindex="-1" autocomplete="off">
    </div>

    <div class="w-full">
        <label for="name" class="block text-sm font-medium text-[#1C2035] mb-2">Full Name <span class="text-red-500">*</span></label>
        <input type="text" name="name" id="name" placeholder="Your full name" maxlength="100" value="{{ old('name') }}"
               class="{{ $fieldClass }} @error('name') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
               data-field="name"
               aria-describedby="error-name">
        <p id="error-name" data-error-for="name" class="contact-error-text {{ $errors->has('name') ? '' : 'hidden' }}">
            {{ $errors->first('name') }}
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="w-full">
            <label for="email" class="block text-sm font-medium text-[#1C2035] mb-2">Email Address <span class="text-red-500">*</span></label>
            <input type="email" name="email" id="email" placeholder="you@example.com" maxlength="255" value="{{ old('email') }}"
                   class="{{ $fieldClass }} @error('email') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
                   data-field="email"
                   aria-describedby="error-email">
            <p id="error-email" data-error-for="email" class="contact-error-text {{ $errors->has('email') ? '' : 'hidden' }}">
                {{ $errors->first('email') }}
            </p>
        </div>
        <div class="w-full">
            <label for="location" class="block text-sm font-medium text-[#1C2035] mb-2">Country / City <span class="text-red-500">*</span></label>
            <input type="text" name="location" id="location" placeholder="e.g. Vancouver, Canada" maxlength="200" value="{{ old('location') }}"
                   class="{{ $fieldClass }} @error('location') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
                   data-field="location"
                   aria-describedby="error-location">
            <p id="error-location" data-error-for="location" class="contact-error-text {{ $errors->has('location') ? '' : 'hidden' }}">
                {{ $errors->first('location') }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="w-full">
            <label for="main_skill" class="block text-sm font-medium text-[#1C2035] mb-2">Main Skill <span class="text-red-500">*</span></label>
            <select name="main_skill" id="main_skill"
                    class="{{ $fieldClass }} @error('main_skill') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 bg-white"
                    data-field="main_skill"
                    aria-describedby="error-main_skill">
                <option value="" disabled {{ old('main_skill') ? '' : 'selected' }}>Select your main skill</option>
                @foreach ($mainSkills as $skill)
                    <option value="{{ $skill }}" @selected(old('main_skill') === $skill)>{{ $skill }}</option>
                @endforeach
            </select>
            <p id="error-main_skill" data-error-for="main_skill" class="contact-error-text {{ $errors->has('main_skill') ? '' : 'hidden' }}">
                {{ $errors->first('main_skill') }}
            </p>
        </div>
        <div class="w-full">
            <label for="additional_skills" class="block text-sm font-medium text-[#1C2035] mb-2">Additional Skills</label>
            <input type="text" name="additional_skills" id="additional_skills" placeholder="e.g. SEO, Canva, WordPress" maxlength="500" value="{{ old('additional_skills') }}"
                   class="{{ $fieldClass }} @error('additional_skills') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
                   data-field="additional_skills"
                   aria-describedby="error-additional_skills">
            <p id="error-additional_skills" data-error-for="additional_skills" class="contact-error-text {{ $errors->has('additional_skills') ? '' : 'hidden' }}">
                {{ $errors->first('additional_skills') }}
            </p>
        </div>
    </div>

    <div class="w-full">
        <label for="portfolio_url" class="block text-sm font-medium text-[#1C2035] mb-2">LinkedIn / Portfolio / Website</label>
        <input type="text" name="portfolio_url" id="portfolio_url" placeholder="https://linkedin.com/in/your-profile" maxlength="500" value="{{ old('portfolio_url') }}"
               class="{{ $fieldClass }} @error('portfolio_url') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
               data-field="portfolio_url"
               aria-describedby="error-portfolio_url">
        <p id="error-portfolio_url" data-error-for="portfolio_url" class="contact-error-text {{ $errors->has('portfolio_url') ? '' : 'hidden' }}">
            {{ $errors->first('portfolio_url') }}
        </p>
    </div>

    <div class="w-full">
        <label for="message" class="block text-sm font-medium text-[#1C2035] mb-2">Short Message</label>
        <textarea name="message" id="message" rows="5" placeholder="Tell us a little about yourself and what you’re looking for" maxlength="5000"
                  class="{{ $fieldClass }} resize-none @error('message') contact-field-error @enderror outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"
                  data-field="message"
                  aria-describedby="error-message">{{ old('message') }}</textarea>
        <p id="error-message" data-error-for="message" class="contact-error-text {{ $errors->has('message') ? '' : 'hidden' }}">
            {{ $errors->first('message') }}
        </p>
    </div>

    <div class="w-full">
        <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="consent" value="1" data-field="consent"
                   class="mt-1 size-4 rounded border-slate-300 text-[#4761FF] focus:ring-[#4761FF] @error('consent') contact-field-error @enderror"
                   {{ old('consent') ? 'checked' : '' }}
                   aria-describedby="error-consent">
            <span class="text-sm text-[#555555] leading-relaxed">
                I agree to be contacted by Sphere Marketing Solutions regarding opportunities, projects, or collaboration. <span class="text-red-500">*</span>
            </span>
        </label>
        <p id="error-consent" data-error-for="consent" class="contact-error-text {{ $errors->has('consent') ? '' : 'hidden' }}">
            {{ $errors->first('consent') }}
        </p>
    </div>

    <div>
        <button type="submit" data-entrepreneur-submit
                class="w-full sm:w-auto bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-10 py-4 rounded-full transition shadow-md hover:shadow-lg text-base tracking-wide cursor-pointer disabled:opacity-60 disabled:cursor-not-allowed">
            <span data-submit-label>Submit Your Interest</span>
            <span data-submit-loading class="hidden">Submitting...</span>
        </button>
    </div>
</form>
