<?php
/**
 * The template for displaying the modern 4-column grid footer in Futuria theme
 *
 * @package Futuria
 */

?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
	<div class="footer-container-grid container-wide">
		<!-- Column 1: Logo & Company Info -->
		<div class="footer-col footer-col-brand">
			<div class="footer-logo">F U T U R I A</div>
			<p class="footer-brand-desc">
				Innowacyjna firma z branży nowych technologii. Tworzymy skrojone na miarę systemy sztucznej inteligencji, chmury kwantowej i cyberbezpieczeństwa.
			</p>
			<div class="footer-social-links">
				<a href="#" aria-label="LinkedIn" class="social-icon">LN</a>
				<a href="#" aria-label="GitHub" class="social-icon">GH</a>
				<a href="#" aria-label="Twitter / X" class="social-icon">X</a>
			</div>
		</div>

		<!-- Column 2: Quick Links -->
		<div class="footer-col">
			<h4 class="footer-col-title">Szybkie Linki</h4>
			<ul class="footer-links-list">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona Główna</a></li>
				<li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O nas</a></li>
				<li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Usługi</a></li>
				<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog & Aktualności</a></li>
				<li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
			</ul>
		</div>

		<!-- Column 3: Our Services -->
		<div class="footer-col">
			<h4 class="footer-col-title">Nasze Usługi</h4>
			<ul class="footer-links-list">
				<li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Autonomiczne AI</a></li>
				<li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Chmura Kwantowa</a></li>
				<li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Cyber Shield Security</a></li>
				<li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Audyty Bezpieczeństwa</a></li>
			</ul>
		</div>

		<!-- Column 4: Contact Info with SVG Icons -->
		<div class="footer-col">
			<h4 class="footer-col-title">Kontakt</h4>
			<ul class="footer-contact-info">
				<li>
					<svg class="footer-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
					</svg>
					<span>Futuria Tower, Warszawa</span>
				</li>
				<li>
					<svg class="footer-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
					</svg>
					<span>+48 22 123 45 67</span>
				</li>
				<li>
					<svg class="footer-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
					</svg>
					<a href="mailto:kontakt@futuria-tech.io">kontakt@futuria-tech.io</a>
				</li>
				<li>
					<svg class="footer-svg-icon" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
					</svg>
					<span>Pon – Pt: 09:00 – 18:00</span>
				</li>
			</ul>
		</div>
	</div>

	<hr class="footer-hr container-wide">

	<div class="footer-bottom-bar container-wide">
		<p>&copy; <?php echo date( 'Y' ); ?> Futuria Technologies Inc. Wszelkie prawa zastrzeżone.</p>
		<p class="footer-credits">
			Made with 
			<svg class="footer-heart-icon" viewBox="0 0 24 24" aria-hidden="true">
				<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
			</svg> 
			by <strong>Futuria Team</strong>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
