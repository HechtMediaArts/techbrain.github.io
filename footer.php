<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Graphy
 */
?>

	</div><!-- #content -->
<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
	<footer id="colophon" class="site-footer">

		<?php get_sidebar( 'footer' ); ?>

		<div class="site-bottom">

			<div class="site-info">
				<div class="site-copyright">
					<?php echo dw_dynamic_copyright(); ?> Techbrain.de - Alle Rechte vorbehalten. | Hergestellt mit <span class="fa fa-heart"></span> und viel Kaffee in Hamburg
				</div><!-- .site-copyright -->
				<div class="site-credit">
					Website gehostet von: <a href="https://www.hostnet.de/1237-2-1-48.html" rel="nofollow">hostNET</a>  |  Website geschützt von <a href="https://techbrain.de/wordpress-sicherheit-dienstleistung/">© Effective WordPress Security</a>
				</div><!-- .site-credit -->
			</div><!-- .site-info -->

		</div><!-- .site-bottom -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Google Analytics modifiziert -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-78788233-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'displayFeaturesTask', null);
  ga('send', 'pageview');
 setTimeout("ga('send','event','Interessierte Nutzer','Mehr als 30 Sekunden')",30000);
</script>
<!-- Ende Google Analytics -->
<link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet" />
<?php if ( is_single() ) : ?>
<link rel='stylesheet'  href="<?=auto_version('/wp-content/plugins/better-click-to-tweet/assets/css/styles.css')?>" type='text/css' media='all' />
<link rel="stylesheet" href="<?=auto_version('/wp-content/themes/techbrain/css/prism.css')?>" type="text/css" media="screen" property='stylesheet' />
<link rel="stylesheet" href="<?=auto_version('/wp-content/themes/techbrain/css/print.css')?>" type="text/css" media="print" property='stylesheet' />
<?php endif; ?>
<?php if ( is_single() || is_page() || is_home() ) : ?>
<link rel='stylesheet'  href='<?=auto_version('/wp-content/themes/techbrain/css/mashshare.min.css')?>' type='text/css' media='all' />
<link rel='stylesheet' id='validate-engine-css-css' href='<?=auto_version('/wp-content/plugins/wysija-newsletters/css/validationEngine.jquery.css')?>' type='text/css' media='all' />
<script type="text/javascript" src="https://techbrain.de/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-de.js"></script>
<script type="text/javascript" src="https://techbrain.de/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js"></script>
<script type="text/javascript" src="https://techbrain.de/wp-content/plugins/wysija-newsletters/js/front-subscribers.js"></script>
<script type="text/javascript" src="https://techbrain.de/wp-content/themes/techbrain/js/prism.js"></script>
<script type="text/javascript">
                /* <![CDATA[ */
                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"https://techbrain.de/wp-admin/admin-ajax.php","loadingTrans":"Laden..."};
                /* ]]> */
</script>
<?php endif; ?>
</body> 
</html>
