<?php
/**
 * Main fallback template file for Futuria theme
 *
 * @package Futuria
 */

get_header();
?>

<!-- Small Hero Banner Fallback -->
<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(15, 23, 42, 0.78) 100%), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
	<div class="small-hero-container">
		<h1 class="small-hero-title"><?php wp_title( '' ); ?></h1>
	</div>
</section>

<div class="page-container">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content-card' ); ?> style="margin-bottom: 2rem;">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-content" style="margin-top: 1rem;">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<article class="entry-content-card">
			<div class="entry-content">
				<p><?php esc_html_e( 'Brak treści do wyświetlenia.', 'futuria' ); ?></p>
			</div>
		</article>
	<?php endif; ?>
</div>

<?php
get_footer();
