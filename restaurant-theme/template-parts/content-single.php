<?php
/**
 * Template part for displaying single posts
 *
 * @package Restaurant_Premium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                        <?php echo esc_html( get_the_date() ); ?>
                    </time>
                </span>
                <span class="byline">
                    <?php esc_html_e( 'by', 'restaurant-premium' ); ?>
                    <span class="author vcard">
                        <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php echo esc_html( get_the_author() ); ?>
                        </a>
                    </span>
                </span>
                <?php if ( has_category() ) : ?>
                    <span class="cat-links">
                        <?php esc_html_e( 'in', 'restaurant-premium' ); ?>
                        <?php the_category( ', ' ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
                    <span class="comments-link">
                        <?php comments_popup_link( esc_html__( 'Leave a comment', 'restaurant-premium' ), esc_html__( '1 Comment', 'restaurant-premium' ), esc_html__( '% Comments', 'restaurant-premium' ) ); ?>
                    </span>
                <?php endif; ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'restaurant-premium' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'restaurant-premium' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'restaurant-premium' ) );
        if ( $tags_list ) {
            printf( '<div class="tags-links"><strong>' . esc_html__( 'Tags:', 'restaurant-premium' ) . '</strong> %1$s</div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Edit <span class="screen-reader-text">%s</span>', 'restaurant-premium' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
