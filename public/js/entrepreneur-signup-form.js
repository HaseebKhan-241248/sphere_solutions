(function () {
    'use strict';

    const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const MAX_ADDITIONAL_SKILLS_LENGTH = 500;

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

    function getSkills(form) {
        const valueInput = form.querySelector('[data-skills-value]');
        if (!valueInput || !valueInput.value.trim()) {
            return [];
        }

        return valueInput.value
            .split(',')
            .map(function (skill) {
                return skill.trim();
            })
            .filter(Boolean);
    }

    function syncSkillsValue(form, skills) {
        const valueInput = form.querySelector('[data-skills-value]');
        if (valueInput) {
            valueInput.value = skills.join(', ');
        }
    }

    function renderSkills(form, skills) {
        const list = form.querySelector('[data-skills-list]');
        if (!list) {
            return;
        }

        list.innerHTML = '';

        skills.forEach(function (skill) {
            const tag = document.createElement('span');
            tag.className = 'inline-flex items-center gap-1.5 rounded-full bg-[#EEF1FF] text-[#1C2035] text-sm px-3 py-1';
            tag.setAttribute('data-skill-tag', skill);

            const label = document.createElement('span');
            label.textContent = skill;

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.className = 'cursor-pointer text-[#4870F8] hover:text-[#3A5CE0] leading-none';
            removeBtn.setAttribute('data-remove-skill', '');
            removeBtn.setAttribute('aria-label', 'Remove ' + skill);
            removeBtn.innerHTML = '&times;';

            tag.appendChild(label);
            tag.appendChild(removeBtn);
            list.appendChild(tag);
        });

        syncSkillsValue(form, skills);
    }

    function addSkill(form, rawSkill) {
        const skill = (rawSkill || '').trim().replace(/,/g, '');
        if (!skill) {
            return false;
        }

        const skills = getSkills(form);
        const exists = skills.some(function (item) {
            return item.toLowerCase() === skill.toLowerCase();
        });

        if (exists) {
            return false;
        }

        const next = skills.concat([skill]);
        const joined = next.join(', ');

        if (joined.length > MAX_ADDITIONAL_SKILLS_LENGTH) {
            showFieldError(form, 'additional_skills', 'Additional skills may not be greater than 500 characters.');
            return false;
        }

        renderSkills(form, next);
        return true;
    }

    function removeSkill(form, skill) {
        const next = getSkills(form).filter(function (item) {
            return item !== skill;
        });
        renderSkills(form, next);
    }

    function clearSkills(form) {
        renderSkills(form, []);
        const input = form.querySelector('[data-skills-input]');
        if (input) {
            input.value = '';
        }
    }

    function bindSkillsInput(form) {
        const input = form.querySelector('[data-skills-input]');
        const box = form.querySelector('[data-skills-box]');
        const list = form.querySelector('[data-skills-list]');

        if (!input || !box || !list) {
            return;
        }

        // Keep chips in sync with any old() value already in the hidden field.
        renderSkills(form, getSkills(form));

        input.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ',') {
                event.preventDefault();
                if (addSkill(form, input.value)) {
                    input.value = '';
                    const errorEl = form.querySelector('[data-error-for="additional_skills"]');
                    box.classList.remove('contact-field-error');
                    if (errorEl) {
                        errorEl.textContent = '';
                        errorEl.classList.add('hidden');
                    }
                }
                return;
            }

            if (event.key === 'Backspace' && !input.value) {
                const skills = getSkills(form);
                if (skills.length) {
                    removeSkill(form, skills[skills.length - 1]);
                }
            }
        });

        input.addEventListener('blur', function () {
            if (addSkill(form, input.value)) {
                input.value = '';
            }
        });

        list.addEventListener('click', function (event) {
            const button = event.target.closest('[data-remove-skill]');
            if (!button) {
                return;
            }

            const tag = button.closest('[data-skill-tag]');
            if (!tag) {
                return;
            }

            removeSkill(form, tag.getAttribute('data-skill-tag'));
        });

        box.addEventListener('click', function () {
            input.focus();
        });
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

        if (additionalSkills.length > MAX_ADDITIONAL_SKILLS_LENGTH) {
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
        bindSkillsInput(form);

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            clearErrors(form);

            const errorBanner = form.querySelector('[data-entrepreneur-error]');
            showBanner(errorBanner, '', false);

            // Commit any skill still typed in the input before validate/submit.
            const skillsInput = form.querySelector('[data-skills-input]');
            if (skillsInput && skillsInput.value.trim()) {
                addSkill(form, skillsInput.value);
                skillsInput.value = '';
            }

            const clientErrors = validateForm(form);
            const fields = Object.keys(clientErrors);

            if (fields.length) {
                fields.forEach(function (field) {
                    showFieldError(form, field, clientErrors[field]);
                });
                return;
            }

            setLoading(form, true);

            form.querySelectorAll('[data-hp]').forEach(function (input) {
                input.value = '';
            });

            const formData = new FormData(form);
            formData.delete('hp_field');

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
                    clearSkills(form);

                    const successMessage = data.message
                        || 'Thank you for signing up. We have received your information and will contact you if there is a suitable opportunity.';

                    if (typeof window.showSiteToast === 'function') {
                        window.showSiteToast(successMessage, { type: 'success', duration: 5000 });
                    }
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
            if (input.hasAttribute('data-skills-box')) {
                return;
            }

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

        const flashSuccess = document.querySelector('[data-entrepreneur-flash-success]');
        if (flashSuccess && flashSuccess.textContent.trim() && typeof window.showSiteToast === 'function') {
            window.showSiteToast(flashSuccess.textContent.trim(), { type: 'success', duration: 5000 });
        }
    });
})();
