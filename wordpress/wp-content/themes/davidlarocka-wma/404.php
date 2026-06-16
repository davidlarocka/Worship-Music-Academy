<?php
/**
 * 404 Error Page Template
 * 
 * @package David LaRocka WMA
 */

get_header();
?>

<main>
    <div class="container">
        <article class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'davidlarocka-wma' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'davidlarocka-wma' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer();
