<?php
/**
 * Template Name: Strona Kontaktowa
 * Template for displaying the Contact page with 2-column layout (Left media/info, Right form)
 *
 * @package Futuria
 */

get_header();
?>

<!-- Small Hero Banner with Unsplash Contact Background -->
<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(15, 23, 42, 0.75) 100%), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
	<div class="small-hero-container">
		<h1 class="small-hero-title"><?php the_title(); ?></h1>
		<p style="color: #f1f5f9; font-size: 1.15rem; margin-top: 0.5rem; text-shadow: 0 1px 6px rgba(0,0,0,0.5);">Skontaktuj się z naszym zespołem inżynierów i zaprojektuj przyszłość swojej firmy.</p>
	</div>
</section>

<div class="page-container">
	<div class="contact-section-grid">
		<!-- Left Column: Contact Image & Details -->
		<div class="contact-info-col">
			<div class="contact-image-wrapper">
				<img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?auto=format&fit=crop&w=800&q=80" alt="Futuria Contact Center">
			</div>

			<div class="contact-details-card">
				<h3>Dane Kontaktowe</h3>
				<ul class="contact-details-list">
					<li>
						<span class="contact-icon">📍</span>
						<div>
							<strong>Siedziba główna:</strong>
							<p>Futuria Innovation Tower, ul. Przykładowa 100, 00-001 Warszawa</p>
						</div>
					</li>
					<li>
						<span class="contact-icon">📞</span>
						<div>
							<strong>Infolinia & Telefon:</strong>
							<p>+48 22 123 45 67 / +48 500 600 700</p>
						</div>
					</li>
					<li>
						<span class="contact-icon">✉️</span>
						<div>
							<strong>Adres E-mail:</strong>
							<p><a href="mailto:kontakt@futuria-tech.io">kontakt@futuria-tech.io</a></p>
						</div>
					</li>
					<li>
						<span class="contact-icon">🕒</span>
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
				<p class="form-subtitle">Wypełnij poniższy formularz. Nasz konsultant odpowie w ciągu 24 godzin.</p>

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
						<label for="contact-subject">Temat wiadomości</label>
						<input type="text" id="contact-subject" name="subject" placeholder="Współpraca / Zapytanie ofertowe">
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

<?php
get_footer();
