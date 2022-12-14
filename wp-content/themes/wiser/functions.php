<?php
/**
 * Wiser functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wiser
 */

if (!function_exists('wiser_setup')) {
  function wiser_setup(): void {
    require_once('inc/theme_supports.php');

    load_theme_textdomain('wiser', get_template_directory() . '/languages');

    register_nav_menus(array(
      'header_menu' => esc_html__('Header menu', 'wiser'),
    ));
  }
}

add_action( 'after_setup_theme', 'wiser_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if (!function_exists('wiser_content_width')) {
function wiser_content_width(): void {
    $GLOBALS['content_width'] = apply_filters('wiser_content_width', 1140);
}
}

add_action( 'after_setup_theme', 'wiser_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
if (!function_exists('wiser_scripts')) :
function wiser_scripts(): void {
    wp_enqueue_style(
      'wiser-style',
      get_stylesheet_uri(),
      array(),
      false
    );
	wp_style_add_data( 'wiser-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wiser-navigation',
      get_template_directory_uri() . '/js/navigation.js',
      array(),
      false,
		true );
}
endif;

add_action( 'wp_enqueue_scripts', 'wiser_scripts' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';