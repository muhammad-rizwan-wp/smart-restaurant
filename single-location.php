<?php
    get_header(); 
?>

<div class="container section-padding">
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="single-location">
			<h1><?php the_title(); ?></h1>

			<div class="location-content">
				<?php the_content(); ?>
			</div>
		</article>

	<?php endwhile; ?>
</div>

<?php 
    get_footer(); 
?>