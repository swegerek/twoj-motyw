<?php
/**
 * The template for displaying all pages in Futuria theme
 *
 * @package Futuria
 */

get_header();

// Dynamic Hero Background per page slug
$hero_bg_url = 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1920&q=80';
if ( is_page( 'o-nas' ) ) {
	$hero_bg_url = 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80';
} elseif ( is_page( 'uslugi' ) ) {
	$hero_bg_url = 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80';
} elseif ( is_page( 'kontakt' ) ) {
	$hero_bg_url = 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?auto=format&fit=crop&w=1920&q=80';
}
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Small Hero Banner for Inner Pages -->
		<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(15, 23, 42, 0.75) 100%), url('<?php echo esc_url( $hero_bg_url ); ?>') center/cover no-repeat;">
			<div class="small-hero-container">
				<h1 class="small-hero-title"><?php the_title(); ?></h1>
			</div>
		</section>

		<div class="page-container">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content-card' ); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
