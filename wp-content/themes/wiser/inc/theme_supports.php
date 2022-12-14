<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script'
	) );
add_theme_support( 'custom-background',
	apply_filters( 'wiser_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 250,
	'flex-width'  => true,
	'flex-height' => true,
) );