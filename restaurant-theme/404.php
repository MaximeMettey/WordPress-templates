<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Restaurant_Premium
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="content-wrapper">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'restaurant-premium' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'restaurant-premium' ); ?></p>

                    <?php get_search_form(); ?>

                    <?php
                    the_widget(
                        'WP_Widget_Recent_Posts',
                        array(
                            'title'  => esc_html__( 'Recent Posts', 'restaurant-premium' ),
                            'number' => 5,
                        )
                    );
                    ?>

                    <div class="widget widget_categories">
                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'restaurant-premium' ); ?></h2>
                        <ul>
                            <?php
                            wp_list_categories(
                                array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                )
                            );
                            ?>
                        </ul>
                    </div><!-- .widget -->

                    <?php
                    /* translators: %1$s: smiley */
                    $restaurant_premium_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'restaurant-premium' ), convert_smilies( ':)' ) ) . '</p>';
                    the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$restaurant_premium_archive_content" );

                    the_widget( 'WP_Widget_Tag_Cloud' );
                    ?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </div>
    </div>
</main>

<?php
get_footer();
