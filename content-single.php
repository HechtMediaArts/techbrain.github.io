<?php
/**
 * The template used for displaying single post.
 *
 * @package Graphy
 */
?>

<div class="post-full post-full-summary">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<?php graphy_category(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="share-top mashsb-stretched">
			<?php echo do_shortcode('[mashshare]'); ?>
			</div>
			<?php graphy_entry_meta(); ?>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
		</div><!-- .entry-header -->

		<div class="entry-content beitrag">
			<?php the_content(); ?>
			<?php echo tb_print_comment(); ?>
		</div><!-- .entry-content -->
        <div class="share-bottom mashsb-stretched">
        <?php echo do_shortcode('[mashshare]'); ?>
        </div>
        
        <?php// echo tb_content_newsletter(); ?>
        
        <?php get_template_part( 'content', 'ebooks' ); ?>
        
		<?php if ( get_the_tags() ) : ?>
		<div class="tags-links">
			<?php the_tags( '', esc_html__( ', ', 'graphy' ) ); ?>
		</div>
		<?php endif; // End if $the_tags ?>
		<?php graphy_author_profile(); ?>
        <?php get_template_part('inc/related-posts'); ?>
	</article><!-- #post-## -->
</div><!-- .post-full -->

<?php graphy_post_nav(); ?>

<?php if ( class_exists( 'Jetpack_RelatedPosts' ) ) : ?>
	<?php echo do_shortcode( '[jetpack-related-posts]' ); ?>
<?php endif; ?>
