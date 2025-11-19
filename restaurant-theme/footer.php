<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Restaurant_Premium
 */

?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-content">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <div class="footer-section">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <div class="footer-section">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <div class="footer-section">
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="footer-content">
                    <div class="footer-section">
                        <h3><?php esc_html_e( 'About Us', 'restaurant-premium' ); ?></h3>
                        <p><?php bloginfo( 'description' ); ?></p>
                    </div>

                    <div class="footer-section">
                        <h3><?php esc_html_e( 'Quick Links', 'restaurant-premium' ); ?></h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_id'        => 'footer-menu',
                                'fallback_cb'    => false,
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </div>

                    <div class="footer-section">
                        <h3><?php esc_html_e( 'Contact Info', 'restaurant-premium' ); ?></h3>
                        <ul>
                            <li><?php esc_html_e( 'Phone: +33 1 23 45 67 89', 'restaurant-premium' ); ?></li>
                            <li><?php esc_html_e( 'Email: contact@restaurant.com', 'restaurant-premium' ); ?></li>
                            <li><?php esc_html_e( 'Address: 123 Rue de Paris, 75001 Paris', 'restaurant-premium' ); ?></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <div class="footer-bottom">
                <p>
                    &copy; <?php echo date_i18n( __( 'Y', 'restaurant-premium' ) ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
                    <?php
                    printf(
                        /* translators: 1: Theme name, 2: Theme author */
                        esc_html__( 'Theme: %1$s by %2$s', 'restaurant-premium' ),
                        'Restaurant Premium',
                        '<a href="https://example.com">WordPress Templates</a>'
                    );
                    ?>
                </p>
            </div>
        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
