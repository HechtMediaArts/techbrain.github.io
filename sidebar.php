<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Graphy
 */
if (   ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="sidebar-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="normal-sidebar widget-area">
	<?php echo tb_newsletter_widget(); ?>
	 <?php echo tb_social_widget(); ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- .normal-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
