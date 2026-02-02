<?php

if ( ! defined('ABSPATH') ) exit;

function sr_get_sales_data() {

    global $wpdb;
	$table = $wpdb->prefix . 'menu_sales';

    $daily = $wpdb->get_results("
        SELECT sale_data, SUM(total) AS total
        FROM $table
        GROUP BY sale_date
        ORDER BY sale_date ASC
    ", ARRAY_A);

    $monthly = $wpdb->get_results("
        SELECT DATE_FORMAT(sale_date, '%Y-%m') AS month, SUM(total) AS total
        FROM $table
        GROUP BY month
        ORDER BY month ASC
    ", ARRAY_A);

    $top_items = $wpdb->get_results("
        SELECT menu_id, SUM(quantity) AS qty
        FROM $table
        GROUP BY menu_id
        ORDER BY qty DESC
    ", ARRAY_A);

    $total_sales = $wpdb->get_var("
        SELECT SUM(total)
        FROM $table
    ");

    return compact('daily', 'monthly', 'top_items', 'total_sales');
}