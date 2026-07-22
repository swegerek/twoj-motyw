<?php
/**
 * Futuria Theme Functions and Setup
 *
 * @package Futuria
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'futuria_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function futuria_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register Primary Navigation Menu.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'futuria' ),
			)
		);

		// Switch default core markup to output valid HTML5.
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

		// Add support for Block Editor features.
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
	}
endif;
add_action( 'after_setup_theme', 'futuria_setup' );

/**
 * Enqueue scripts and styles.
 */
function futuria_scripts() {
	// Google Fonts: Outfit & Inter
	wp_enqueue_style(
		'futuria-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;600;700;900&display=swap',
		array(),
		null
	);

	// Main stylesheet using theme.json CSS variables
	wp_enqueue_style( 'futuria-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'futuria_scripts' );
