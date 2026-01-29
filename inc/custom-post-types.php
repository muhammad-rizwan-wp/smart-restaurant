<?php

if(!defined('ABSPATH')) exit;

/* MENU ITEMS */
register_post_type('menu_item', [
    'labels' => [
        'name' => 'Menus',
        'singular_name' => 'Menu Item'
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug'=>'menu']
]);

/* STAFF */
register_post_type('staff', [
    'labels' => [
        'name' => 'Staff',
        'singular_name' => 'Staff Member'
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'staff']
]);

/* LOCATIONS */
register_post_type('location', [
    'labels' => [
        'name' => 'Locations',
        'singular_name' => 'Location'
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug'=> 'location']
]);