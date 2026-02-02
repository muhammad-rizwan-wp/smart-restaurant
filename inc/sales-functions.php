<?php

if ( ! defined('ABSPATH') ) exit;

/**
 * Add a menu sale
 */

function sr_add_sale ($menu_id, $quantity, $total, $date = null){
    
    global $wpdb;

    if(!$date) {
        $date = current_time( 'Y-m-d' );
    }

    return $wpdb->insert(
        $wpdb->prefix . "menu_sales",
        [
            'menu_id' => intval($menu_id),
            'quantity' => intval($quantity),
            'total' => floatval($total),
            'sale_date' => sanitize_text_field( $date )
        ],
        ['%d', '%d', '%f', '%s']
    );
}