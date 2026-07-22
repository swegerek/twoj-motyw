<?php
/**
 * The main template file for Futuria theme
 *
 * @package Futuria
 */

get_header();
?>

<div class="page-container">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 3rem;">
				<header class="page-header">
					<h1 class="page-header-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<article>
			<header class="page-header">
				<h1 class="page-header-title"><?php esc_html_e( 'Brak zawartości', 'futuria' ); ?></h1>
			</header>
			<div class="entry-content">
				<p><?php esc_html_e( 'Nie znaleziono wpisów ani stron spełniających podane kryteria.', 'futuria' ); ?></p>
			</div>
		</article>
	<?php endif; ?>
</div>

<?php
get_footer();
