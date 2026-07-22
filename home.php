<?php
/**
 * The template for displaying the blog posts index (home.php)
 *
 * @package Futuria
 */

get_header();
?>

<!-- Small Hero Banner for Blog Index -->
<section class="small-hero">
	<div class="small-hero-container">
		<h1 class="small-hero-title">Aktualności & Technologie</h1>
		<p style="color: var(--wp--preset--color--text-muted); font-size: 1.1rem; margin-top: 0.5rem;">Najnowsze artykuły, raporty techniczne i przemyślenia naszych inżynierów</p>
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
							<img src="https://placehold.co/600x400/111827/00f2fe" alt="<?php the_title_attribute(); ?>">
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
