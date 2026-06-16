<?php
/**
 * Front Page Template
 *
 * @package DavidLaRockaWMA
 */

get_header();
?>
<?php get_template_part('template-parts/hero/slider'); ?>
<?php get_template_part('template-parts/hero/content'); ?>
<main id="main" class="site-main">

    
    

    <?php get_template_part('template-parts/sections/benefits'); ?>

    <?php get_template_part('template-parts/sections/courses'); ?>

    <?php get_template_part('template-parts/sections/how-it-works'); ?>

    <?php get_template_part('template-parts/sections/testimonials'); ?>

    <?php get_template_part('template-parts/sections/plans'); ?>

    <?php get_template_part('template-parts/sections/cta'); ?>

</main>

<?php get_footer(); ?>