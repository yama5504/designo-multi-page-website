<?php
/**
 * designo-theme functions and definitions
 *
 * @package designo-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function designo_theme_setup() {
	load_theme_textdomain( 'designo-theme', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'designo-theme' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'designo_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'designo_theme_setup' );

function designo_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'designo_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'designo_theme_content_width', 0 );

function designo_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'designo-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'designo-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'designo_theme_widgets_init' );

function designo_theme_scripts() {
	// css
	wp_enqueue_style( 'designo-theme-style-base', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'designo-theme-style-compiled', get_template_directory_uri() . '/assets/css/style.css', array('designo-theme-style-base'), filemtime(get_template_directory() . '/assets/css/style.css'));
	// フォント
	wp_enqueue_style( 'designo-theme-fonts', 'https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap', false);
	// js
	wp_enqueue_script( 'designo-theme-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'designo_theme_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}