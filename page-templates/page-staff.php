<?php
/**
 * Template Name: Staff Page
 */
get_header(); ?>

<div class="container section-padding">
	<h1>Our Team</h1>

	<div class="card-grid">
        <?php
        $query = new WP_Query(['post_type'=>'staff']);
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="card">
                <?php the_post_thumbnail('medium'); ?>
                <h3><?php the_title(); ?></h3>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
	</div>
    
</div>

<?php get_footer(); ?>