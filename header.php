<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Graphy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="dns-prefetch" href="//s0.wp.com" />
<link rel="preconnect" href="//s0.wp.com" />
<link rel="dns-prefetch" href="//stats.wp.com" />
<link rel="preconnect" href="//stats.wp.com" />
<link rel="dns-prefetch" href="//opensource.keycdn.com" />
<link rel="preconnect" href="//opensource.keycdn.com" /> 
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="preconnect" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//static.xx.fbcdn.net" />
<link rel="preconnect" href="//static.xx.fbcdn.net" />
<link rel="dns-prefetch" href="//staticxx.facebook.com" />
<link rel="preconnect" href="//staticxx.facebook.com" />
<link rel="dns-prefetch" href="//connect.facebook.net" />
<link rel="preconnect" href="//connect.facebook.net" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'graphy' ); ?></a>

	<div id="masthead" class="site-header">
		<div class="site-branding">
		<div class="logo">
		<?php graphy_logo(); ?>
		</div>
		<?php graphy_site_title(); ?>
		<?php if ( ! get_theme_mod( 'graphy_hide_blogdescription' ) ) : ?>
			<div class="site-description"><?php bloginfo( 'description' ); ?></div>
		<?php endif; ?>
        <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle"><span class="menu-text"><?php esc_html_e( 'Menu', 'graphy' ); ?></span></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<?php if ( ! get_theme_mod( 'graphy_hide_search' ) ) : ?>
			<?php get_search_form(); ?>
			<?php endif; ?>
		</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
	</div><!-- #masthead -->

<?php if ( is_home() && get_header_image() ) : ?>
<div id="header-image" class="header-image">
<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
</div><!-- #header-image -->
<?php endif; ?>
<?php if ( is_page() && has_post_thumbnail() ) : ?>
<div id="header-image" class="header-image">
<?php the_post_thumbnail( 'graphy-page-thumbnail' ); ?>
</div><!-- #header-image -->
<?php else : ?>
<div class="margin-down"></div>		
<?php endif; ?>

<div id="content" class="site-content">
