<?php
/**
 * Site footer.
 *
 * @package DavidLaRockaWMA
 */
?>





<footer class="site-footer">

    <div class="site-footer__inner">

        <p class="footer-copyright">
            &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>
        </p>

        <p class="footer-contact">
            <a href="mailto:contacto@worshipmusicacademy.cl">
                contacto@worshipmusicacademy.cl
            </a>
        </p>

        <p class="footer-dev">
            Desarrollado por
            <a
                href="https://www.instagram.com/bitlion_ltda/?hl=es"
                target="_blank"
                rel="noopener noreferrer"
            >
                Bitlion LTDA
            </a>
        </p>

    </div>

</footer>



<?php wp_footer(); ?>
<a
    href="https://wa.me/56994032543?text=<?php echo urlencode('Hola, quisiera información sobre como matricularme en Worship Music Academy	'); ?>"
    class="wma-whatsapp"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contactar por WhatsApp"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="28"
        height="28"
        viewBox="0 0 24 24"
        fill="currentColor"
    >
        <path d="M20.52 3.48A11.82 11.82 0 0 0 12.05 0C5.5 0 .17 5.33.17 11.88c0 2.09.55 4.13 1.58 5.93L0 24l6.37-1.67a11.84 11.84 0 0 0 5.68 1.45h.01c6.55 0 11.88-5.33 11.88-11.88 0-3.17-1.23-6.14-3.42-8.42zm-8.47 18.3h-.01a9.84 9.84 0 0 1-5.01-1.37l-.36-.21-3.78.99 1.01-3.68-.24-.38a9.83 9.83 0 0 1-1.51-5.25c0-5.44 4.43-9.87 9.88-9.87 2.64 0 5.12 1.03 6.98 2.89a9.8 9.8 0 0 1 2.89 6.98c0 5.45-4.43 9.88-9.85 9.88zm5.42-7.4c-.3-.15-1.78-.88-2.06-.98-.28-.1-.48-.15-.68.15s-.78.98-.96 1.18c-.18.2-.35.23-.65.08-.3-.15-1.26-.46-2.4-1.46-.89-.79-1.49-1.76-1.66-2.06-.18-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.03-.53-.08-.15-.68-1.64-.93-2.25-.25-.6-.5-.52-.68-.53h-.58c-.2 0-.53.08-.8.38s-1.05 1.03-1.05 2.5 1.08 2.9 1.23 3.1c.15.2 2.12 3.24 5.13 4.54.72.31 1.28.5 1.72.64.72.23 1.37.2 1.89.12.58-.09 1.78-.73 2.03-1.43.25-.7.25-1.3.18-1.43-.08-.13-.28-.2-.58-.35z"/>
    </svg>
</a>
</body>
</html>
