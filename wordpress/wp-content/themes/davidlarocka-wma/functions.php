<?php
/**
 * Theme setup for David LaRocka WMA.
 *
 * @package DavidLaRockaWMA
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function davidlarocka_wma_setup(): void {
	load_theme_textdomain( 'davidlarocka-wma', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'davidlarocka-wma' ),
		)
	);
}
add_action( 'after_setup_theme', 'davidlarocka_wma_setup' );

function davidlarocka_wma_assets(): void {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'davidlarocka-wma-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$theme_version
	);
	

	wp_enqueue_script(
		'davidlarocka-wma-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'davidlarocka_wma_assets' );

if (!is_admin()) {
    add_filter('show_admin_bar', '__return_false');
}

function wma_enqueue_assets() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'wma-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $version
    );

    wp_enqueue_style(
        'wma-header',
        get_template_directory_uri() . '/assets/css/header.css',
        ['wma-main'],
        $version
    );

    wp_enqueue_style(
        'wma-hero',
        get_template_directory_uri() . '/assets/css/hero.css',
        ['wma-main'],
        $version
    );

}
add_action('wp_enqueue_scripts', 'wma_enqueue_assets');

wp_enqueue_script(
    'wma-header',
    get_template_directory_uri() . '/assets/js/header.js',
    [],
    wp_get_theme()->get('Version'),
    true
);

$theme_dir = get_template_directory();

wp_enqueue_style(
    'wma-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    filemtime($theme_dir . '/assets/css/main.css')
);

wp_enqueue_style(
    'wma-header',
    get_template_directory_uri() . '/assets/css/header.css',
    [],
    filemtime($theme_dir . '/assets/css/header.css')
);

wp_enqueue_style(
    'wma-hero',
    get_template_directory_uri() . '/assets/css/hero.css',
    [],
    filemtime($theme_dir . '/assets/css/hero.css')
);