<?php

if(!defined('ABSPATH')) exit;

/* MENU CATEGORY */
register_taxonomy( 
    'menu_category', 
    'menu_item', 
    [
        'label' => 'Menu Categories',
        'hierarchical' => true,
        'rewrite' => ['slug' => 'menu-category'],
        'show_admin_column' => true,
    ] 
);

/* STAFF ROLE */
register_taxonomy( 
    'staff_role', 
    'staff', 
    [
        'label' => 'Staff Role',
        'hierarchical' => true,
    ] 
);