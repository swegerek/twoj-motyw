<?php
/**
 * The main template file
 *
 * @package Twoj_Motyw
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-card' ); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
<?php else : ?>
	<article class="entry-card">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Brak zawartości', 'twoj-motyw' ); ?></h1>
		</header>
		<div class="entry-content">
			<p><?php esc_html_e( 'Nie znaleziono treści spełniających podane kryteria.', 'twoj-motyw' ); ?></p>
		</div>
	</article>
<?php endif; ?>

<?php
get_footer();
