<?php
/**
 * The template for displaying all single posts in Futuria theme
 *
 * @package Futuria
 */

get_header();

// Use post thumbnail URL if available, otherwise high-res AI Unsplash photo
$single_hero_bg = 'https://images.unsplash.com/photo-1677442136019-21780efad99a?auto=format&fit=crop&w=1920&q=80';
if ( has_post_thumbnail() ) {
	$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	if ( $thumbnail_url ) {
		$single_hero_bg = $thumbnail_url;
	}
}
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Small Hero Banner for Single Post -->
		<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(15, 23, 42, 0.78) 100%), url('<?php echo esc_url( $single_hero_bg ); ?>') center/cover no-repeat;">
			<div class="small-hero-container container-narrow">
				<span class="section-tag" style="color: #00f2fe; margin-bottom: 0.5rem; text-shadow: 0 1px 4px rgba(0,0,0,0.5);"><?php echo get_the_date( 'd F Y' ); ?></span>
				<h1 class="small-hero-title"><?php the_title(); ?></h1>
			</div>
		</section>

		<div class="page-container container">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content-card' ); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<hr style="margin: 2.5rem 0; border: 0; height: 1px; background-color: #e2e8f0;">

				<div class="post-navigation-links" style="display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap;">
					<div><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
					<div><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
				</div>
			</article>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
