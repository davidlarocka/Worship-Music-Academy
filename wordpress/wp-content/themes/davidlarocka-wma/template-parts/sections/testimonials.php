<section class="testimonials section">

    <div class="container">

        <div class="section-heading">

            <span class="section-kicker">
                Historias reales
            </span>

            <h2 class="section-title">
                Nuestros alumnos cuentan su experiencia
            </h2>

        </div>

        <div class="testimonials-grid">

            <?php

            $testimonios = new WP_Query([
                'post_type' => 'post',
                'category_name' => 'testimonios',
                'posts_per_page' => 6
            ]);

            while ($testimonios->have_posts()) :
                $testimonios->the_post();

                $reel_url = get_post_meta(
                    get_the_ID(),
                    'reel_url',
                    true
                );
            ?>

                <a
                    href="<?php echo esc_url($reel_url); ?>"
                    target="_blank"
                    class="testimonial-card"
                >

                    <?php the_post_thumbnail('large'); ?>

                    <div class="testimonial-overlay">

                        <div class="play-button">
                            ▶
                        </div>

                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php echo get_the_excerpt(); ?>
                        </p>

                    </div>

                </a>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>

    </div>

</section>