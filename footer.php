<?php
/**
 * The template for displaying the modern 4-column grid footer in Futuria theme
 *
 * @package Futuria
 */

?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
	<div class="footer-container-grid">
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

		<!-- Column 4: Contact Info -->
		<div class="footer-col">
			<h4 class="footer-col-title">Kontakt</h4>
			<ul class="footer-contact-info">
				<li>📍 Futuria Tower, Warszawa</li>
				<li>📞 +48 22 123 45 67</li>
				<li>✉️ <a href="mailto:kontakt@futuria-tech.io">kontakt@futuria-tech.io</a></li>
				<li>🕒 Pon – Pt: 09:00 – 18:00</li>
			</ul>
		</div>
	</div>

	<hr class="footer-hr">

	<div class="footer-bottom-bar">
		<p>&copy; <?php echo date( 'Y' ); ?> Futuria Technologies Inc. Wszelkie prawa zastrzeżone.</p>
		<p class="footer-credits">Made with ❤️ by <strong>Futuria Team</strong></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
