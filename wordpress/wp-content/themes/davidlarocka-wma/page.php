<?php
/**
 * Page template.
 *
 * @package DavidLaRockaWMA
 */

get_header();
?>

<main id="main" class="site-main site-main--page">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class( 'page-content' ); ?>>
			<header class="page-content__header">
				<?php the_title( '<h1 class="page-content__title">', '</h1>' ); ?>
			</header>

			<div class="page-content__body">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
