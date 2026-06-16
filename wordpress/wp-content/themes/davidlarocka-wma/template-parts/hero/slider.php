<?php

$slides = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'category_name'  => 'destacado-home',
    'post_status'    => 'publish'
]);

if ($slides->have_posts()) :
?>

<section class="hero-slider">

    <div class="hero-slider__track">

        <?php
        $first = true;

        while ($slides->have_posts()) :
            $slides->the_post();

            if (!has_post_thumbnail()) {
                continue;
            }
        ?>

            <div class="hero-slider__slide <?php echo $first ? 'active' : ''; ?>">

                <img
    src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
    alt="<?php the_title_attribute(); ?>"
>

            </div>

        <?php
            $first = false;
        endwhile;
        ?>

    </div>

</section>

<?php
wp_reset_postdata();
endif;
?>