@if ($whatsappEnabled && filled($whatsappUrl))
    <div class="whatsapp-chat" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ $whatsappUrl }}"
           target="_blank"
           rel="noopener noreferrer"
           class="whatsapp-chat__link"
           aria-label="Chat with us on WhatsApp">
            <span class="whatsapp-chat__bubble">
                @php
                    $label = $site[\App\Support\SiteSettings::WHATSAPP_LABEL] ?? 'Need Help? Chat with us';
                    $parts = preg_split('/\s+Chat with us$/i', $label, 2);
                @endphp
                @if (count($parts) === 2 && trim($parts[0]) !== '')
                    <span class="whatsapp-chat__label-muted">{{ trim($parts[0]) }}</span>
                    <strong class="whatsapp-chat__label-strong">Chat with us</strong>
                @else
                    <strong class="whatsapp-chat__label-strong">{{ $label }}</strong>
                @endif
            </span>
            <span class="whatsapp-chat__button" aria-hidden="true">
                <i class="fa-brands fa-whatsapp"></i>
            </span>
        </a>
    </div>
@endif
