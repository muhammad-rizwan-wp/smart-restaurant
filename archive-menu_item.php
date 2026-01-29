<?php
    get_header(); 
?>

<div class="container section-padding">
	
	<h1 class="text-center">Our Menu</h1>

	<!--Category TABs-->
	<div class="menu-tabs">
		<button class="tab active" data-filter="all">All</button>

		<?php 
			$terms = get_terms(
				array(
					'taxonomy' => 'menu_category',
					'hide_empty' => true
				)
			);

			foreach($terms as $term){
				echo '<button class="tab" data-filter="'.esc_attr( $term->slug ).'">'.esc_html( $term->name ).'</button>';
			}
		?>
	</div>
	
	<!-- MENU GRID -->
	<div class="menu-grid">
		
		<?php 
			while(have_posts(  )): the_post(  );
				$categories = get_the_terms( get_the_ID(), 'menu_category' );
				$cat_classes = '';

				if($categories){
					foreach($categories as $category){
						$cat_classes .= ' ' . $category->slug;
					}
				}
		?>
				<div class="menu-item<?php echo esc_attr( $cat_classes ); ?>">
					
					<a href="<?php the_permalink(  ); ?>">
						<?php the_post_thumbnail(  ); ?>
						<h3>
							<?php the_title(); ?>
						</h3>
						<p class="menu-price">
							<?php echo esc_html( get_field('price') ); ?>
						</p>
					</a>

				</div>
		<?php endwhile; ?>
	</div>
</div>

<?php 
    get_footer(); 
?>