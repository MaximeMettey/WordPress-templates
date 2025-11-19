<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Restaurant_Premium
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function restaurant_premium_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter( 'body_class', 'restaurant_premium_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function restaurant_premium_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'restaurant_premium_pingback_header' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function restaurant_premium_post_classes( $classes ) {
    // Add has-post-thumbnail class if post has thumbnail
    if ( has_post_thumbnail() ) {
        $classes[] = 'has-post-thumbnail';
    }

    return $classes;
}
add_filter( 'post_class', 'restaurant_premium_post_classes' );

/**
 * Modify excerpt length
 *
 * @param int $length The excerpt length.
 * @return int
 */
function restaurant_premium_excerpt_length( $length ) {
    if ( is_admin() ) {
        return $length;
    }
    return 30;
}
add_filter( 'excerpt_length', 'restaurant_premium_excerpt_length' );

/**
 * Modify excerpt more string
 *
 * @param string $more The excerpt more string.
 * @return string
 */
function restaurant_premium_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return '...';
}
add_filter( 'excerpt_more', 'restaurant_premium_excerpt_more' );

/**
 * Add SVG definitions to the footer.
 */
function restaurant_premium_include_svg_icons() {
    // Define SVG sprite file.
    $svg_icons = get_template_directory() . '/assets/images/svg-icons.svg';

    // If it exists, include it.
    if ( file_exists( $svg_icons ) ) {
        require_once $svg_icons;
    }
}
add_action( 'wp_footer', 'restaurant_premium_include_svg_icons', 9999 );

/**
 * Add preconnect for Google Fonts.
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function restaurant_premium_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'restaurant-premium-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'restaurant_premium_resource_hints', 10, 2 );
