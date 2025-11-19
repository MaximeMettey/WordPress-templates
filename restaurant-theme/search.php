<?php
/**
 * The template for displaying search results pages
 *
 * @package Restaurant_Premium
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="content-wrapper">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        printf(
                            /* translators: %s: search query. */
                            esc_html__( 'Search Results for: %s', 'restaurant-premium' ),
                            '<span>' . get_search_query() . '</span>'
                        );
                        ?>
                    </h1>
                </header><!-- .page-header -->

                <div class="posts-grid grid grid-2">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;
                    ?>

                </div>

                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 2,
                        'prev_text' => __( '&laquo; Précédent', 'restaurant-premium' ),
                        'next_text' => __( 'Suivant &raquo;', 'restaurant-premium' ),
                    )
                );
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
