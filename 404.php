<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Graphy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Fehler 404 - <?php esc_html_e( 'That page can&rsquo;t be found.', 'graphy' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content smallwidth">
					<p><?php esc_html_e( 'Entschuldige bitte, wir können die Seite nach der Du gesucht hast, leider nicht finden. Hast Du Dich vielleicht vertippt? Versuche gerne auch eine andere Variante des Suchwortes.', 'graphy' ); ?></p>

					<?php get_search_form(); ?>
					
            <h4>Du kannst auch eine der folgenden Optionen nutzen:</h4>
            <ul class="arrow-list">
                <?php if ( isset( $_SERVER['HTTP_REFERER'] ) ) { ?>
                    <li><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><?php _e( 'Zur letzten Seite zurückgehen', kopa_get_domain() ); ?></a></li>
                <?php } ?>
                <li><a href="<?php echo esc_url(home_url()); ?>"><?php _e( 'Gehe zur Startseite', kopa_get_domain() ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>"><?php _e( 'Nutze die Sitemap', kopa_get_domain() ); ?></a></li>
            </ul>
            <p>Falls Du mir eine E-Mail senden möchtest, kannst Du dieses gerne unter der folgenden E-Mail-Adresse tun: info - at - techbrain.de.</p>
            <h4>Oder lies Dir meine beliebtesten Beiträge durch:</h4>
            <?php if ( is_active_sidebar( 'errorpage' ) ) : ?>
                <div class="error-seite widget">
                <?php dynamic_sidebar( 'errorpage' ); ?>
                </div>
                <?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
