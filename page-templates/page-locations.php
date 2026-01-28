<?php
/**
 * Template Name: Locations Page
 */
get_header(); ?>

<div class="container section-padding">
	<h1>Our Locations</h1>

	<div class="card-grid">
        <?php
        $query = new WP_Query(['post_type'=>'location']);
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="card">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>

<?php get_footer(); ?>