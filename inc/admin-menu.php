<?php

if ( ! defined('ABSPATH') ) exit;

add_action( 'admin_menu', function(){

    add_menu_page( 
        'Smart Resturant',
        'Smart Resturant',
        'manage_options',
        'smart-resturant',
        'sr_smart_resturant',
        'dashicons-chart-bar',
        25
     );
} );

// function sr_sales_dashboard() {
//     require get_template_directory() . '/inc/admin-sales-dashboard.php';
// }

function sr_smart_resturant() {
    require get_template_directory() . '/inc/admin-sales-dashboard.php';
}