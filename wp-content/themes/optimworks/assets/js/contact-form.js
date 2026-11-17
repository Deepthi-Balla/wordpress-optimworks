/**
 * Contact form → live Optimworks Contact Form 7 endpoint (same as old site).
 * POST https://optimworks.com/wp-json/contact-form-7/v1/contact-forms/237702/feedback
 * Live CF7 sends email to management via the existing WordPress mail/SMTP setup.
 */
(function () {
	var cfg = window.owContactForm || {};
	var CF7_ENDPOINT =
		cfg.endpoint ||
		'https://optimworks.com/wp-json/contact-form-7/v1/contact-forms/237702/feedback';
	var FORM_ID = String(cfg.formId || '237702');
	var UNIT_TAG = cfg.unitTag || 'wpcf7-f237702-p30-o1';
	var CONTAINER_POST = String(cfg.containerPost || '30');
	var RECAPTCHA_SITE_KEY = cfg.recaptchaSiteKey || '';
	var REQUIRE_CAPTCHA = cfg.requireCaptcha === true || cfg.requireCaptcha === '1';

	var form = document.getElementById('contact-form');
	var pathSelect = document.getElementById('path');
	var submitBtn = document.getElementById('contact-submit');
	var hint = document.getElementById('contact-hint');
	var captchaMount = document.getElementById('ow-recaptcha');
	if (!form || !pathSelect || !submitBtn || !hint) return;

	var idleHint = hint.innerHTML;
	var status = 'idle';
	var recaptchaWidgetId = null;

	function fieldValue(name) {
		var el = form.elements.namedItem(name);
		return el && typeof el.value === 'string' ? el.value.trim() : '';
	}

	function setFieldInvalid(name, invalid) {
		var el = form.elements.namedItem(name);
		if (!el || !el.classList) return;
		el.classList.toggle('is-invalid', !!invalid);
		el.setAttribute('aria-invalid', invalid ? 'true' : 'false');
	}

	function clearInvalid() {
		['name', 'email', 'phone', 'company', 'path', 'message'].forEach(function (name) {
			setFieldInvalid(name, false);
		});
		if (captchaMount) captchaMount.classList.remove('is-invalid');
	}

	function setStatus(next, detail) {
		status = next;
		submitBtn.disabled = status === 'sending' || status === 'sent';
		if (status === 'sending') {
			submitBtn.innerHTML =
				'Sending <svg aria-hidden="true"><use href="#i-arrow"></use></svg>';
		} else {
			submitBtn.innerHTML =
				'Send to the team <svg aria-hidden="true"><use href="#i-arrow"></use></svg>';
		}
		hint.setAttribute('data-status', status);

		if (status === 'sent') {
			hint.setAttribute('role', 'status');
			hint.textContent =
				'Thank you. We have received your enquiry and will reply to ' +
				(detail || 'your email') +
				'.';
		} else if (status === 'error') {
			hint.setAttribute('role', 'alert');
			hint.textContent =
				detail ||
				'Something went wrong. Please check the form and try again, or email info@optimworks.com.';
		} else {
			hint.removeAttribute('role');
			hint.innerHTML = idleHint;
		}
	}

	function isValidEmail(value) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
	}

	function isValidPhone(value) {
		return /^\d{10}$/.test(value);
	}

	function getRecaptchaToken() {
		if (!REQUIRE_CAPTCHA) return '';
		if (typeof grecaptcha === 'undefined' || recaptchaWidgetId === null) return '';
		try {
			return grecaptcha.getResponse(recaptchaWidgetId) || '';
		} catch (err) {
			return '';
		}
	}

	function resetRecaptcha() {
		if (typeof grecaptcha === 'undefined' || recaptchaWidgetId === null) return;
		try {
			grecaptcha.reset(recaptchaWidgetId);
		} catch (err) {
			/* ignore */
		}
	}

	function validateLocal() {
		clearInvalid();
		var name = fieldValue('name');
		var email = fieldValue('email');
		var phone = fieldValue('phone');
		var company = fieldValue('company');
		var message = fieldValue('message');
		var token = getRecaptchaToken();
		var errors = [];

		if (!name) {
			setFieldInvalid('name', true);
			errors.push('Enter your name.');
		}
		if (!email || !isValidEmail(email)) {
			setFieldInvalid('email', true);
			errors.push('Enter a valid work email.');
		}
		if (!phone || !isValidPhone(phone)) {
			setFieldInvalid('phone', true);
			errors.push('Enter a 10-digit mobile number.');
		}
		if (!company) {
			setFieldInvalid('company', true);
			errors.push('Enter your company name.');
		}
		if (!message) {
			setFieldInvalid('message', true);
			errors.push('Tell us what we should know.');
		}
		if (REQUIRE_CAPTCHA && !token) {
			if (captchaMount) captchaMount.classList.add('is-invalid');
			errors.push(
				'Complete the captcha before sending. If it shows “Invalid site key”, add optimworks.local in Google reCAPTCHA domains for the live Optimworks key.'
			);
		}

		return {
			ok: errors.length === 0,
			message: errors[0] || '',
			values: {
				name: name,
				email: email,
				phone: phone,
				company: company,
				path: pathSelect.value || 'Enterprise Audit',
				message: message,
				token: token,
			},
		};
	}

	function mapInvalidFields(invalidFields) {
		if (!Array.isArray(invalidFields)) return;
		invalidFields.forEach(function (item) {
			var field = item && item.field;
			if (field === 'your-name') setFieldInvalid('name', true);
			else if (field === 'your-email') setFieldInvalid('email', true);
			else if (field === 'your-phone') setFieldInvalid('phone', true);
			else if (field === 'Message') setFieldInvalid('message', true);
			else if (field === 'cf7sr-recaptcha' && captchaMount) {
				captchaMount.classList.add('is-invalid');
			}
		});
	}

	function buildPayload(values) {
		// Live form 237702 fields: your-name, your-phone, your-email, Services, Message + captcha.
		var composedMessage =
			'Company: ' +
			values.company +
			'\nPath: ' +
			values.path +
			'\nSource: new Optimworks website contact form\n\n' +
			values.message;

		var data = new FormData();
		data.append('_wpcf7', FORM_ID);
		data.append('_wpcf7_version', cfg.cf7Version || '5.7.4');
		data.append('_wpcf7_locale', 'en_US');
		data.append('_wpcf7_unit_tag', UNIT_TAG);
		data.append('_wpcf7_container_post', CONTAINER_POST);
		data.append('_wpcf7_posted_data_hash', '');
		data.append('your-name', values.name);
		data.append('your-phone', values.phone);
		data.append('your-email', values.email);
		data.append('Services', 'Others');
		data.append('Message', composedMessage);
		if (values.token) {
			data.append('cf7sr-recaptcha', values.token);
			data.append('g-recaptcha-response', values.token);
		}
		return data;
	}

	function applyPilotHash() {
		if (window.location.hash.replace('#', '') === 'pilot') {
			pathSelect.value = 'Pilot Week';
		}
	}
	applyPilotHash();
	window.addEventListener('hashchange', applyPilotHash);

	form.addEventListener('submit', function (e) {
		e.preventDefault();
		if (status === 'sending' || status === 'sent') return;

		var result = validateLocal();
		if (!result.ok) {
			setStatus('error', result.message);
			return;
		}

		setStatus('sending', result.values.email);

		var sameOrigin =
			CF7_ENDPOINT.indexOf(window.location.origin) === 0 ||
			CF7_ENDPOINT.charAt(0) === '/';

		fetch(CF7_ENDPOINT, {
			method: 'POST',
			body: buildPayload(result.values),
			credentials: sameOrigin ? 'same-origin' : 'omit',
		})
			.then(function (res) {
				return res.json().then(
					function (json) {
						return { ok: res.ok, json: json };
					},
					function () {
						throw new Error('Unexpected response from the server. Please try again.');
					}
				);
			})
			.then(function (payload) {
				var json = payload.json || {};
				var cf7Status = json.status || '';

				if (cf7Status === 'mail_sent') {
					setStatus('sent', result.values.email);
					form.reset();
					applyPilotHash();
					clearInvalid();
					resetRecaptcha();
					return;
				}

				resetRecaptcha();
				clearInvalid();
				mapInvalidFields(json.invalid_fields);

				if (cf7Status === 'validation_failed') {
					var first =
						json.invalid_fields &&
						json.invalid_fields[0] &&
						json.invalid_fields[0].message;
					setStatus(
						'error',
						first || json.message || 'Please check the highlighted fields.'
					);
					return;
				}

				if (cf7Status === 'spam') {
					setStatus(
						'error',
						'Your submission was flagged as spam. Please try again or email info@optimworks.com.'
					);
					return;
				}

				setStatus(
					'error',
					json.message ||
						'We could not send your enquiry. Please try again or email info@optimworks.com.'
				);
			})
			.catch(function (err) {
				resetRecaptcha();
				setStatus(
					'error',
					(err && err.message) ||
						'Network error. Please try again or email info@optimworks.com.'
				);
			});
	});

	window.owCf7LoadRecaptcha = function () {
		if (!REQUIRE_CAPTCHA || !captchaMount || !RECAPTCHA_SITE_KEY) return;
		if (typeof grecaptcha === 'undefined' || !grecaptcha.render) return;
		if (recaptchaWidgetId !== null) return;
		try {
			captchaMount.hidden = false;
			captchaMount.removeAttribute('aria-hidden');
			recaptchaWidgetId = grecaptcha.render(captchaMount, {
				sitekey: RECAPTCHA_SITE_KEY,
			});
		} catch (err) {
			/* already rendered */
		}
	};

	if (typeof grecaptcha !== 'undefined' && grecaptcha.render) {
		window.owCf7LoadRecaptcha();
	}
})();
