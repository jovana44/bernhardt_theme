<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bernhardt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;500;600&family=Raleway:wght@400;500;600&display=swap"
        rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'bernhardt' ); ?></a>

        <header id="masthead" class="header">

            <div class="container">
                <div class="header__row">
                    <nav class="main-navigation">
                        <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'header-menu-left'
			            	)
			            );
			            ?>
                    </nav><!-- #site-navigation -->


                    <a href="/" class="header__logo" aria-label="Home page">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo@x2.png" alt="site-logo"
                            width="364" height="24">

                    </a><!-- logo -->

                    <nav class="navigation-right">
                        <?php
		    	        wp_nav_menu(
		    	        	array(
		    	        		'theme_location' => 'header-menu-right'
		    	        	)
		    	        );
			            ?>
                    </nav><!-- #site-navigation -->


                    <div class="language">

                        <a href="">Eng<span class="nav-arrow"></span></a>

                        <ul class="language__sub-menu sub-menu">
                            <li class="lang-item">Srb</li>
                        </ul>
                    </div>


                    <button class="menu-toggle" aria-label="mobile-naigation-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button><!-- menu toggle -->


                </div>
            </div>
        </header><!-- #masthead -->