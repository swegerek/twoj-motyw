<?php
/**
 * The front page template file for Futuria theme (Light Theme with Unsplash Photography)
 *
 * @package Futuria
 */

get_header();
?>

<!-- Main Hero Section -->
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

<!-- Media & Text Section -->
<section class="media-text-section">
	<div class="media-text-container">
		<div class="media-text-image">
			<img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Futuria Innovation Center">
		</div>
		<div class="media-text-content">
			<span class="section-tag">O NASZEJ WIZJI</span>
			<h2>Pionierzy Cyfrowej Transformacji</h2>
			<p>
				W Futuria nie tylko śledzimy trendy technologiczne – my je kształtujemy. Nasze zaawansowane laboratoria badawcze łączą inżynierię oprogramowania z najnowszymi osiągnięciami nauki.
			</p>
			<p>
				Dostarczamy skalowalne, bezpieczne i ultrawydajne ekosystemy dla przedsiębiorstw gotowych na wyzwania nadchodzącej dekady.
			</p>
			<a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>" class="btn-futuria-primary" style="margin-top: 1rem;">Poznaj Naszą Historię</a>
		</div>
	</div>
</section>

<!-- Our Team Section -->
<section class="team-section">
	<div class="section-header">
		<span class="section-tag">ZESPÓŁ EKSPERTÓW</span>
		<h2 class="section-title">Poznaj Ludzi Tworzących Przyszłość</h2>
		<p class="section-subtitle">Wizjonerzy, inżynierowie i architekci nowoczesnych systemów cyfrowych</p>
	</div>

	<div class="team-grid">
		<!-- Team Member 1 -->
		<article class="team-card">
			<div class="team-avatar-wrapper">
				<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" alt="Dr Elena Vance" class="team-avatar">
			</div>
			<h3 class="team-name">Dr Elena Vance</h3>
			<span class="team-role">Head of Quantum AI</span>
			<p class="team-bio">Specjalistka w dziedzinie głębokiego uczenia maszynowego oraz obliczeń kwantowych z ponad 12-letnim doświadczeniem.</p>
		</article>

		<!-- Team Member 2 -->
		<article class="team-card">
			<div class="team-avatar-wrapper">
				<img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Marcus Sterling" class="team-avatar">
			</div>
			<h3 class="team-name">Marcus Sterling</h3>
			<span class="team-role">Chief Systems Architect</span>
			<p class="team-bio">Architekt rozproszonych chmur obliczeniowych i rozwiązań o wysokiej dostępności dla sektora Enterprise.</p>
		</article>

		<!-- Team Member 3 -->
		<article class="team-card">
			<div class="team-avatar-wrapper">
				<img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=80" alt="Sarah Chen" class="team-avatar">
			</div>
			<h3 class="team-name">Sarah Chen</h3>
			<span class="team-role">Lead Cyber Security</span>
			<p class="team-bio">Ekspertka ds. kryptografii kwantowej i zabezpieczania krytycznej infrastruktury informatycznej.</p>
		</article>
	</div>
</section>

<!-- Features Grid / Services Section -->
<section class="features-section">
	<div class="section-header">
		<span class="section-tag">NASZE SPECJALIZACJE</span>
		<h2 class="section-title">Kluczowe Technologie Futuria</h2>
		<p class="section-subtitle">Rozwiązania nowej generacji zaprojektowane dla liderów branży cyfrowej</p>
	</div>

	<div class="features-grid">
		<!-- Card 1 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://images.unsplash.com/photo-1677442136019-21780efad99a?auto=format&fit=crop&w=600&q=80" alt="Sztuczna Inteligencja">
			</div>
			<h3 class="feature-title">Autonomiczne AI</h3>
			<p class="feature-desc">
				Zaawansowane systemy sztucznej inteligencji zdolne do uczenia maszynowego w czasie rzeczywistym i automatyzacji złożonych procesów.
			</p>
		</article>

		<!-- Card 2 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80" alt="Przetwarzanie Kwantowe">
			</div>
			<h3 class="feature-title">Chmura Kwantowa</h3>
			<p class="feature-desc">
				Superkomputery nowej generacji i algorytmy kwantowe zapewniające nieosiągalną dotąd moc obliczeniową i analityczną.
			</p>
		</article>

		<!-- Card 3 -->
		<article class="feature-card">
			<div class="feature-image-wrapper">
				<img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80" alt="Cyberbezpieczeństwo">
			</div>
			<h3 class="feature-title">Cyber Shield</h3>
			<p class="feature-desc">
				Wielowarstwowe architektury bezpieczeństwa chroniące zasoby informacyjne przed najnowszymi cyfrowymi zagrożeniami.
			</p>
		</article>
	</div>
</section>

<!-- Latest Blog Posts Section (WP_Query) -->
<section class="blog-posts-section">
	<div class="section-header">
		<span class="section-tag">WIEDZA I AKTUALNOŚCI</span>
		<h2 class="section-title">Najnowsze Artykuły z Bloga</h2>
		<p class="section-subtitle">Bądź na bieżąco z najnowszymi trendami w świecie nowoczesnych technologii</p>
	</div>

	<div class="blog-grid">
		<?php
		$latest_posts_query = new WP_Query(
			array(
				'posts_per_page'      => 3,
				'post_status'         => 'publish',
				'ignore_sticky_posts' => true,
			)
		);

		if ( $latest_posts_query->have_posts() ) :
			while ( $latest_posts_query->have_posts() ) :
				$latest_posts_query->the_post();
				?>
				<article class="blog-card">
					<div class="blog-card-image-wrapper">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large' ); ?>
						<?php else : ?>
							<img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="<?php the_title_attribute(); ?>">
						<?php endif; ?>
					</div>
					<div class="blog-card-body">
						<div class="blog-card-meta"><?php echo get_the_date( 'd F Y' ); ?></div>
						<h3 class="blog-card-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<div class="blog-card-excerpt">
							<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="blog-card-link">Czytaj Więcej &rarr;</a>
					</div>
				</article>
				<?php
			endwhile;
			wp_reset_postdata();
		else :
			?>
			<p style="text-align: center; color: var(--wp--preset--color--text-muted); width: 100%;">Brak opublikowanych artykułów.</p>
		<?php endif; ?>
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
