<section class="plans section">

    <div class="container">

        <div class="section-heading">

            <span class="section-kicker">
                Planes
            </span>

            <h2 class="section-title">
                Elige el plan ideal para ti
            </h2>

            <p class="section-description">
                Accede a formación musical enfocada en el ministerio de adoración.
            </p>

        </div>

        <div class="plans-grid">

            <?php

            $planes = new WP_Query([
                'post_type'      => 'post',
                'category_name'  => 'planes',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            ]);

            if ($planes->have_posts()) :

                while ($planes->have_posts()) :

                    $planes->the_post();

                    $precio = get_post_meta(
                        get_the_ID(),
                        'precio',
                        true
                    );
            ?>

                <div class="plan-card">

                    <h3 class="plan-title">
                        <?php the_title(); ?>
                    </h3>

                    <div class="plan-price">

                        <?php if ($precio) : ?>

                            $<?php echo number_format($precio, 0, ',', '.'); ?>

                        <?php endif; ?>

                    </div>

                    <div class="plan-description">

                        <?php echo get_the_excerpt(); ?>

                    </div>

                    <a
                        href="<?php the_permalink(); ?>"
                        class="btn-primary"
                    >
                        Ver detalles
                    </a>

                </div>

            <?php

                endwhile;

                wp_reset_postdata();

            endif;

            ?>

        </div>

    </div>

</section>