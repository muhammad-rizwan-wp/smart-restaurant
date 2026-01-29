<?php
get_header(); ?>

<div class="container section-padding">
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="single-menu-item">
			<?php the_post_thumbnail('large'); ?>

			<h1><?php the_title(); ?></h1>

			<div class="menu-meta">
				<p>
					<strong>Price:</strong> <?php the_field( 'price' ); ?>
				</p>
			</div>

			<div class="menu-content">
				<?php the_content(); ?>
			</div>

			<div class="menu-meta">
				<p>
					<strong>Calories:</strong> <?php the_field( 'calories' ); ?>
				</p>
				<p>
					<strong>Ingredients:</strong> <?php the_field( 'ingredients' ); ?>
				</p>
			</div>
		</article>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>