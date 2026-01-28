<?php
/**
 * Header Template
 * 
 * @package Smart_Restaurant
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(  ) ?>
        <header class="site-header">
            <div class="container">
                <!-- LOGO / Site Title -->
                <div class="site-branding">
                    <?php if(has_custom_logo(  )) : ?> 
                        <?php the_custom_logo(  )?> 
                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url("/")) ?>" class="site-logo">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            
                <!-- Main Navigation -->
                <nav class="main-navigation">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class' => 'menu',
                            'container' => false,
                            'fallback_cb' => '__return_false',
                        ) );
                    ?>
                </nav>
            </div>
        </header>

        <main id="primary" class="site-main">