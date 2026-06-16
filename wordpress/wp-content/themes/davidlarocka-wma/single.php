<?php
/**
 * Single post template.
 *
 * @package DavidLaRockaWMA
 */

get_header();
?>

<main id="main" class="site-main site-main--single">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class( 'post-content' ); ?>>
			<header class="post-content__header">
				<?php the_title( '<h1 class="post-content__title">', '</h1>' ); ?>
			</header>

			<div class="post-content__body">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
