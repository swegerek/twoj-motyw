<?php
/**
 * The front page template file for Futuria theme
 *
 * @package Futuria
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-futuria">
	<div class="hero-futuria-content">
		<span class="hero-tag">INNOWACJE PRZYSZŁOŚCI</span>
		<h1 class="hero-title">PRZYSZŁOŚĆ TECHNOLOGII JEST DZIŚ</h1>
		<p class="hero-description">
			Tworzymy nową erę cyfrowych rozwiązań opartych o sztuczną inteligencję, przetwarzanie kwantowe oraz nowoczesną architekturę oprogramowania.
		</p>
		<div class="hero-actions">
			<a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>" class="btn-futuria-primary">Odkryj Rozwiązania</a>
			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-futuria-outline">Skontaktuj się</a>
		</div>
	</div>
</section>

<!-- Features Grid Section -->
<section class="features-section">
	<div class="section-header">
		<h2 class="section-title">Nasze Kluczowe Technologie</h2>
		<p class="section-subtitle">Rozwiązania nowej generacji zaprojektowane dla liderów branży cyfrowej</p>
	</div>

	<div class="features-grid">
		<!-- Card 1 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://placehold.co/400x300/111827/00f2fe?text=AI+Core" alt="Sztuczna Inteligencja">
			</div>
			<h3 class="feature-title">Autonomiczne AI</h3>
			<p class="feature-desc">
				Zaawansowane systemy sztucznej inteligencji zdolne do uczenia maszynowego w czasie rzeczywistym i automatyzacji złożonych procesów.
			</p>
		</article>

		<!-- Card 2 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://placehold.co/400x300/111827/9d4edd?text=Quantum+Cloud" alt="Przetwarzanie Kwantowe">
			</div>
			<h3 class="feature-title">Chmura Kwantowa</h3>
			<p class="feature-desc">
				Superkomputery nowej generacji i algorytmy kwantowe zapewniające nieosiągalną dotąd moc obliczeniową i analityczną.
			</p>
		</article>

		<!-- Card 3 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://placehold.co/400x300/111827/3b82f6?text=Cyber+Shield" alt="Cyberbezpieczeństwo">
			</div>
			<h3 class="feature-title">Cyber Shield</h3>
			<p class="feature-desc">
				Wielowarstwowe architektury bezpieczeństwa chroniące zasoby informacyjne przed najnowszymi cyfrowymi zagrożeniami.
			</p>
		</article>
	</div>
</section>

<!-- CTA Banner Section -->
<section class="cta-banner-section">
	<div class="cta-banner-card">
		<h2>Gotów na cyfrową transformację?</h2>
		<p>Skontaktuj się z naszym zespołem ekspertów i zaprojektuj innowacyjną przyszłość swojej firmy.</p>
		<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-futuria-primary">Rozpocznij Projekt</a>
	</div>
</section>

<?php
get_footer();
