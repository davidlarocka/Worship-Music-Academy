<header class="site-header">

    <div class="container-header">
        
<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<img
    class="site-brand__logo"
    src="<?= base_url('assets/images/logo-wma-horizontal.png') ?>"
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
            <a href="https://app.worshipmusicacademy.cl/register">
                Inscríbete
            </a>
        </li>

    </ul>
</nav>

    </div>

</header>