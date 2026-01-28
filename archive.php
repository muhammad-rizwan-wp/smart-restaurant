<?php 
    get_header(  );
?>

<div class="container section-padding">
    <h1><?php the_archive_title(  ); ?></h1>

    <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php 
    get_footer(  );
?>