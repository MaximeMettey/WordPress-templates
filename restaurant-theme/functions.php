<?php
/**
 * Restaurant Premium functions and definitions
 *
 * @package Restaurant_Premium
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Restaurant Premium only works in WordPress 5.8 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '5.8', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function restaurant_premium_setup() {
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain( 'restaurant-premium', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add custom image sizes
    add_image_size( 'restaurant-premium-hero', 1920, 800, true );
    add_image_size( 'restaurant-premium-card', 600, 400, true );
    add_image_size( 'restaurant-premium-menu', 400, 300, true );

    /*
     * Register navigation menus.
     */
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'restaurant-premium' ),
            'footer'  => esc_html__( 'Footer Menu', 'restaurant-premium' ),
        )
    );

    /*
     * Switch default core markup to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    /*
     * Add support for core custom logo.
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 300,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for custom background.
     */
    add_theme_support(
        'custom-background',
        apply_filters(
            'restaurant_premium_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom line height.
    add_theme_support( 'custom-line-height' );

    // Add support for custom spacing.
    add_theme_support( 'custom-spacing' );

    // Add support for custom color scheme.
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => esc_html__( 'Primary Gold', 'restaurant-premium' ),
                'slug'  => 'primary-gold',
                'color' => '#d4af37',
            ),
            array(
                'name'  => esc_html__( 'Dark Gray', 'restaurant-premium' ),
                'slug'  => 'dark-gray',
                'color' => '#2c2c2c',
            ),
            array(
                'name'  => esc_html__( 'Light Background', 'restaurant-premium' ),
                'slug'  => 'light-bg',
                'color' => '#f8f8f8',
            ),
        )
    );
}
add_action( 'after_setup_theme', 'restaurant_premium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function restaurant_premium_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'restaurant_premium_content_width', 1200 );
}
add_action( 'after_setup_theme', 'restaurant_premium_content_width', 0 );

/**
 * Register widget areas.
 */
function restaurant_premium_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'restaurant-premium' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'restaurant-premium' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Area 1', 'restaurant-premium' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'restaurant-premium' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Area 2', 'restaurant-premium' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'restaurant-premium' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Area 3', 'restaurant-premium' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'restaurant-premium' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'restaurant_premium_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function restaurant_premium_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style( 'restaurant-premium-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue navigation script
    wp_enqueue_script( 'restaurant-premium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), wp_get_theme()->get( 'Version' ), true );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'restaurant_premium_scripts' );

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
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types for Restaurant Features
 */
function restaurant_premium_register_post_types() {
    // Register Menu Items Post Type
    register_post_type( 'menu_item',
        array(
            'labels' => array(
                'name'               => __( 'Menu Items', 'restaurant-premium' ),
                'singular_name'      => __( 'Menu Item', 'restaurant-premium' ),
                'add_new'            => __( 'Add New', 'restaurant-premium' ),
                'add_new_item'       => __( 'Add New Menu Item', 'restaurant-premium' ),
                'edit_item'          => __( 'Edit Menu Item', 'restaurant-premium' ),
                'new_item'           => __( 'New Menu Item', 'restaurant-premium' ),
                'view_item'          => __( 'View Menu Item', 'restaurant-premium' ),
                'search_items'       => __( 'Search Menu Items', 'restaurant-premium' ),
                'not_found'          => __( 'No menu items found', 'restaurant-premium' ),
                'not_found_in_trash' => __( 'No menu items found in Trash', 'restaurant-premium' ),
            ),
            'public'       => true,
            'has_archive'  => true,
            'menu_icon'    => 'dashicons-food',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'rewrite'      => array( 'slug' => 'menu' ),
        )
    );

    // Register Testimonials Post Type
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name'               => __( 'Testimonials', 'restaurant-premium' ),
                'singular_name'      => __( 'Testimonial', 'restaurant-premium' ),
                'add_new'            => __( 'Add New', 'restaurant-premium' ),
                'add_new_item'       => __( 'Add New Testimonial', 'restaurant-premium' ),
                'edit_item'          => __( 'Edit Testimonial', 'restaurant-premium' ),
                'new_item'           => __( 'New Testimonial', 'restaurant-premium' ),
                'view_item'          => __( 'View Testimonial', 'restaurant-premium' ),
                'search_items'       => __( 'Search Testimonials', 'restaurant-premium' ),
                'not_found'          => __( 'No testimonials found', 'restaurant-premium' ),
                'not_found_in_trash' => __( 'No testimonials found in Trash', 'restaurant-premium' ),
            ),
            'public'       => true,
            'has_archive'  => true,
            'menu_icon'    => 'dashicons-testimonial',
            'supports'     => array( 'title', 'editor', 'thumbnail' ),
            'rewrite'      => array( 'slug' => 'testimonials' ),
        )
    );
}
add_action( 'init', 'restaurant_premium_register_post_types' );

/**
 * Register Taxonomies for Menu Items
 */
function restaurant_premium_register_taxonomies() {
    register_taxonomy(
        'menu_category',
        'menu_item',
        array(
            'label'        => __( 'Menu Categories', 'restaurant-premium' ),
            'rewrite'      => array( 'slug' => 'menu-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'restaurant_premium_register_taxonomies' );

/**
 * Add meta box for menu item price
 */
function restaurant_premium_add_menu_meta_boxes() {
    add_meta_box(
        'menu_item_price',
        __( 'Price', 'restaurant-premium' ),
        'restaurant_premium_menu_price_callback',
        'menu_item',
        'side',
        'default'
    );
}
add_action( 'add_meta_boxes', 'restaurant_premium_add_menu_meta_boxes' );

/**
 * Meta box callback function
 */
function restaurant_premium_menu_price_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'restaurant_premium_menu_price_nonce' );
    $price = get_post_meta( $post->ID, '_menu_item_price', true );
    ?>
    <p>
        <label for="menu-item-price"><?php _e( 'Price:', 'restaurant-premium' ); ?></label><br>
        <input type="text" id="menu-item-price" name="menu_item_price" value="<?php echo esc_attr( $price ); ?>" placeholder="€9.99" style="width: 100%;">
    </p>
    <?php
}

/**
 * Save menu item price meta
 */
function restaurant_premium_save_menu_price( $post_id ) {
    if ( ! isset( $_POST['restaurant_premium_menu_price_nonce'] ) ) {
        return $post_id;
    }

    $nonce = $_POST['restaurant_premium_menu_price_nonce'];

    if ( ! wp_verify_nonce( $nonce, basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( isset( $_POST['post_type'] ) && 'menu_item' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
    }

    if ( ! isset( $_POST['menu_item_price'] ) ) {
        return $post_id;
    }

    $price = sanitize_text_field( $_POST['menu_item_price'] );
    update_post_meta( $post_id, '_menu_item_price', $price );
}
add_action( 'save_post', 'restaurant_premium_save_menu_price' );
