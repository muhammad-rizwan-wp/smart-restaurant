<?php

if ( ! defined('ABSPATH') ) exit;

add_action( 'wp_ajax_filter_menu', 'smart_restaurant_filter_menu' );
add_action( 'wp_ajax_nopriv_filter_menu', 'smart_restaurant_filter_menu' );

function smart_restaurant_filter_menu(){
    
    $category = sanitize_text_field( $_POST['category'] );
    $args = [
        'post_type' => 'menu_item',
        'posts_per_page' => -1,
    ];

    if($category !== "all"){
        $args['tax_query'] = [
            [
                'taxonomy' => 'menu_category',
                'field' => 'slug',
                'terms' => $category
            ]
        ];
    }

    $query = new WP_Query($args);

    if($query->have_posts(  )):
        while($query->have_posts(  )): $query->the_post(  ); ?>
            
            <div class="menu-item fade">
                <a href="<?php the_permalink(  ); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                    <h3>
                        <?php the_title(  ); ?>
                    </h3>
                    <p class="menu-price">
                        <?php the_field('price'); ?>
                    </p>
                </a>
            </div>

        <?php endwhile;
    else:
        echo '<p>No items found</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}