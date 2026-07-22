/**
 * Futuria Mobile Navigation Script
 */
document.addEventListener('DOMContentLoaded', function () {
	const menuToggle = document.querySelector('.menu-toggle');
	const mainNavigation = document.querySelector('.main-navigation');

	if (!menuToggle || !mainNavigation) {
		return;
	}

	menuToggle.addEventListener('click', function () {
		const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
		menuToggle.setAttribute('aria-expanded', !isExpanded);
		menuToggle.classList.toggle('is-active');
		mainNavigation.classList.toggle('is-open');
	});

	// Close menu when clicking outside
	document.addEventListener('click', function (event) {
		if (!menuToggle.contains(event.target) && !mainNavigation.contains(event.target) && mainNavigation.classList.contains('is-open')) {
			menuToggle.setAttribute('aria-expanded', 'false');
			menuToggle.classList.remove('is-active');
			mainNavigation.classList.remove('is-open');
		}
	});

	// Close menu when pressing Escape key
	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && mainNavigation.classList.contains('is-open')) {
			menuToggle.setAttribute('aria-expanded', 'false');
			menuToggle.classList.remove('is-active');
			mainNavigation.classList.remove('is-open');
		}
	});
});
