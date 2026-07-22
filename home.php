<?php
/**
 * The template for displaying the blog posts index in Futuria theme
 *
 * @package Futuria
 */

get_header();
?>

<!-- Small Hero Banner for Blog Index with Unique Tech Background -->
<section class="small-hero" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(15, 23, 42, 0.75) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
	<div class="small-hero-container">
		<h1 class="small-hero-title" style="color: #ffffff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Aktualności & Technologie</h1>
		<p style="color: #f1f5f9; font-size: 1.1rem; margin-top: 0.5rem; text-shadow: 0 1px 6px rgba(0,0,0,0.5);">Najnowsze artykuły, raporty techniczne i przemyślenia naszych inżynierów</p>
	</div>
</section>

<div class="page-container">
	<?php if ( have_posts() ) : ?>
		<div class="blog-grid" style="margin-bottom: 3rem;">
			<?php while ( have_posts() ) : the_post(); ?>
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
						<h2 class="blog-card-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="blog-card-excerpt">
							<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="blog-card-link">Czytaj Więcej &rarr;</a>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<div class="posts-pagination" style="text-align: center; margin-bottom: 3rem;">
			<?php
			the_posts_pagination(
				array(
					'prev_text' => '&larr; Poprzednie',
					'next_text' => 'Następne &rarr;',
				)
			);
			?>
		</div>
	<?php else : ?>
		<article>
			<div class="entry-content">
				<p><?php esc_html_e( 'Brak wpisów do wyświetlenia.', 'futuria' ); ?></p>
			</div>
		</article>
	<?php endif; ?>
</div>

<?php
get_footer();
