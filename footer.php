<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bernhardt
 */

?>

<footer class="footer"
    style="background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg@x2.png')">
    <div class="container">

        <div class="footer__top">

            <div class="footer__subscribe">
                <h3>Join Our Email List</h3>
                <p>We're so glad you visited our Web site! And we'd like to stay in touch with you.</p>
            </div>
            <div class="footer__btns">
                <a class="btn btn__outline" href="#">Consumer</a>
                <a class="btn btn__outline" href="#">To the trade</a>
            </div>
        </div>

        <div class="footer__main">

            <a href="/" class="footer__logo" aria-label="Home page">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="site-logo" width="364"
                    height="24">

            </a><!-- logo -->


            <div class="footer__menus">

                <nav class="footer__menu">
                    <span class="footer__menu-title">Divisions</span>
                    <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-1'
			            	)
			            );
			            ?>
                </nav>

                <nav class="footer__menu">
                    <span class="footer__menu-title">The Company</span>
                    <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-2'
			            	)
			            );
			            ?>
                </nav>

                <nav class="footer__menu">
                    <span class="footer__menu-title">News</span>
                    <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-3'
			            	)
			            );
			            ?>
                </nav>

                <nav class="footer__menu">
                    <span class="footer__menu-title">Business Tools</span>
                    <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-4'
			            	)
			            );
			            ?>
                </nav>

                <nav class="footer__menu">
                    <span class="footer__menu-title">Customer Care</span>
                    <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-5'
			            	)
			            );
			            ?>
                </nav>

                <nav class="footer__menu footer__socials">
                    <span class="footer__menu-title">Stay In Touch</span>
                    <ul>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/email.svg"
                                    alt="email" width="20" height="15" target="_blank" rel="noopener"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg"
                                    alt="facebook" width="15" height="15" target="_blank" rel="noopener"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg"
                                    alt="twitter" width="18" height="15" target="_blank" rel="noopener"></a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.svg"
                                    alt="pinterest" width="12" height="15" target="_blank" rel="noopener"></a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.svg"
                                    alt="pinterest" width="12" height="15" target="_blank" rel="noopener"></a></li>
                    </ul>
                </nav>


            </div>
        </div>

        <div class="footer__bottom">

            <p class="footer__copyright">Copyright &copy; <?php echo date("Y"); ?> Bernhardt Furniture Company. All
                Rights Reserved.</p>

            <nav class="footer__bottom-menu">
                <?php
			            wp_nav_menu(
			            	array(
			            		'theme_location' => 'footer-menu-bottom'
			            	)
			            );
			            ?>
            </nav>


        </div>

    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>