<?php
/**
 * The template for displaying the footer
 *
 * @package Twoj_Motyw
 */

?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. Wszelkie prawa zastrzeżone.</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
