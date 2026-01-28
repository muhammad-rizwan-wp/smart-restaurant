<?php
/**
 * Footer Template
 *
 * @package Smart_Restaurant
 */
?>
        </main><!-- #primary -->

        <footer class="site-footer">
            <div class="container">
                <!-- Footer Widgets -->
                <?php if(is_active_sidebar( 'footer-widgets' )) :?>
                    <div class="footer-widgets">
                        <?php dynamic_sidebar( 'footer-widgets' ); ?>
                    </div>
                <?php endif; ?>

                <!-- Footer Navigation --> 
                <nav class="footer-navigation">
                    <?php 
                        wp_nav_menu( array (
                            "theme_location" => "footer",
                            "menu_class" => "footer-menu",
                            "container" => false,
                            "fallback_cb" => false,
                        ) );
                    ?>
                </nav>

                <!-- Copyrights --> 
                <div class="footer-bottom">
                    <p>
                        &copy; <?php echo date('Y'); ?>
                        <?php bloginfo( "name" ); ?>
                        <?php esc_html( 'All Rights Reserved', 'smart-restaurant' ); ?>
                    </p>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>