<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Restaurant_Premium
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'restaurant-premium' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php
                    $restaurant_premium_description = get_bloginfo( 'description', 'display' );
                    if ( $restaurant_premium_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $restaurant_premium_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-toggle-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'restaurant-premium' ); ?></span>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div><!-- .container -->
    </header><!-- #masthead -->

    <?php
    // Display hero section on front page
    if ( is_front_page() && ! is_paged() ) :
        $hero_image = get_theme_mod( 'hero_background_image' );
        $hero_title = get_theme_mod( 'hero_title', get_bloginfo( 'name' ) );
        $hero_subtitle = get_theme_mod( 'hero_subtitle', get_bloginfo( 'description' ) );
        $hero_button_text = get_theme_mod( 'hero_button_text', __( 'View Our Menu', 'restaurant-premium' ) );
        $hero_button_link = get_theme_mod( 'hero_button_link', '#menu' );

        if ( $hero_image || $hero_title || $hero_subtitle ) :
        ?>
        <section class="hero-section" style="<?php echo $hero_image ? 'background-image: url(' . esc_url( $hero_image ) . ');' : ''; ?>">
            <div class="hero-content">
                <?php if ( $hero_title ) : ?>
                    <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
                <?php endif; ?>

                <?php if ( $hero_subtitle ) : ?>
                    <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
                <?php endif; ?>

                <?php if ( $hero_button_text ) : ?>
                    <a href="<?php echo esc_url( $hero_button_link ); ?>" class="btn btn-primary">
                        <?php echo esc_html( $hero_button_text ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </section>
        <?php
        endif;
    endif;
    ?>
