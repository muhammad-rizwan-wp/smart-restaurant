<?php
/**
 * The main template file
 *
 * @package Smart_Restaurant
 */

get_header(); ?>
<div class="container">
    <section class="content-area">
        <?php 
            if(have_posts(  )):
                while (have_posts(  )):the_post(  ); ?>
                    <article id="post-<?php the_ID(  ) ?>" <?php post_class(  ) ?>>
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(  ); ?>">
                                <?php the_title(  ); ?>
                            </a>
                        </h2>
                        <div class="entry-content">
                            <?php the_excerpt(  ); ?>
                        </div>
                    </article>
                    <?php endwhile;

                    /* Pagination */
                    the_posts_pagination( array(
                        'prev_text' => __('Previous', 'smart-restaurant'),
                        'next_text' => __('Next', 'smart-restaurant'),
                    ) );

            else:
                echo '<p>' .__('No post found.', 'smart-restaurant'). '</p>';
            endif;
        ?>
    </section>
</div>
<?php get_footer(); ?>