<?php
/**
 * Template Name: Strona Kontaktowa
 * Template for displaying the Contact page with clean SVG icons, details card, contact form, and full-width Google Maps below
 *
 * @package Futuria
 */

get_header();
?>

<!-- Small Hero Banner with Unsplash Contact Background -->
<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(15, 23, 42, 0.75) 100%), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
	<div class="small-hero-container container-narrow">
		<h1 class="small-hero-title"><?php the_title(); ?></h1>
		<p style="color: #f1f5f9; font-size: 1.15rem; margin-top: 0.5rem; text-shadow: 0 1px 6px rgba(0,0,0,0.5);">Skontaktuj się z naszym zespołem inżynierów i zaprojektuj przyszłość swojej firmy.</p>
	</div>
</section>

<div class="page-container container-wide" style="margin-top: 3.5rem; margin-bottom: 4rem;">
	<!-- 2-Column Contact Grid -->
	<div class="contact-section-grid">
		<!-- Left Column: Contact Details Card -->
		<div class="contact-info-col">
			<div class="contact-details-card">
				<h3>Dane Kontaktowe</h3>
				<ul class="contact-details-list">
					<li>
						<!-- Location Pin SVG Icon -->
						<svg class="contact-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
						</svg>
						<div>
							<strong>Siedziba główna:</strong>
							<p>Futuria Innovation Tower, ul. Przykładowa 100, 00-001 Warszawa</p>
						</div>
					</li>
					<li>
						<!-- Phone SVG Icon -->
						<svg class="contact-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
						</svg>
						<div>
							<strong>Infolinia & Telefon:</strong>
							<p>+48 22 123 45 67 / +48 500 600 700</p>
						</div>
					</li>
					<li>
						<!-- Envelope Email SVG Icon -->
						<svg class="contact-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
						</svg>
						<div>
							<strong>Adres E-mail:</strong>
							<p><a href="mailto:kontakt@futuria-tech.io">kontakt@futuria-tech.io</a></p>
						</div>
					</li>
					<li>
						<!-- Clock SVG Icon -->
						<svg class="contact-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
						</svg>
						<div>
							<strong>Godziny otwarcia:</strong>
							<p>Poniedziałek – Piątek: 09:00 – 18:00 CEST</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- Right Column: Contact Form -->
		<div class="contact-form-col">
			<div class="contact-form-card">
				<h2>Napisz do nas</h2>

				<form action="#" method="post" class="futuria-contact-form" onsubmit="event.preventDefault(); alert('Dziękujemy za wiadomość! Odpowiemy najszybciej jak to możliwe.'); this.reset();">
					<div class="form-group">
						<label for="contact-name">Imię i Nazwisko *</label>
						<input type="text" id="contact-name" name="name" placeholder="np. Jan Kowalski" required>
					</div>

					<div class="form-group">
						<label for="contact-email">Adres E-mail *</label>
						<input type="email" id="contact-email" name="email" placeholder="jan.kowalski@example.com" required>
					</div>

					<div class="form-group">
						<label for="contact-message">Treść wiadomości *</label>
						<textarea id="contact-message" name="message" rows="5" placeholder="Opisz swój projekt lub zapytanie..." required></textarea>
					</div>

					<button type="submit" class="btn-futuria-primary" style="width: 100%; margin-top: 1rem;">Wyślij Wiadomość &rarr;</button>
				</form>
			</div>
		</div>
	</div>

</div>

<!-- Full-Width Google Maps Embed below contact form & details -->
<div class="google-map-wrapper">
	<iframe
		title="Lokalizacja Futuria Tower w Warszawie"
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156388.35438531122!2d20.92111244837424!3d52.23306531998595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bcc711a413e5f%3A0x73b72e0d350431b2!2sWarszawa!5e0!3m2!1spl!2spl!4v1700000000000!5m2!1spl!2spl"
		allowfullscreen=""
		loading="lazy"
		referrerpolicy="no-referrer-when-downgrade">
	</iframe>
</div>

<?php
get_footer();
