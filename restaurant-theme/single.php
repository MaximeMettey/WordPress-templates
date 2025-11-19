<?php
/**
 * The template for displaying all single posts
 *
 * @package Restaurant_Premium
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="content-wrapper single-post">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'single' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                // Previous/next post navigation.
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'restaurant-premium' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'restaurant-premium' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );

            endwhile; // End of the loop.
            ?>

        </div>
    </div>
</main>

<?php
get_sidebar();
get_footer();
