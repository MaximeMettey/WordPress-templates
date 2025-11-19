<?php
/**
 * Restaurant Premium Theme Customizer
 *
 * @package Restaurant_Premium
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function restaurant_premium_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'restaurant_premium_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'restaurant_premium_customize_partial_blogdescription',
            )
        );
    }

    // Hero Section
    $wp_customize->add_section(
        'restaurant_premium_hero_section',
        array(
            'title'    => __( 'Hero Section', 'restaurant-premium' ),
            'priority' => 30,
        )
    );

    // Hero Background Image
    $wp_customize->add_setting(
        'hero_background_image',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_background_image',
            array(
                'label'    => __( 'Hero Background Image', 'restaurant-premium' ),
                'section'  => 'restaurant_premium_hero_section',
                'settings' => 'hero_background_image',
            )
        )
    );

    // Hero Title
    $wp_customize->add_setting(
        'hero_title',
        array(
            'default'           => get_bloginfo( 'name' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'hero_title',
        array(
            'label'    => __( 'Hero Title', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_hero_section',
            'type'     => 'text',
        )
    );

    // Hero Subtitle
    $wp_customize->add_setting(
        'hero_subtitle',
        array(
            'default'           => get_bloginfo( 'description' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'hero_subtitle',
        array(
            'label'    => __( 'Hero Subtitle', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_hero_section',
            'type'     => 'text',
        )
    );

    // Hero Button Text
    $wp_customize->add_setting(
        'hero_button_text',
        array(
            'default'           => __( 'View Our Menu', 'restaurant-premium' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'hero_button_text',
        array(
            'label'    => __( 'Hero Button Text', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_hero_section',
            'type'     => 'text',
        )
    );

    // Hero Button Link
    $wp_customize->add_setting(
        'hero_button_link',
        array(
            'default'           => '#menu',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'hero_button_link',
        array(
            'label'    => __( 'Hero Button Link', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_hero_section',
            'type'     => 'url',
        )
    );

    // Colors Section
    $wp_customize->add_section(
        'restaurant_premium_colors',
        array(
            'title'    => __( 'Theme Colors', 'restaurant-premium' ),
            'priority' => 40,
        )
    );

    // Primary Color
    $wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => '#d4af37',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'    => __( 'Primary Color (Gold)', 'restaurant-premium' ),
                'section'  => 'restaurant_premium_colors',
                'settings' => 'primary_color',
            )
        )
    );

    // Secondary Color
    $wp_customize->add_setting(
        'secondary_color',
        array(
            'default'           => '#2c2c2c',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_color',
            array(
                'label'    => __( 'Secondary Color (Dark)', 'restaurant-premium' ),
                'section'  => 'restaurant_premium_colors',
                'settings' => 'secondary_color',
            )
        )
    );

    // Contact Information Section
    $wp_customize->add_section(
        'restaurant_premium_contact',
        array(
            'title'    => __( 'Contact Information', 'restaurant-premium' ),
            'priority' => 50,
        )
    );

    // Phone
    $wp_customize->add_setting(
        'contact_phone',
        array(
            'default'           => '+33 1 23 45 67 89',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_phone',
        array(
            'label'    => __( 'Phone Number', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_contact',
            'type'     => 'text',
        )
    );

    // Email
    $wp_customize->add_setting(
        'contact_email',
        array(
            'default'           => 'contact@restaurant.com',
            'sanitize_callback' => 'sanitize_email',
        )
    );

    $wp_customize->add_control(
        'contact_email',
        array(
            'label'    => __( 'Email Address', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_contact',
            'type'     => 'email',
        )
    );

    // Address
    $wp_customize->add_setting(
        'contact_address',
        array(
            'default'           => '123 Rue de Paris, 75001 Paris',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_address',
        array(
            'label'    => __( 'Address', 'restaurant-premium' ),
            'section'  => 'restaurant_premium_contact',
            'type'     => 'text',
        )
    );
}
add_action( 'customize_register', 'restaurant_premium_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function restaurant_premium_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function restaurant_premium_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function restaurant_premium_customize_preview_js() {
    wp_enqueue_script( 'restaurant-premium-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20220101', true );
}
add_action( 'customize_preview_init', 'restaurant_premium_customize_preview_js' );
