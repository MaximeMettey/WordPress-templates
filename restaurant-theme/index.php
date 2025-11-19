<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Restaurant_Premium
 */

get_header(); ?>

<main id="main" class="site-main">

    <?php if ( is_home() && ! is_front_page() ) : ?>
        <header class="page-header">
            <div class="container">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </div>
        </header>
    <?php endif; ?>

    <div class="container">
        <div class="content-wrapper">

            <?php if ( have_posts() ) : ?>

                <div class="posts-grid grid grid-2">

                    <?php
                    // Start the Loop
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;
                    ?>

                </div>

                <?php
                // Previous/next page navigation
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&laquo; Précédent', 'restaurant-premium' ),
                    'next_text' => __( 'Suivant &raquo;', 'restaurant-premium' ),
                ) );
                ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </div>
    </div>

</main>

<?php
get_sidebar();
get_footer();
