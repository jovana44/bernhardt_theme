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
                        <div class="hide-on-desktop">

                            <?php
		    	             wp_nav_menu(
		    	             	array(
		    	             		'theme_location' => 'header-menu-right'
		    	             	)
		    	             );
			                 ?>

                            <div class="search-wrap">
                                <?php get_search_form(); ?>
                            </div>

                        </div>

                    </nav><!-- #site-navigation -->


                    <a href="/" class="header__logo" aria-label="Home page">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo@x2.png" alt="site-logo"
                            width="364" height="24">

                    </a><!-- logo -->


                    <div class="header__right">
                        <nav class="navigation-right hide-on-mobile">
                            <?php
		    	             wp_nav_menu(
		    	             	array(
		    	             		'theme_location' => 'header-menu-right'
		    	             	)
		    	             );
			                 ?>
                        </nav><!-- #site-navigation -->

                        <div class="search-wrap hide-on-mobile">
                            <button class="search-icon search-icon-btn hide-on-mobile" id="searchsubmit"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg"
                                    alt="Search icon" width="12" height="12"><span>Search</span></button>
                            <?php get_search_form(); ?>
                        </div>

                        <div class="language">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/globe-icon.svg"
                                alt="globe icon" width="13" height="13">
                            <div class="language__picker" id="languagePicker">
                                <a class="language__current" href="#">Eng<span
                                        class="arrow arrow--small arrow--light down"></span></a>
                                <ul class="language__dropdown sub-menu">
                                    <li><a href="#">Srb</a></li>
                                </ul>
                            </div>
                        </div>



                        <button class="menu-toggle" aria-label="mobile-naigation-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button><!-- menu toggle -->
                    </div>

                </div>
            </div>
        </header><!-- #masthead -->