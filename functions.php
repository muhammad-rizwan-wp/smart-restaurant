<?php
/**
 * Smart Restaurant Theme Functions
 * 
 * @package Smart_Restuarant
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* --------------------------------------------------
   Theme Setup
-------------------------------------------------- */

function smart_restaurant_theme_setup(){

}
add_action( 'after_setup_theme', 'smart_restaurant_theme_setup' );

/* --------------------------------------------------
   Enqueue Styles & Scripts
-------------------------------------------------- */

function smart_restaurant_enqueue_assets(){
    
    // Main stylesheet
	wp_enqueue_style(
		'smart-restaurant-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'smart_restaurant_enqueue_assets' );

/* --------------------------------------------------
   Register Custom Post Types
-------------------------------------------------- */

/* --------------------------------------------------
   Register Custom Taxonomies
-------------------------------------------------- */

/* --------------------------------------------------
   Theme Helpers
-------------------------------------------------- */

/* --------------------------------------------------
   Widgets
-------------------------------------------------- */

/* --------------------------------------------------
   Excerpt Length
-------------------------------------------------- */

/* --------------------------------------------------
   Allow SVG Uploads (Optional)
-------------------------------------------------- */