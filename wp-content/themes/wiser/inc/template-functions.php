<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Wiser
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
if (!function_exists('wiser_body_classes')) :
function wiser_body_classes( array $classes ): array {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
endif;

add_filter( 'body_class', 'wiser_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
if (!function_exists('wiser_pingback_header')) :
function wiser_pingback_header(): void {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">',
			esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
endif;

add_action('wp_head', 'wiser_pingback_header');