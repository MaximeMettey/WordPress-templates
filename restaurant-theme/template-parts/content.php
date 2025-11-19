<?php
/**
 * Template part for displaying posts
 *
 * @package Restaurant_Premium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'restaurant-premium-card', array( 'class' => 'card-image' ) ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="card-content">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title card-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>

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
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content card-text">
            <?php
            if ( is_singular() ) :
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
            else :
                the_excerpt();
                ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Read More', 'restaurant-premium' ); ?>
                </a>
                <?php
            endif;
            ?>
        </div><!-- .entry-content -->

        <?php if ( is_singular() && 'post' === get_post_type() ) : ?>
            <footer class="entry-footer">
                <?php
                $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'restaurant-premium' ) );
                if ( $tags_list ) {
                    printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'restaurant-premium' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                }
                ?>
            </footer><!-- .entry-footer -->
        <?php endif; ?>

    </div><!-- .card-content -->

</article><!-- #post-<?php the_ID(); ?> -->
