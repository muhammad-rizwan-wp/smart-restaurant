<?php 

if( !defined('ABSPATH')) exit;

function sr_create_sales_table(){

    global $wpdb;
    $table = $wpdb->prefix . 'menu_sales';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table(
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        menu_id BIGINT NOT NULL,
        quantity INT DEFAULT 1,
        total DECIMAL(10, 2) NOT NULL,
        sale_date DATE NOT NULL,
		PRIMARY KEY (id),
		KEY menu_id (menu_id),
		KEY sale_date (sale_date)
    ) $charset;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta($sql);
}

add_action('after_switch_theme', 'sr_create_sales_table');