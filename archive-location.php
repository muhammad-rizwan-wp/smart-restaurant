<?php
    get_header(); 
?>

<div class="container section-padding">
	<h1>Our Locations</h1>

	<div class="card-grid">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="card">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
		</div>
	<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>