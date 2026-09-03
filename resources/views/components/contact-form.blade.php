@props([
    'action' => null,
])

@php
    $contact_us = \App\Models\ContactUs::query()->first();
    $formAction = $action ?? route('contact.store');
    $fieldClass = 'w-full border border-slate-300 rounded-lg px-4 py-4 text-sm focus:outline-none focus:border-[#4870F8] focus:bg-white transition duration-200 placeholder-slate-500';
@endphp

<form
    action="{{ $formAction }}"
    method="POST"
    novalidate
    data-contact-form
    {{ $attributes->merge(['class' => 'space-y-5']) }}
>
    @csrf

    <div data-contact-success class="hidden rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700"></div>
    <div data-contact-error class="hidden rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium"></div>

    @if (session('contact_success'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('contact_success') }}
        </div>
    @endif

    @if (session('contact_error'))
        <div class="rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
            {{ session('contact_error') }}
        </div>
    @endif

    <div class="w-full">
        <input type="text" name="name" placeholder="Your Name" maxlength="100" value="{{ old('name') }}"
               class="{{ $fieldClass }} @error('name') contact-field-error @enderror outline-none transition-all focus:border-[#4870F8] focus:ring-4 focus:ring-[#4870F8]/30"
               data-field="name"
               aria-describedby="error-name">
        <p id="error-name" data-error-for="name" class="contact-error-text {{ $errors->has('name') ? '' : 'hidden' }}">
            {{ $errors->first('name') }}
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="w-full">
            <input type="email" name="email" placeholder="Your Email" maxlength="255" value="{{ old('email') }}"
                   class="{{ $fieldClass }} @error('email') contact-field-error @enderror outline-none transition-all focus:border-[#4870F8] focus:ring-4 focus:ring-[#4870F8]/30"
                   data-field="email"
                   aria-describedby="error-email">
            <p id="error-email" data-error-for="email" class="contact-error-text {{ $errors->has('email') ? '' : 'hidden' }}">
                {{ $errors->first('email') }}
            </p>
        </div>
        <div class="w-full">
            <input type="text" name="mobile" placeholder="Mobile" maxlength="30" value="{{ old('mobile') }}"
                   class="{{ $fieldClass }} @error('mobile') contact-field-error @enderror outline-none transition-all focus:border-[#4870F8] focus:ring-4 focus:ring-[#4870F8]/30"
                   data-field="mobile"
                   aria-describedby="error-mobile">
            <p id="error-mobile" data-error-for="mobile" class="contact-error-text {{ $errors->has('mobile') ? '' : 'hidden' }}">
                {{ $errors->first('mobile') }}
            </p>
        </div>
    </div>

    <div class="w-full">
        <input type="text" name="subject" placeholder="Subject" maxlength="200" value="{{ old('subject') }}"
               class="{{ $fieldClass }} @error('subject') contact-field-error @enderror outline-none transition-all focus:border-[#4870F8] focus:ring-4 focus:ring-[#4870F8]/30"
               data-field="subject"
               aria-describedby="error-subject">
        <p id="error-subject" data-error-for="subject" class="contact-error-text {{ $errors->has('subject') ? '' : 'hidden' }}">
            {{ $errors->first('subject') }}
        </p>
    </div>

    <div class="w-full">
        <textarea name="message" rows="10" placeholder="Leave a message here" maxlength="5000"
                  class="{{ $fieldClass }} resize-none @error('message') contact-field-error @enderror outline-none transition-all focus:border-[#4870F8] focus:ring-4 focus:ring-[#4870F8]/30"
                  data-field="message"
                  aria-describedby="error-message">{{ old('message') }}</textarea>
        <p id="error-message" data-error-for="message" class="contact-error-text {{ $errors->has('message') ? '' : 'hidden' }}">
            {{ $errors->first('message') }}
        </p>
    </div>

    <div>
        <button type="submit" data-contact-submit
                class="bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-semibold px-10 py-4 rounded-full transition shadow-md hover:shadow-lg text-base tracking-wide cursor-pointer disabled:opacity-60 disabled:cursor-not-allowed">
            <span data-submit-label>{{ $contact_us->send_message }}</span>
            <span data-submit-loading class="hidden">Sending...</span>
        </button>
    </div>
</form>
