<?php
/**
 * Site header.
 *
 * @package DavidLaRockaWMA
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="site-header">

    <div class="container-header">
        
<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<img
    class="site-brand__logo"
    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-wma-horizontal.png' ); ?>"
    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
>
			<?php endif; ?>
		</a>

        <button class="menu-toggle" aria-label="Abrir menú">
            ☰
        </button>

        <nav class="main-navigation" aria-label="Menú principal">
    <ul class="menu">

        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
        </li>

        <li>
            <a href="<?php echo esc_url(home_url('/cursos/')); ?>">Cursos</a>
        </li>

       

        <li>
            <a href="<?php echo esc_url(home_url('/planes/')); ?>">Planes</a>
        </li>
        

		<li class="menu-item menu-item-cta">
            <a href="/app/register">
                Inscríbete
            </a>
        </li>
        <li>
            <a href="/app/login">Mi cuenta</a>
        </li>

    </ul>
</nav>

    </div>

</header>
