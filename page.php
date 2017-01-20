<?php
/**
 * The template for displaying all pages.
 *
 * @package Graphy
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                <div class="entry-content">
                    <?php the_content(); ?>
                        <?php wp_link_pages( array(	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'graphy' ), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',  ) ); ?>
                </div>
                <!-- .entry-content -->
            </article>
            <!-- #post-## -->

            <?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>

                <?php endwhile; // End of the loop. ?>

    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
