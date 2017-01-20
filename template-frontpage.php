<?php
/**
 * Template Name: Full Width Frontpage
 * Description: A full width page template.
 *
 * @package Graphy
 */

get_header(); ?>

<div id="primary">
	<main id="main" class="site-main">

    <?php get_template_part('parts/front-content'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer( 'front' ); ?>
