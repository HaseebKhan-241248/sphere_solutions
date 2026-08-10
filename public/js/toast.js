(function () {
    'use strict';

    var hideTimer = null;
    var stylesInjected = false;

    function ensureStyles() {
        if (stylesInjected || document.getElementById('site-toast-styles')) {
            stylesInjected = true;
            return;
        }

        var style = document.createElement('style');
        style.id = 'site-toast-styles';
        style.textContent = [
            '.site-toast-container{position:fixed;top:1.25rem;right:1.25rem;z-index:9999;display:flex;flex-direction:column;gap:.75rem;max-width:min(420px,calc(100vw - 2rem));pointer-events:none}',
            '.site-toast{pointer-events:auto;display:flex;align-items:flex-start;gap:.75rem;padding:.95rem 1rem;border-radius:.75rem;box-shadow:0 12px 30px rgba(28,32,53,.18);opacity:0;transform:translateY(-10px);transition:opacity .25s ease,transform .25s ease}',
            '.site-toast--show{opacity:1;transform:translateY(0)}',
            '.site-toast--hide{opacity:0;transform:translateY(-10px)}',
            '.site-toast--success{background:#ecfdf5;border:1px solid #86efac;color:#166534}',
            '.site-toast--error{background:#fef2f2;border:1px solid #fca5a5;color:#b91c1c}',
            '.site-toast__message{flex:1;margin:0;font-size:.925rem;line-height:1.45;font-weight:500}',
            '.site-toast__close{border:0;background:transparent;color:inherit;font-size:1.25rem;line-height:1;cursor:pointer;opacity:.7;padding:0}',
            '.site-toast__close:hover{opacity:1}',
        ].join('');
        document.head.appendChild(style);
        stylesInjected = true;
    }

    function ensureContainer() {
        ensureStyles();

        var container = document.getElementById('site-toast-container');

        if (container) {
            return container;
        }

        container = document.createElement('div');
        container.id = 'site-toast-container';
        container.className = 'site-toast-container';
        container.setAttribute('aria-live', 'polite');
        container.setAttribute('aria-atomic', 'true');
        document.body.appendChild(container);

        return container;
    }

    window.showSiteToast = function (message, options) {
        options = options || {};
        var type = options.type || 'success';
        var duration = typeof options.duration === 'number' ? options.duration : 5000;

        if (!message) {
            return;
        }

        var container = ensureContainer();
        container.innerHTML = '';

        if (hideTimer) {
            clearTimeout(hideTimer);
            hideTimer = null;
        }

        var toast = document.createElement('div');
        toast.className = 'site-toast site-toast--' + type;
        toast.setAttribute('role', 'status');

        var text = document.createElement('p');
        text.className = 'site-toast__message';
        text.textContent = message;

        var closeBtn = document.createElement('button');
        closeBtn.type = 'button';
        closeBtn.className = 'site-toast__close';
        closeBtn.setAttribute('aria-label', 'Dismiss');
        closeBtn.innerHTML = '&times;';

        function dismiss() {
            toast.classList.add('site-toast--hide');
            setTimeout(function () {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 250);
            if (hideTimer) {
                clearTimeout(hideTimer);
                hideTimer = null;
            }
        }

        closeBtn.addEventListener('click', dismiss);

        toast.appendChild(text);
        toast.appendChild(closeBtn);
        container.appendChild(toast);

        requestAnimationFrame(function () {
            toast.classList.add('site-toast--show');
        });

        if (duration > 0) {
            hideTimer = setTimeout(dismiss, duration);
        }
    };
})();
