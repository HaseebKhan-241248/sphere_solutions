(function () {
    'use strict';

    const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function clearErrors(form) {
        form.querySelectorAll('[data-error-for]').forEach(function (el) {
            el.textContent = '';
            el.classList.add('hidden');
        });

        form.querySelectorAll('[data-field]').forEach(function (el) {
            el.classList.remove('contact-field-error');
        });
    }

    function showFieldError(form, field, message) {
        const input = form.querySelector('[data-field="' + field + '"]');
        const errorEl = form.querySelector('[data-error-for="' + field + '"]');

        if (input) {
            input.classList.add('contact-field-error');
        }

        if (errorEl) {
            errorEl.textContent = message;
            errorEl.classList.remove('hidden');
        }
    }

    function showBanner(el, message, show) {
        if (!el) {
            return;
        }

        if (show) {
            el.textContent = message;
            el.classList.remove('hidden');
        } else {
            el.textContent = '';
            el.classList.add('hidden');
        }
    }

    function validateForm(form) {
        const errors = {};
        const name = (form.name.value || '').trim();
        const email = (form.email.value || '').trim();
        const location = (form.location.value || '').trim();
        const mainSkill = (form.main_skill.value || '').trim();
        const additionalSkills = (form.additional_skills.value || '').trim();
        const portfolioUrl = (form.portfolio_url.value || '').trim();
        const message = (form.message.value || '').trim();
        const consent = form.consent && form.consent.checked;

        if (!name) {
            errors.name = 'Please enter your full name.';
        } else if (name.length > 100) {
            errors.name = 'Name may not be greater than 100 characters.';
        }

        if (!email) {
            errors.email = 'Please enter your email address.';
        } else if (!EMAIL_PATTERN.test(email)) {
            errors.email = 'Please enter a valid email address.';
        } else if (email.length > 255) {
            errors.email = 'Email may not be greater than 255 characters.';
        }

        if (!location) {
            errors.location = 'Please enter your country or city.';
        } else if (location.length > 200) {
            errors.location = 'Country / City may not be greater than 200 characters.';
        }

        if (!mainSkill) {
            errors.main_skill = 'Please enter your main skill.';
        } else if (mainSkill.length > 150) {
            errors.main_skill = 'Main skill may not be greater than 150 characters.';
        }

        if (additionalSkills.length > 500) {
            errors.additional_skills = 'Additional skills may not be greater than 500 characters.';
        }

        if (portfolioUrl.length > 500) {
            errors.portfolio_url = 'LinkedIn / Portfolio / Website may not be greater than 500 characters.';
        }

        if (message.length > 5000) {
            errors.message = 'Message may not be greater than 5000 characters.';
        }

        if (!consent) {
            errors.consent = 'Please agree to be contacted by Sphere Marketing Solutions.';
        }

        return errors;
    }

    function setLoading(form, isLoading) {
        const button = form.querySelector('[data-entrepreneur-submit]');
        const label = form.querySelector('[data-submit-label]');
        const loading = form.querySelector('[data-submit-loading]');

        if (button) {
            button.disabled = isLoading;
        }

        if (label) {
            label.classList.toggle('hidden', isLoading);
        }

        if (loading) {
            loading.classList.toggle('hidden', !isLoading);
        }
    }

    function getCsrfToken(form) {
        const input = form.querySelector('input[name="_token"]');
        if (input && input.value) {
            return input.value;
        }

        const meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.getAttribute('content') : '';
    }

    function bindForm(form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            clearErrors(form);

            const successBanner = form.querySelector('[data-entrepreneur-success]');
            const errorBanner = form.querySelector('[data-entrepreneur-error]');
            showBanner(successBanner, '', false);
            showBanner(errorBanner, '', false);

            const clientErrors = validateForm(form);
            const fields = Object.keys(clientErrors);

            if (fields.length) {
                fields.forEach(function (field) {
                    showFieldError(form, field, clientErrors[field]);
                });
                return;
            }

            setLoading(form, true);

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': getCsrfToken(form),
                },
                body: formData,
                credentials: 'same-origin',
            })
                .then(async function (response) {
                    const data = await response.json().catch(function () {
                        return {};
                    });

                    if (response.status === 422 && data.errors) {
                        Object.keys(data.errors).forEach(function (field) {
                            showFieldError(form, field, data.errors[field][0]);
                        });
                        return;
                    }

                    if (!response.ok) {
                        showBanner(
                            errorBanner,
                            data.message || 'Something went wrong while submitting your interest. Please try again later.',
                            true
                        );
                        return;
                    }

                    form.reset();
                    showBanner(
                        successBanner,
                        data.message || 'Thank you for signing up. We have received your information and will contact you if there is a suitable opportunity.',
                        true
                    );
                })
                .catch(function () {
                    showBanner(
                        errorBanner,
                        'Unable to submit right now. Please check your connection and try again.',
                        true
                    );
                })
                .finally(function () {
                    setLoading(form, false);
                });
        });

        form.querySelectorAll('[data-field]').forEach(function (input) {
            const eventName = input.type === 'checkbox' ? 'change' : 'input';
            input.addEventListener(eventName, function () {
                const field = input.getAttribute('data-field');
                const errorEl = form.querySelector('[data-error-for="' + field + '"]');
                input.classList.remove('contact-field-error');
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-entrepreneur-form]').forEach(bindForm);
    });
})();
