<?php
/**
 * Template Name: Menu Page
 */

get_header(); ?>

<div class="container section-padding">
    <h1>Our Menu</h1>
    <div class="menu-grid">
        <?php
        $query = new WP_Query(['post_type'=>'menu_item']);
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="menu-item">
                <?php the_post_thumbnail('medium'); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>

<?php get_footer(); ?>