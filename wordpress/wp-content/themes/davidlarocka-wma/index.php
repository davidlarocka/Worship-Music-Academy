<?php
/**
 * Main template.
 *
 * @package DavidLaRockaWMA
 */

get_header();
?>

<main id="main" class="site-main">
	<?php if ( have_posts() ) : ?>
		<div class="content-list">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class( 'content-card' ); ?>>
					<header class="content-card__header">
						<?php the_title( '<h1 class="content-card__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h1>' ); ?>
					</header>

					<div class="content-card__body">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<section class="empty-state">
			<h1><?php esc_html_e( 'Ready to build Worship Music Academy.', 'davidlarocka-wma' ); ?></h1>
			<p><?php esc_html_e( 'Add your first page or post to start shaping the experience.', 'davidlarocka-wma' ); ?></p>
		</section>
	<?php endif; ?>
</main>

<?php
get_footer();
