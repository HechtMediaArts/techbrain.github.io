 <?php
/**
 * Frontpage Theme Techbrain.de 2.0
 */
?>
 <!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="dns-prefetch" href="//s0.wp.com" />
<link rel="preconnect" href="//s0.wp.com" />
<link rel="dns-prefetch" href="//stats.wp.com" />
<link rel="preconnect" href="//stats.wp.com" />
<link rel="dns-prefetch" href="//opensource.keycdn.com" />
<link rel="preconnect" href="//opensource.keycdn.com" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="preconnect" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="preconnect" href="//ajax.googleapis.com" />
<link rel="stylesheet" href="<?=auto_version('/wp-content/themes/techbrain/css/styles.css')?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=auto_version('/wp-content/themes/techbrain/landingpage.css')?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body class="landing">
<div class="wrapper header-wrap">

<ul class="menu">
    <li><a class="first red" href="https://techbrain.de/blog/" title="Lerne erfolgreich zu bloggen">Blog</a></li>
    <li><a href="https://techbrain.de/e-books-die-deinen-blog-erfolgreich-machen/" title="Meine E-Books für Deinen Erfolg">Meine E-Books</a></li>
    <li><a href="https://techbrain.de/wordpress-dienstleistungen/" title="Überblick über meine WordPress-Dienstleistungen">WordPress Service</a></li>
    <li><a href="https://techbrain.de/kontakt/" title="Jetzt Kontakt aufnehmen">Kontakt</a></li>
</ul>

<header id="landingpage">
 <p class="site-title">
 <a href="https://techbrain.de/" rel="home" title="Zurück zur Startseite von Techbrain.de">
 <img src="https://techbrain.de/wp-content/uploads/2016/10/logo.png" alt="Andreas Hecht - TechBrain.de">
 </a>
 </p>
</header>
</div><!-- End .wrapper -->
<div class="clear"></div>

<!-- Section eins - Vorstellung -->
<section class="none blue dark-padding bg">
<div class="wrapper">
 <div class="main-content">    
 <h1 class="white small intro">Journalist - Autor - WordPress Experte</h1>
 <h2 class="grey">Blog: Erfolgreicher bloggen und mehr Traffic generieren.</h2>
<div class="zilla-two-third">
    <p class="lightblue front"><strong>Hallo, ich bin Andreas Hecht</strong></p> 
<p class="lightblue front">Als Experte für WordPress bin ich der richtige und zuverlässige Partner für Ihr nächstes Projekt. Bloggern helfe ich, erfolgreicher zu schreiben, mehr Besucher auf den Blog zu bekommen und mit Ihrer Arbeit Geld zu verdienen.</p>
</div>
<div class="zilla-one-third zilla-column-last">
<img class="autor" src="https://techbrain.de/wp-content/uploads/2016/10/andreas-hecht.jpg" alt="Andreas Hecht" />
</div>    
</div><!-- end .main-content -->           
</div><!-- End .wrapper -->   
</section><!-- ENDE Section eins - Vorstellung -->

<!-- Section zwei - bekannt aus -->	
<section class="none">
<div class="wrapper">
 <div class="main-content block">
<h2 class="bekannt-aus"><i class="fa fa-check-square-o" aria-hidden="true"></i> Ich bin bekannt aus:</h2>
        <div class="bekannt inner">
            <div class="zilla-one-fourth right">
                <a href="https://www.drweb.de/magazin/author/andreas-hecht/" title="Alle Artikel von Andreas Hecht auf Drweb.de" target="_blank"><img src="https://techbrain.de/wp-content/uploads/2016/09/cropped-cropped-logo-2-1.png" alt="DrWeb.de" width="222" height="80" /></a>
            </div>
            <div class="zilla-one-fourth middle">
                <a href="https://wpbloggen.de/author/andreas-hecht/" title="Andreas Hecht schreibt auch für wpbloggen.de" target="_blank"><img src="https://techbrain.de/wp-content/uploads/2016/09/cropped-wpbloggen.png" alt="wpbloggen.de" width="90" height="90" /></a>
            </div>

            <div class="zilla-one-fourth middle">
                <a href="http://www.huffingtonpost.de/andreas-hecht/" title="Andreas Hecht schreibt für die Huffington Post Deutschland" target="_blank"><img src="https://techbrain.de/wp-content/uploads/2016/09/huffpost.png" alt="huffingtonpost.de" width="90" height="90" /></a>
            </div>

            <div class="zilla-one-fourth left zilla-column-last">
                <a href="http://www.noupe.com/author/andreas-hecht" title="Alle Artikel von Andreas Hecht auf noupe.com" target="_blank"><img src="https://techbrain.de/wp-content/uploads/2016/09/noupe-logo-mouse.png" alt="Noupe.com" width="234" height="80" /></a>
            </div>
        </div>
        <!-- end .bekannt.inner -->
        <div class="clear"></div>
</div><!-- end .main-content -->           
</div><!-- End .wrapper -->   
</section>
<!-- ENDE Section zwei - bekannt aus -->

<!-- Section drei - neue Blogbeiträge und Snippets -->	
<section class="none">
<div class="wrapper">	
<?php get_template_part('parts/new-posts'); ?>           
</div><!-- End .wrapper -->   
</section>
<!-- ENDE Section drei - neue Blogbeiträge -->


<!-- Section vier - WordPress Dienstleistungen -->	
<section class="none wp-service">
    <div class="wrapper">
        <div class="main-content service block">
            <h3><i class="fa fa-wordpress" aria-hidden="true"></i> Meine WordPress Dienstleistungen</h3>
            <div class="zilla-one-fourth">
                <div class="item">
                    <h4>Wartung</h4>
                    <p>Gern übernehme ich die technische Betreuung auch Ihrer Website und halte alles aktuell.</p>
                    <a href="https://techbrain.de/wordpress-wartung/" title="Ich übernehme gern die technische Betreuung Ihrer Website"><img class="round" src="https://techbrain.de/wp-content/uploads/2016/10/wartung-neu.jpg" alt="Das WordPress Wartungspaket" /></a>
                </div>
            </div>
            <div class="zilla-one-fourth">
                <div class="item">
                    <h4>Sicherheit</h4>
                    <p>Ich sichere Ihre WordPress-Website effektiv und nachhaltig ab. So haben Hacker jeine Chance.</p>
                    <a href="https://techbrain.de/wordpress-sicherheit-dienstleistung/" title="Ich sichere Ihre Website effektiv und nachhaltig ab."><img class="round" src="https://techbrain.de/wp-content/uploads/2016/10/sicherheit.jpg" alt="WordPress Sicherheit" /></a>
                </div>
            </div>
            <div class="zilla-one-fourth">
                <div class="item">
                    <h4>Webentwicklung</h4>
                    <p>Ich entwickle hochwertige, individuelle und schöne WordPress-Themes oder Child-Themes.</p>
                    <a href="https://techbrain.de/webdesign/" title="Ich Entwickle und designe Ihnen gerne ein Indiviuelles WordPress Theme oder Child-Theme."><img class="round" src="https://techbrain.de/wp-content/uploads/2016/10/webentwicklung.jpg" alt="WordPress Webdesign" /></a>
                </div>
            </div>
            <div class="zilla-one-fourth zilla-column-last">
                <div class="item">
                    <h4>Highspeed</h4>
                    <p>Ich mache Ihrer Website so richtig Beine. Ladezeiten im Halbsekundenbereich sind möglich.</p>
                    <a href="https://techbrain.de/wordpress-highspeed-service/" title="Ich mache Ihrer Website Beine. Ladezeiten bis in den Halbsekundenbereich sind problemlos möglich."><img class="round" src="https://techbrain.de/wp-content/uploads/2016/10/speed-2.jpg" alt="WordPress Highspeed" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End .wrapper -->
    <div class="clear"></div>
</section>
<!-- ENDE Section vier - WordPress Dienstleistungen  -->

<section class="none">
<div class="wrapper">	
<?php get_template_part('parts/new-snippets'); ?>           
</div><!-- End .wrapper -->   
</section>

<!-- Section fünf - die E-Books -->
<section class="blue dark all">
<div class="wrapper">
  <div class="main-content">
        <h3 class="ebooks"><i class="fa fa-check-square-o" aria-hidden="true"></i> Meine E-Books für Dich:</h3>
        <h4 class="ebooks">Einmal kaufen, immer aktuell. Mit 100% Geld-zurück-Garantie</h4>
        <div class="learninginner">
            <div class="zilla-one-third">
               <div class="image-inner">
                <a href="https://techbrain.de/e-book-wordpress-sicherheit/" title="Das ultimative Handbuch zur WordPress Sicherheit kaufen">
                    <img class="avia_image " src="https://techbrain.de/wp-content/uploads/2016/09/wordpress-sicherheit-cover-small-1.jpg" alt="E-Book WordPress Sicherheit" />
                </a>
                </div>
                <div class="e-learning-buttons">
                    <a class="m-button" href="https://techbrain.de/e-book-wordpress-sicherheit/">Mehr erfahren</a>
                </div>
            </div>
            <div class="zilla-one-third">
               <div class="image-inner">
                <a href="https://techbrain.de/e-book-online-marketing/" title="Das ultimative Handbuch Online Marketing - leicht gemacht kaufen">
                    <img class="avia_image " src="https://techbrain.de/wp-content/uploads/2016/09/online-marketing-cover-small.png" alt="E-Book WordPress Sicherheit" />
                </a>
                </div>
                <div class="e-learning-buttons">
                    <a class="m-button" href="https://techbrain.de/e-book-online-marketing/">Mehr erfahren</a>
                </div>
            </div>
            <div class="zilla-one-third zilla-column-last">
               <div class="image-inner">
                <a href="https://techbrain.de/wordpress-highspeed-websites/" title="Das ultimative Handbuch WordPress Highspeed Websites kaufen">
                    <img class="avia_image " src="https://techbrain.de/wp-content/uploads/2016/09/wordpress-highspeed-cover-small-1.png" alt="E-Book WordPress Sicherheit" />
                </a>
                </div>
                <div class="e-learning-buttons">
                    <a class="m-button" href="https://techbrain.de/wordpress-highspeed-websites/">Mehr erfahren</a>
                </div>
            </div>        
            </div>
           </div>
        </div>
    <div class="clear"></div>
</div>
</section>
<!-- ENDE Section fünf - die E-Books -->

<!-- Section sechs - Follow me -->
<section class="none">
<div class="wrapper">
  <div class="main-content block border">
<div id="be-social">
    <div class="soziale-optionen">
        <a href="https://www.facebook.com/TechBrain-552504691587032" target="_blank" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/AndreasHecht_HH" target="_blank" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://plus.google.com/+AndreasHecht" target="_blank" class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/andreas-hecht-492b9a54" target="_blank" class="li"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="http://feeds.feedburner.com/techbrain_de" target="_blank" class="rs"><i class="fa fa-rss" aria-hidden="true"></i></a>
    </div>
    <!-- end .soziale-optionen -->
    <span class="beitreten">Jetzt der Blogger-Community beitreten!</span>
</div>
<div class="clear"></div>
</div>
</div>
</section>
<!-- ENDE Section sechs - Follow me -->

<!-- Section sieben - Newsletter -->
<section class="abonnieren">
    <div class="wrapper">
        <div class="main-content block border">
            <h3>Meine Reise zu 100.000 Besuchern monatlich</h3>
            <p>Ich werde eine Menge lernen und das Gleiche wird für Dich gelten. Denn ich teile jeden guten Tipp mit Dir.</p>
            <div class="incontent">
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
                    <center>
                        <input class="wysija-submit wysija-submit-field" type="submit" value="Jetzt eintragen!" id="subbutton">
                    </center>
                    <input type="hidden" name="form_id" value="1">
                    <input type="hidden" name="action" value="save">
                    <input type="hidden" name="controller" value="subscribers">
                    <input type="hidden" value="1" name="wysija-page">
                    <input type="hidden" name="wysija[user_list][list_ids]" value="1">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ENDE Section sieben - Newsletter -->

<!-- Section acht - Hilfe -->
<section class="none last-section">
    <div class="wrapper">
       <div class="main-content block">
        <div class="help">
            <h3>Wobei darf ich Dich unterstützen <i class="fa fa-question-circle-o" aria-hidden="true"></i></h3>
            <div class="zilla-one-fourth">
                <a href="https://techbrain.de/kategorie/bloggen/" title="Hier lernst Du alles über das Bloggen"><i class="fa fa-university" aria-hidden="true"></i><span>Beim Bloggen</span></a>
            </div>
            <div class="zilla-one-fourth">
                <a href="https://techbrain.de/kategorie/schreiben/" title="Wie Du bessere Inhalte schreiben kannst"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Beim Schreiben</span></a>
            </div>
            <div class="zilla-one-fourth">
                <a href="https://techbrain.de/kategorie/wordpress/snippets/" title="Schau Dir das Archiv mit den WordPress-Snippets an"><i class="fa fa-wordpress" aria-hidden="true"></i><span>Mit WordPress Snippets</span></a>
            </div>
            <div class="zilla-one-fourth zilla-column-last">
                <a href="https://techbrain.de/wordpress-dienstleistungen/" title="Meine Dienstleistungen für Dich: Themes, WordPress Sicherheit, Aktualisieren usw."><i class="fa fa-wordpress fa-grey" aria-hidden="true"></i><span>Mit WordPress Dienstleistungen</span></a>
            </div>
            </div>
        </div>
    </div>
</section>				
<!-- ENDE Section acht - Hilfe -->

<div class="op-text-block" style="width:100%;text-align: left; border-top: 1px solid #ddd;">
<p style="text-align: center;"><a href="https://techbrain.de/impressum/" target="_blank">Impressum</a> | <a href="https://www.digistore24.com/signup/90715,94659,90151" target="_blank">Partnerprogramm</a>
</p>
</div>
<div class="full-width footer small-footer-text">
                        <div class="row">
                <div class="fixed-width">
                    <p class="footer-copyright">© Copyright 2014 - 2016 - Andreas Hecht - Techbrain.de - All Rights Reserved</p>                
                    </div>
            </div>
        </div>     
<!-- Google Analytics modifiziert -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://techbrain.de/analytics.js','ga');
  ga('create', 'UA-78788233-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'displayFeaturesTask', null);
  ga('send', 'pageview');
 setTimeout("ga('send','event','Interessierte Nutzer','Mehr als 30 Sekunden')",30000);
</script>
<!-- Ende Google Analytics -->
<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" type='text/css' media='all' property='stylesheet' />
</body>
</html>