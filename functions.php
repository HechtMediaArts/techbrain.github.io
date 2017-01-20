<?php

/* =============================================================================
 Techbrain.de Theme NEU
============================================================================= */

if ( ! function_exists( 'graphy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function graphy_setup() {

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 720;
	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Graphy, use a find and replace
	 * to change 'graphy' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'graphy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1100, 519 );
    add_image_size( 'thumb-small', 160, 160, true );
    add_image_size( 'thumb-standard', 320, 320, true );
    add_image_size( 'thumb-medium', 520, 245, true );
    add_image_size( 'thumb-large', 720, 340, true );
    add_image_size( 'graphy-post-thumbnail-medium', 482, 300, true );
	add_image_size( 'graphy-post-thumbnail-small', 80, 60, true );
	add_image_size( 'graphy-page-thumbnail', 1260, 350, true );

	// This theme uses wp_nav_menu() in three locations.
	register_nav_menus( array(
		'primary'       => esc_html__( 'Main Navigation', 'graphy' ),
		'header-social' => esc_html__( 'Header Social Links', 'graphy' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'audio', 'video'
	) );

	// Setup the WordPress core custom header feature.
	add_theme_support( 'custom-header', apply_filters( 'graphy_custom_header_args', array(
		'default-image' => '',
		'width'         => 1260,
		'height'        => 350,
		'flex-height'   => false,
		'header-text'   => false,
	) ) );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'normalize.css', 'style.css', 'css/editor-style.css', str_replace( ',', '%2C', graphy_fonts_url() ) ) );
}
endif; // graphy_setup
add_action( 'after_setup_theme', 'graphy_setup' );


function tb_register_my_menu() {
  register_nav_menu('kategorie',__( 'Kategorien' ));
}
add_action( 'init', 'tb_register_my_menu' );


/**
 * Adjust content_width value for full width template.
 */
function graphy_content_width() {
	if ( is_page_template( 'page_fullwidth.php' ) ) {
		global $content_width;
		$content_width = 1200;
	}
}
add_action( 'template_redirect', 'graphy_content_width' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function graphy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'graphy' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'This is the normal sidebar. If you do not use this sidebar, the page will be a one-column design.', 'graphy' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'graphy' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'From left to right there are 4 sequential footer widget areas, and the width is auto-adjusted based on how many you use. If you do not use a footer widget, nothing will be displayed.', 'graphy' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'graphy' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'graphy' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'graphy' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( '404-Seite', 'graphy' ),
		'id'            => 'errorpage',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );    
}
add_action( 'widgets_init', 'graphy_widgets_init' );



if ( ! function_exists( 'graphy_fonts_url' ) ) :
/**
 * Register Google Fonts.
 *
 * This function is based on code from Twenty Fifteen.
 * https://wordpress.org/themes/twentyfifteen/
 */
function graphy_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Source Serif Pro, translate this to 'off'. Do not translate into your own language.
	 */
	$source_serif_pro = esc_html_x( 'on', 'Source Serif Pro font: on or off', 'graphy' );
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lora, translate this to 'off'. Do not translate into your own language.
	 */
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'graphy' );
	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = esc_html_x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'graphy' );

	if ( 'off' !== $source_serif_pro ) {
		$fonts[] = 'Source Serif Pro:400';
	}
	if ( 'off' !== $lora ) {
		$fonts[] = 'Lora:400,400italic,700';
	}

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;



/**
 * Enqueue scripts and styles.
 */
function graphy_scripts() {
	//wp_enqueue_style( 'graphy-font', esc_url( graphy_fonts_url() ), array(), null );
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css');
	//wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',  array(), '4.1.1' );

	wp_enqueue_script( 'graphy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20160525', true );
	wp_enqueue_script( 'graphy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160525', true );
	wp_enqueue_script( 'double-tap-to-go', get_template_directory_uri() . '/js/doubletaptogo.min.js', array( 'jquery' ), '1.0.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'graphy-functions', get_template_directory_uri() . '/js/functions.js', array(), '2.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'graphy_scripts' );


/**
 * Add customizer style to the header.
 */
function graphy_customizer_css() {
	?>
	<style type="text/css">
		/* Colors */
		<?php if ( $graphy_link_color = get_theme_mod( 'graphy_link_color' ) ) : ?>
		.entry-content a, .entry-summary a, .page-content a, .author-profile-description a, .comment-content a, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a {
			color: <?php echo esc_attr( $graphy_link_color ); ?>;
		}
		<?php endif; ?>
		<?php if ( $graphy_link_hover_color = get_theme_mod( 'graphy_link_hover_color' ) ) : ?>
		.main-navigation a:hover, .entry-content a:hover, .entry-summary a:hover, .page-content a:hover, .author-profile-description a:hover, .comment-content a:hover {
			color: <?php echo esc_attr( $graphy_link_hover_color ); ?>;
		}
		<?php endif; ?>

		<?php if ( get_theme_mod( 'graphy_logo' ) ) : ?>
		/* Logo */
			.site-logo {
				<?php if ( $graphy_logo_margin_top = get_theme_mod( 'graphy_top_margin' ) ) : ?>
				margin-top: <?php echo esc_attr( $graphy_logo_margin_top ); ?>px;
				<?php endif; ?>
				<?php if ( $graphy_logo_margin_bottom = get_theme_mod( 'graphy_bottom_margin' ) ) : ?>
				margin-bottom: <?php echo esc_attr( $graphy_logo_margin_bottom ); ?>px;
				<?php endif; ?>
			}
			<?php if ( get_theme_mod( 'graphy_add_border_radius' ) ) : ?>
				.site-logo img {
					border-radius: 50%;
				}
			<?php endif; ?>
		<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'graphy_customizer_css' );

/**
 * Add custom classes to the body.
 */
function graphy_body_classes( $classes ) {
	if ( is_page_template( 'fullwidth.php' ) ) {
		$classes[] = 'full-width';
	} elseif ( ! is_active_sidebar( 'sidebar' ) || is_page_template( 'nosidebar.php' ) || is_404() ) {
		$classes[] = 'no-sidebar';  
	} else {
		$classes[] = 'has-sidebar';
	}

	$footer_widgets = 0;
	$footer_widgets_max = 4;
	for( $i = 1; $i <= $footer_widgets_max; $i++ ) {
		if ( is_active_sidebar( 'footer-' . $i ) ) {
				$footer_widgets++;
		}
	}
	$classes[] = 'footer-' . $footer_widgets;

	if ( get_option( 'show_avatars' ) ) {
		$classes[] = 'has-avatars';
	}

	return $classes;
}
add_filter( 'body_class', 'graphy_body_classes' );

/**
 * Add social links on profile
 */
function graphy_modify_user_contact_methods( $user_contact ) {
	$user_contact['social_1'] = esc_html__( 'Social Link 1', 'graphy' );
	$user_contact['social_2'] = esc_html__( 'Social Link 2', 'graphy' );
	$user_contact['social_3'] = esc_html__( 'Social Link 3', 'graphy' );
	$user_contact['social_4'] = esc_html__( 'Social Link 4', 'graphy' );
	$user_contact['social_5'] = esc_html__( 'Social Link 5', 'graphy' );
	$user_contact['social_6'] = esc_html__( 'Social Link 6', 'graphy' );
	$user_contact['social_7'] = esc_html__( 'Social Link 7', 'graphy' );

	return $user_contact;
}
add_filter( 'user_contactmethods', 'graphy_modify_user_contact_methods' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom widgets for this theme.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

    // Declare WooCommerce support
    add_theme_support( 'woocommerce' );


 /* =============================================================================
 Eigene Funktionen
============================================================================= */


//emoji aus dem header entfernen
function disable_emoji_dequeue_script() {
    wp_dequeue_script( 'emoji' );
}
add_action( 'wp_print_scripts', 'disable_emoji_dequeue_script', 100 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Keine eigenen Pingbacks zulassen
 * 
 */
function democratic_no_self_ping( &$links ) {
  $home = get_option( 'home' );
  foreach ( $links as $l => $link )
  if ( 0 === strpos( $link, $home ) )
  unset($links[$l]);
}

add_action( 'pre_ping', 'democratic_no_self_ping' );



/**
 * Sorgt für responsive Videos, auch fuer Vimeo
 * 
 * 
 */
function democratic_wrap_oembed( $html ){
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html ); // Strip width and height #1

  return'<div class="embed-responsive embed-responsive-16by9">'.$html.'</div>'; // Wrap in div element and return #3 and #4

}
add_filter( 'embed_oembed_html','democratic_wrap_oembed',10,1);


/**
 * Entfernen der XML-RPC Schnittstelle aus dem HTML-Header der Website
 */
add_filter( 'wp_headers', 'FastWP_remove_x_pingback' );
 function FastWP_remove_x_pingback( $headers )
 {
 unset( $headers['X-Pingback'] );
 return $headers;
 }


/**
 * Stop Heartbeat Schnittstelle, ausser bei Beiträgen
 */ 
add_action('init', 'stop_heartbeat', 1);
function stop_heartbeat()
	{
	global $pagenow;
	if ($pagenow != 'post.php' && $pagenow != 'post-new.php') wp_deregister_script('heartbeat');
	}

/**
 * Befreit den Header von unnötigen Einträgen
 */ 
add_action('init', 'remheadlink');
function remheadlink()
	{
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	//remove_action('wp_head', 'feed_links', 2);
	//remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_head', 'wp_shortlink_header', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	}


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* =============================================================================
 Post Thumbnails in Feed
============================================================================= */

function tb_featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'large', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'tb_featuredtoRSS');
add_filter('the_content_feed', 'tb_featuredtoRSS');



 /* =============================================================================
 Dynamische Copyright Daten im Footer
============================================================================= */

// Dynamische Copyright Daten im Footer ausgeben. © Von Jahr bis Jahr...
// Im Theme wird die Funktion ausgegeben mit: 
/* <?php echo tb_dynamic_copyright(); ?> - Diesen Tag dorthin einfügen, wo das Copyright erscheinen soll */
function dw_dynamic_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; 2014";
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= ' - ' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
}


/**
 * Clean wp-caption Output ohne die 10px, die WordPress hinzufügt
 * 
 */
function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
        'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';
	$attributes .= ' style="width: ' . esc_attr( $attr['width'] ) . 'px"';

	/* Open the caption <div>. */
	$output = '<div' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<p class="wp-caption-text"><span class="fa fw fa-camera fa-1x"></span>' . $attr['caption'] . '</p>';

	/* Close the caption </div>. */
	$output .= '</div>';

	/* Return the formatted, clean caption. */
	return $output;
}
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );


/**
 * Script und Styles in den Footer verfrachten
 * @author Andreas Hecht
 */
function ah_footer_enqueue_scripts() {
   remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('wp_enqueue_scripts', 'ah_footer_enqueue_scripts');  

 /* =============================================================================
 4 - Remove de:comments  und mashshare stylesheets - print hard in Footer
============================================================================= */

// Remove de:comments und Mashshare Styles - print hard in Footer
add_action('wp_enqueue_scripts', 'mytheme_dequeue_css_from_plugins', 100);
function mytheme_dequeue_css_from_plugins()  {
    wp_dequeue_style( "genericons" );
    wp_dequeue_style( "banana_content" );
    wp_dequeue_style( "sq_frontend.css" );    
    //wp_dequeue_style( "normalize" );
}


/*  Related posts
/* ------------------------------------ */
if ( ! function_exists( 'hu_related_posts' ) ) {

  function hu_related_posts() {
    wp_reset_postdata();
    global $post;

    // Define shared post arguments
    $args = array(
      'no_found_rows'       => true,
      'update_post_meta_cache'  => false,
      'update_post_term_cache'  => false,
      'ignore_sticky_posts'   => 1,
      'orderby'         => 'rand',
      'post__not_in'        => array($post->ID),
      'posts_per_page'      => 3
    );
    // Related by categories
      $cats = get_post_meta($post->ID, 'related-cat', true);
      if ( !$cats ) {
        $cats = wp_get_post_categories($post->ID, array('fields'=>'ids'));
        $args['category__in'] = $cats;
      } else {
        $args['cat'] = $cats;
      }
    $query = !isset($break)?new WP_Query($args):new WP_Query;
    return $query;
    }
}

/**
 * Wir erstellen eigene Buttons für den Tiny MCE Editor
 * @author Andreas Hecht
 * @param  [[Type]] $buttons [[Description]]
 * @return [[Type]] [[Description]]
 */
function ah_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'ah_mce_buttons_2');


/*
* Callback Funktion für den MCE-Editor
*/

function ah_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
		array(  
			'title' => 'Blauer Button',  
			'block' => 'a',  
			'classes' => 'blue-button',
			'wrapper' => false,
		),  
		array(  
			'title' => 'Roter Button',  
			'block' => 'a',  
			'classes' => 'red-button',
			'wrapper' => false,
		),
		array(  
			'title' => 'Grüner Button',  
			'block' => 'a',  
			'classes' => 'green-button',
			'wrapper' => false,
		),
		array(  
			'title' => 'Graue Box',  
			'block' => 'p',  
			'classes' => 'zilla-alert grey',
			'wrapper' => false,
		),         
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'ah_mce_before_init_insert_formats' ); 


/**
 * Newsletter INCONTENT - Wysija
 * @author Andreas Hecht
 */
function tb_content_newsletter() {
?>
<div class="incontent">
    <h4>Gefällt Dir dieser Beitrag?</h4>
    <p class="incontent-news">Melde Dich für meine Blog-Updates an und verpasse keinen Artikel. Ich schicke Dir ein <span class="upper">kostenloses</span> und nützliches E-Book als Dankeschön dafür.
    </p>
    <div id="msg-form-wysija-html57b4ad33b5966-1" class="wysija-msg ajax"></div>
    <form id="form-wysija-html57b4ad33b5966-1" method="post" action="#wysija" class="widget_wysija html_wysija">
        <div class="mc-field-group">
            <input type="text" name="wysija[user][firstname]" class="wysija-input " title="Wie darf ich Dich ansprechen?" placeholder="Wie darf ich Dich ansprechen?" value="">
        </div>
        <span class="abs-req"> 
<input type="text" name="wysija[user][abs][firstname]" class="wysija-input validated[abs][firstname]" value="">
</span>
        <div class="mc-field-group last">
            <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Deine E-Mail Adresse" placeholder="Deine E-Mail Adresse" value="">
        </div>
        <span class="abs-req"> 
<input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value=""> 
</span>
       <div class="clear"></div>
        <center><input class="wysija-submit wysija-submit-field" type="submit" value="Jetzt eintragen!" id="subbutton"></center>
        <input type="hidden" name="form_id" value="1">
        <input type="hidden" name="action" value="save">
        <input type="hidden" name="controller" value="subscribers">
        <input type="hidden" value="1" name="wysija-page">
        <input type="hidden" name="wysija[user_list][list_ids]" value="1">
    </form>
</div>
<?php
}


 /* =============================================================================
 Der Shortcode für die Google Custom Search
============================================================================= */

function google_custom_search_tb( $atts ) {
	return "
		<div class=\"searchresultscontainer gcs\">
			<h2>Deine Suchergebnisse für: <mark>".htmlentities($_GET['q'])."</mark></h2>
<script>
  (function() {
    var cx = '001086175777875378546:mznt3glqa3i';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
</div>
";
}
add_shortcode('google_custom_search_tb', 'google_custom_search_tb');


/**
* Konstante genutzt für einige Funktionen
*/
define('KOPA_DOMAIN', 'democraticpost');

function kopa_get_domain() {
    return constant('KOPA_DOMAIN');
}

/**
 * Füge EPUBS der Mediathek hinzu
 * @author Andreas Hecht
 * @param  [[Type]] $mimes [[Description]]
 * @return [[Type]] [[Description]]
 */
function tb_addUploadMimes($mimes) {

$mimes = array_merge($mimes, array(

'epub|mobi' => 'application/octet-stream'

));
    return $mimes;
}
add_filter('upload_mimes', 'tb_addUploadMimes');

/**
 * MOBILE: Scripts und Styles in den Footer bringen
 * @author Andreas Hecht
 */
function democratic_footer_enqueue_scripts() {
    if ( wp_is_mobile() ) {
   remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_styles');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    }
}
add_action('wp_enqueue_scripts', 'democratic_footer_enqueue_scripts');

function tb_dequeue_scripts() {
    if( wp_is_mobile() ) {
    wp_dequeue_script( 'gonzales' );
    wp_dequeue_script( 'devicepx' );
    }
}
add_action( 'wp_print_scripts', 'tb_dequeue_scripts', 100);



/**
 * Zeigt eine Kategorie-Liste mit den RSS-Feeds an
 * @author Andreas Hecht
 * @return [[Type]] [[Description]]
 */
function tb_categories_with_feed() { 
	$args = array(
		'orderby' => 'name',
		'feed' => 'RSS', 
		'echo' => false, 
		'title_li'     => '',
	); 
	$string .= '<ul>';
	$string .= wp_list_categories($args); 
	$string .= '</ul>'; 

	return $string; 

}
// add shortcode
add_shortcode('categories-feed', 'tb_categories_with_feed'); 
// Add filter to execute shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');


/* =============================================================================
 Jetpack Open Graph Tags abschalten => wpSEO
============================================================================= */
-add_filter('jetpack_enable_opengraph', '__return_false', 99);
+add_filter('jetpack_enable_opengraph', '__return_false');
+add_filter('jetpack_enable_open_graph', '__return_false');

/**
 * Automatische Versionierung der Dateinamen
 * @param  [[Type]] $file [[Description]]
 * @return [[Type]] [[Description]]
 */
function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

/**
 * Remove Query Strings
 * @author Andreas Hecht
 * @param  [[Type]] $src [[Description]]
 * @return [[Type]] [[Description]]
 */
function evolution_remove_wp_ver_css_js( $src ) {

    if ( strpos( $src, 'ver=' ) )

        $src = remove_query_arg( 'ver', $src );

    return $src;
}
add_filter( 'style_loader_src', 'evolution_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'evolution_remove_wp_ver_css_js', 9999 );


 /* =============================================================================
 4 - Remove de:comments  und mashshare stylesheets - print hard in Footer
============================================================================= */

// Remove de:comments und Mashshare Styles - print hard in Footer
add_action('wp_enqueue_scripts', 'tbneu_dequeue_css_from_plugins', 100);
function tbneu_dequeue_css_from_plugins()  {
    wp_dequeue_style( "decomments" );
    wp_dequeue_style( "mashsb-styles" ); 
    wp_dequeue_style( "lashare-styles" ); 
    wp_dequeue_style( "mashnet-styles" ); 
    wp_dequeue_style( "hueman-main" );  
    wp_dequeue_style( "theme-stylesheet" );
    wp_dequeue_style( "dashicons" );
    wp_dequeue_style( "thickbox" );
    wp_dequeue_style( "cookie-notice-front" ); 
    wp_dequeue_style( "yoast-seo-adminbar" ); 
    wp_dequeue_style( "wpel-style" );
    wp_dequeue_style( "tooltipstercss" );
    wp_dequeue_style( "tooltipstershadowcss" );
    wp_dequeue_style( "font-awesome" );
    wp_dequeue_style( "colorboxcss" );
    wp_dequeue_style( "dashicons-css" );
    wp_dequeue_style( "wp-pointer" );
    wp_dequeue_style( "validate-engine-css" );
    wp_dequeue_style( "bcct_style" );  
    wp_dequeue_style( "jetpack-top-posts-widget" );
    wp_dequeue_style( 'hueman-main-style' );
    wp_dequeue_style( 'theme-stylesheet' );
    wp_dequeue_style( 'hueman-font-awesome' );
    wp_dequeue_style( 'contact-form-7' );
    wp_dequeue_style( 'prism-css' );
}


  wp_deregister_style('sq_frontend.css-css');


//Defer loading Videos
function tb_add_video_load( $content ) { 
    if( is_feed() || is_preview() || ( function_exists( 'is_mobile' ) && is_mobile() ) ) return $content; if ( false !== strpos( $content, 'data-src' ) ) return $content; $placeholder_image = ('data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='); $content = preg_replace( '#<iframe([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#', sprintf( '<iframe${1}src="%s" data-src="${2}"${3}><noscript><iframe${1}src="${2}"${3}></noscript>', $placeholder_image ), $content ); return $content; } 

//add_filter( 'the_content', 'tb_add_video_load' );

/**
 * Defer Loading for Videos - the JavaScript for the Action
 * @param  [[Type]] $content [[Description]]
 * @return [[Type]] [[Description]]
 */  
function tb_defer_video_load() {
    if ( is_single() || is_page() ) {
?>
<!-- Defer Videos for Performance -->          
<script>function init(){var videoDefer=document.getElementsByTagName('iframe');for(var i=0;i<videoDefer.length;i++){if(videoDefer[i].getAttribute('data-src')){videoDefer[i].setAttribute('src',videoDefer[i].getAttribute('data-src'));}}}window.onload=init;</script>
<!-- END Defer Videos -->
<?php  
    }
}
//add_action( 'wp_footer', 'tb_defer_video_load');

 /* =============================================================================
 4 - Disable all Jetpack CSS
============================================================================= */

// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

// Then, remove each CSS file, one at a time
function jeherve_remove_all_jp_css() {
  wp_deregister_style( 'AtD_style' ); // After the Deadline
  wp_deregister_style( 'jetpack_likes' ); // Likes
  wp_deregister_style( 'jetpack_related-posts' ); //Related Posts
  wp_deregister_style( 'jetpack-carousel' ); // Carousel
  wp_deregister_style( 'grunion.css' ); // Grunion contact form
  wp_deregister_style( 'the-neverending-homepage' ); // Infinite Scroll
  wp_deregister_style( 'infinity-twentyten' ); // Infinite Scroll - Twentyten Theme
  wp_deregister_style( 'infinity-twentyeleven' ); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style( 'infinity-twentytwelve' ); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style( 'noticons' ); // Notes
  wp_deregister_style( 'post-by-email' ); // Post by Email
  wp_deregister_style( 'publicize' ); // Publicize
  wp_deregister_style( 'sharedaddy' ); // Sharedaddy
  wp_deregister_style( 'sharing' ); // Sharedaddy Sharing
  wp_deregister_style( 'stats_reports_css' ); // Stats
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
  wp_deregister_style( 'jetpack-slideshow' ); // Slideshows
  wp_deregister_style( 'presentations' ); // Presentation shortcode
  wp_deregister_style( 'jetpack-subscriptions' ); // Subscriptions
  wp_deregister_style( 'tiled-gallery' ); // Tiled Galleries
  wp_deregister_style( 'widget-conditions' ); // Widget Visibility
  wp_deregister_style( 'jetpack_display_posts_widget' ); // Display Posts Widget
  wp_deregister_style( 'gravatar-profile-widget' ); // Gravatar Widget 
  wp_deregister_style( 'jetpack-top-posts-widget' ); // Top Posts widget
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
}
add_action('wp_print_styles', 'jeherve_remove_all_jp_css' );

function dp_dequeue_unused_styles() { 

    wp_dequeue_style( "banana_content" ); 
    wp_dequeue_style( "jetpack-top-posts-widget" );
}
add_action('wp_enqueue_scripts', 'dp_dequeue_unused_styles' );



 /* =============================================================================
 Den WordPress-Feed mit Feedburner ersetzen.
============================================================================= */

function tb_custom_rss_feed( $output, $feed ) {
    
  if ( strpos( $output, 'comments' ) )
    return $output;
    /* Link mit deinem persönlichen Feed-Link ersetzen */
    return esc_url( 'http://feeds.feedburner.com/techbrain_de' ); }

add_action( 'feed_link', 'tb_custom_rss_feed', 10, 2 );

 /* =============================================================================
 Den ersten Absatz anders stylen
============================================================================= */

// automatically highlight first paragraph of post content
function wcs_first_paragraph_highlight( $content ) {
    return preg_replace( '/<p([^>]+)?>/', '<p$1 class="opener">', $content, 1 );
}
add_filter( 'the_content', 'wcs_first_paragraph_highlight' );


add_action('wp_enqueue_scripts', create_function(null, "wp_dequeue_script('devicepx');"), 20);
add_action('wp_enqueue_scripts', create_function(null, "wp_dequeue_script('jquery.cycle');"), 20);


/**
 * Sidebar Widget Newsletter - Wysija
 * @author Andreas Hecht
 */
function tb_newsletter_widget() {
?>
<div id="enews-ext-2" class="widget enews-widget">
<div class="enews">
<div class="widgettitle">Sichere Dir meine besten Tipps, um erfolgreicher zu bloggen und besser zu schreiben.</div>
<p class="widgetdesc">Als Dank bekommst Du gratis mein E-Book »Garantiert erfolgreiche Blogs« dazu. Lass Dir beides nicht entgehen.</p>
<div id="msg-form-wysija-html57b4ad33b5966-1" class="wysija-msg ajax"></div>
<form id="form-wysija-html57b4ad33b5966-1" method="post" action="#wysija" class="widget_wysija html_wysija">
    <input type="text" name="wysija[user][firstname]" class="wysija-input " title="Dein Vorname" placeholder="Dein Vorname" value="" />  
    <span class="abs-req">
        <input type="text" name="wysija[user][abs][firstname]" class="wysija-input validated[abs][firstname]" value="" />
    </span>							
    	<input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Deine E-Mail Adresse" placeholder="Deine E-Mail Adresse" value="" />
    <span class="abs-req">
        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
    </span>
<div class="optin-button">    
<input class="wysija-submit wysija-submit-field" type="submit" value="Schick mir die Tipps!" id="subbutton" />
    </div>   
    <input type="hidden" name="form_id" value="1" />
    <input type="hidden" name="action" value="save" />
    <input type="hidden" name="controller" value="subscribers" />
    <input type="hidden" value="1" name="wysija-page" />  
<input type="hidden" name="wysija[user_list][list_ids]" value="1" />
</form>
<p class="nomargins">100% Datenschutz. Ich hüte Deine E-Mail-Adresse wie einen Schatz.</p>
</div>
</div>
<?php } 

/**
 * Stellt Buttons für den Druck und das Kommentieren bereit.
 * @author Andreas Hecht
 */
function tb_print_comment() {
?>
<div id="printcomment">
<div class="printlink">
<a class="druck" href="javascript:window.print()" title="Beitrag ausdrucken">Beitrag ausdrucken</a>
 </div>  
 <div class="printlink">
<a class="kommentar" href="#comments" title="Beitrag kommentieren">Deine Meinung hinterlassen</a>
</div>
</div>
<div class="clear"></div> 
<?php }


function tb_share_buttons() {
?>
<div class="share-buttons">
<div class="sharelink">
<a class="facebook social-tooltip" title="Bei Facebook empfehlen" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;t=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" rel="nofollow"><span>Teilen</span></a>
</div>
<div class="sharelink">
<a class="twitter social-tooltip" title="Bei Twitter empfehlen" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?> <?php echo urlencode(get_permalink($post->ID)); ?>" target="blank" rel="nofollow"><span>Twittern</span></a>
</div>
</div>
<div class="clear"></div>
<?php }

/**
 * Sidebar Widget E-Books WordPress Sicherheit und Online Marketing
 * @author Andreas Hecht
 */
function tb_show_ebooks() {
?>
<div id="text-4" class="widget widget_text">
    <div class="widget-title">WordPress Highspeed Websites</div>			
    <div class="textwidget">
    <a href="https://techbrain.de/wordpress-highspeed-websites/" title="Das ultimative Handbuch WordPress Highspeed Websites kaufen">
    <img class="avia_image " src="https://techbrain.de/wp-content/uploads/2016/09/wordpress-highspeed-cover-small-1.png" alt="E-Book WordPress Highspeed Websites" width="300" height="417">
    </a>
<div>
    <a class="m-button" href="https://techbrain.de/wordpress-highspeed-websites/">Mehr erfahren</a>
</div>
</div>
</div>
    
<div id="text-3" class="widget widget_text">
    <div class="widget-title">WordPress Sicherheit</div>			
    <div class="textwidget">
    <a href="https://techbrain.de/e-book-wordpress-sicherheit/" title="Das ultimative Handbuch zur WordPress Sicherheit kaufen">
    <img class="avia_image " src="https://techbrain.de/wp-content/uploads/2016/09/wordpress-sicherheit-cover-fuenf.png" alt="E-Book WordPress Sicherheit" width="300" height="479">
    </a>
<div>
    <a class="m-button" href="https://techbrain.de/e-book-wordpress-sicherheit/">Mehr erfahren</a>
</div>
</div>
</div>
<?php } 

/**
 * Social Widget mit Follow me Buttons
 * @author Andreas Hecht
 */
function tb_social_widget() {
?>
<!-- Social Networks -->      
<div id="democratic_social_follow-2" class="widget widget_text">
<div class="widget-title">Sei sozial und bleib am Ball</div>
 <div class="textwidget">
   <div class="social-buttons">
                <ul>
                    <li class="social-facebook"><a href="https://www.facebook.com/TechBrain-552504691587032" target="_blank" title="Like meine Facebook-Seite"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-twitter"><a href="https://twitter.com/AndreasHecht_HH" target="_blank" title="Folge mir auf Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-gplus"><a href="https://plus.google.com/+AndreasHecht" target="_blank" title="Folge mir auf Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li class="social-linkedin"><a href="https://www.linkedin.com/in/andreas-hecht-492b9a54" target="_blank" title="Folge mir auf LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="social-rss"><a href="https://feeds.feedburner.com/techbrain_de" target="_blank" title="Abonniere den RSS-Feed"><i class="fa fa-rss"></i></a></li>
               </ul>
    </div>
</div>
</div>
<!-- END Social Networks --> 
<?php }  

/**
 * Die nervige Squirrly Box auf neuen Beiträgen ausblenden
 * @author Andreas Hecht
 */
function tb_dont_show_squirrly_box() {
?>
<style>
    #sq_subscription {display: none !important;}
</style> 
<?php }
add_action( 'admin_head', 'tb_dont_show_squirrly_box' );