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
    
   /* Main stylesheet */ 
	wp_enqueue_style(
		'smart-restaurant-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

   /* Main CSS */ 
   wp_enqueue_style(
		'smart-restaurant-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

   /* Responsive CSS */ 
   wp_enqueue_style(
		'smart-restaurant-main',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

   /* Main JS */
   wp_enqueue_script(
		'smart-restaurant-main-js',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

}
add_action( 'wp_enqueue_scripts', 'smart_restaurant_enqueue_assets' );

/* --------------------------------------------------
   Register Custom Post Types
-------------------------------------------------- */

require get_template_directory(  ) . '/inc/custom-post-types.php';

/* --------------------------------------------------
   Register Custom Taxonomies
-------------------------------------------------- */

require get_template_directory(  ) . '/inc/custom-taxonomies.php';

/* --------------------------------------------------
   Theme Helpers
-------------------------------------------------- */

require get_template_directory(  ) . '/inc/helpers.php';

/* --------------------------------------------------
   Widgets
-------------------------------------------------- */

/* --------------------------------------------------
   Excerpt Length
-------------------------------------------------- */

/* --------------------------------------------------
   Allow SVG Uploads (Optional)
-------------------------------------------------- */