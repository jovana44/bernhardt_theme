/*
 *  javascript
 */

(function () {

	// Mobile navigation
	var burgers = document.querySelectorAll('.menu-toggle'),
		html = document.getElementsByTagName("HTML")[0];

	for (var i = 0; i < burgers.length; i++) {
		burgers[i].onclick = function () {
			this.classList.toggle('opened');
			this.closest('header').classList.toggle('menu-opened');
			html.classList.toggle('noscroll');

		}
	} // end mobile nav

	// Smooth Scroll
	document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	}); // end smooth scroll


	// copy to clipboard
	function copyToClipboard() {
		var copyText = document.getElementById("current-url");
		copyText.select();
		copyText.setSelectionRange(0, 99999);
		var copyValue = copyText.value;

		if (window.isSecureContext && navigator.clipboard) {
			navigator.clipboard.writeText(copyValue);
		} else {
			// Use the 'out of viewport hidden text area' trick
			const textArea = document.createElement("textarea");
			textArea.value = copyValue;

			// Move textarea out of the viewport so it's not visible
			textArea.style.position = "absolute";
			textArea.style.left = "-999999px";

			document.body.prepend(textArea);
			textArea.select();

			try {
				document.execCommand('copy');
			} catch (error) {
				console.error(error);
			} finally {
				textArea.remove();
			}
		}

		var tooltip = document.getElementById("tooltip");
		if (tooltip.classList.contains('show')) {
			tooltip.classList.remove('show');
		}
		tooltip.classList.add('show');
		setTimeout(() => {
			tooltip.classList.remove('show');
		}, "2000");
		tooltip.innerHTML = "Copied";
	}
	if (document.getElementById('copy-to-clipboard')) {
		document.getElementById('copy-to-clipboard').addEventListener('click', copyToClipboard);
	}


	// tooltip functionality
	var languagePicker = document.getElementById("languagePicker");
	if (languagePicker != null) {
		languagePicker.addEventListener('click', showLanDropdown);
		languagePicker.addEventListener('mouseover', showLanDropdown);
		languagePicker.addEventListener('mouseout', removeLanDropdown);
	}

	function showLanDropdown() {
		var lanDropdowns = document.querySelectorAll('.language__dropdown');
		if (lanDropdowns && lanDropdowns.length > 0) {
			lanDropdowns.forEach(function (lanDropdown) {
				if (lanDropdown.classList.contains('show')) {
					lanDropdown.classList.remove('show');
				}
			});
		}
		var currentTooltip = this.querySelector('.language__dropdown');
		currentTooltip.classList.add('show');
	}

	function removeLanDropdown() {
		var lanDropdowns = document.querySelectorAll('.language__dropdown');
		if (lanDropdowns && lanDropdowns.length > 0) {
			lanDropdowns.forEach(function (lanDropdown) {
				if (lanDropdown.classList.contains('show')) {
					lanDropdown.classList.remove('show');
				}
			});
		}
	}

	document.addEventListener('click', function (evt) {
		if (evt.target.closest('.language__picker') || evt.target.closest('.language__dropdown')) {
			return;
		}

		var lanDropdowns = document.querySelectorAll('.language__dropdown');
		if (lanDropdowns && lanDropdowns.length > 0) {
			lanDropdowns.forEach(function (lanDropdown) {
				lanDropdown.classList.remove('show');

			});
		}
	})


	// search bar on desktop functionality
	if (window.matchMedia('(min-width: 1200px)').matches) {
		var searchBtn = document.getElementById('searchsubmit');
		if (searchBtn) {
			searchBtn.addEventListener('click', showSearchBar);

			function showSearchBar(evt) {
				evt.preventDefault();

				var forms = document.querySelectorAll('.header__right .searchform');
				if (forms && forms.length > 0) {
					forms.forEach(function (form) {
						if (form.classList.contains('show')) {
							form.classList.remove('show');
						}
						form.classList.add('show');

					});
				}
			}

			document.addEventListener('click', function (evt) {
				if (evt.target.closest('.search-icon-btn') || evt.target.closest('.searchform')) {
					return;
				}

				var forms = document.querySelectorAll('.header__right .searchform');
				if (forms && forms.length > 0) {
					forms.forEach(function (form) {
						if (form.classList.contains('show')) {
							form.classList.remove('show');
						}
					});
				}
			});

		}

	}






}());





/*
 *  jQuery
 */

(function ($) {

	'use strict';

	$(document).ready(function () {


	});

}(jQuery));