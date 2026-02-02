<?php
/**
 * Smart Restaurant Theme Functions
 * 
 * @package Smart_Restaurant
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
		'smart-restaurant-responsive',
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
	/* Menu Filter JS */ 
	wp_enqueue_script(
		'menu-filter',
		get_template_directory_uri() . '/assets/js/menu-filter.js',
		array(),
		null,
		true
	);

	/* Localize AJAX */
	wp_localize_script(
		'menu-filter',
		'menuAjax',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		)
	);

}
add_action( 'wp_enqueue_scripts', 'smart_restaurant_enqueue_assets' );

/* --------------------------------------------------
   Enqueue Admin Assets
-------------------------------------------------- */

function smart_restaurant_admin_assets( $hook ) {

	// Example: only load on your sales dashboard page
	if ( $hook !== 'toplevel_page_smart-restaurant' ) {
		return;
	}

	/* Chart.js */
	wp_enqueue_script(
		'chart-js',
		'https://cdn.jsdelivr.net/npm/chart.js',
		array(),
		null,
		true
	);

	/* Admin Charts JS */
	wp_enqueue_script(
		'sr-admin-charts',
		get_template_directory_uri() . '/assets/js/admin-charts.js',
		array( 'chart-js' ),
		null,
		true
	);

	/* Admin CSS */
	wp_enqueue_style(
		'sr-admin-style',
		get_template_directory_uri() . '/assets/css/admin.css'
	);
}
add_action( 'admin_enqueue_scripts', 'smart_restaurant_admin_assets' );

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
   AJAX
-------------------------------------------------- */

require_once get_template_directory() . '/inc/ajax-menu-filter.php';

/* --------------------------------------------------
   Load Admin Side SALES files
-------------------------------------------------- */

require_once get_template_directory() . '/inc/install.php';
require_once get_template_directory() . '/inc/sales-functions.php';
require_once get_template_directory() . '/inc/sales-data.php';
require_once get_template_directory() . '/inc/admin-menu.php';

/* --------------------------------------------------
   Widgets
-------------------------------------------------- */

/* --------------------------------------------------
   Excerpt Length
-------------------------------------------------- */

/* --------------------------------------------------
   Allow SVG Uploads (Optional)
-------------------------------------------------- */