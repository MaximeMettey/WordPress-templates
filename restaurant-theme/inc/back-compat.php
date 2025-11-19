<?php
/**
 * Restaurant Premium back compat functionality
 *
 * Prevents Restaurant Premium from running on WordPress versions prior to 5.8,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.8.
 *
 * @package Restaurant_Premium
 */

/**
 * Prevent switching to Restaurant Premium on old versions of WordPress.
 *
 * Switches to the default theme.
 */
function restaurant_premium_switch_theme() {
    switch_theme( WP_DEFAULT_THEME );
    unset( $_GET['activated'] );
    add_action( 'admin_notices', 'restaurant_premium_upgrade_notice' );
}
add_action( 'after_switch_theme', 'restaurant_premium_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Restaurant Premium on WordPress versions prior to 5.8.
 */
function restaurant_premium_upgrade_notice() {
    printf(
        '<div class="error"><p>%s</p></div>',
        sprintf(
            /* translators: %s: WordPress version */
            esc_html__( 'Restaurant Premium requires at least WordPress version 5.8. You are running version %s. Please upgrade and try again.', 'restaurant-premium' ),
            $GLOBALS['wp_version']
        )
    );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.8.
 */
function restaurant_premium_customize() {
    wp_die(
        sprintf(
            /* translators: %s: WordPress version */
            esc_html__( 'Restaurant Premium requires at least WordPress version 5.8. You are running version %s. Please upgrade and try again.', 'restaurant-premium' ),
            $GLOBALS['wp_version']
        ),
        '',
        array(
            'back_link' => true,
        )
    );
}
add_action( 'load-customize.php', 'restaurant_premium_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.8.
 */
function restaurant_premium_preview() {
    if ( isset( $_GET['preview'] ) ) {
        wp_die(
            sprintf(
                /* translators: %s: WordPress version */
                esc_html__( 'Restaurant Premium requires at least WordPress version 5.8. You are running version %s. Please upgrade and try again.', 'restaurant-premium' ),
                $GLOBALS['wp_version']
            )
        );
    }
}
add_action( 'template_redirect', 'restaurant_premium_preview' );
