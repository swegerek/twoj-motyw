<?php
/**
 * The template for displaying all pages in Futuria theme
 *
 * @package Futuria
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Small Hero Banner for Inner Pages -->
		<section class="small-hero">
			<div class="small-hero-container">
				<h1 class="small-hero-title"><?php the_title(); ?></h1>
			</div>
		</section>

		<div class="page-container">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
