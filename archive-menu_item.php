<?php
    get_header(); 
?>

<div class="container section-padding">
	<h1><?php post_type_archive_title(); ?></h1>

	<div class="menu-grid">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="menu-item">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium'); ?>
				<h3><?php the_title(); ?></h3>
			</a>
		</div>
	<?php endwhile; ?>
	</div>
</div>

<?php 
    get_footer(); 
?>