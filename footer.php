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
                        <li><a href="#" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: #fff;
											stroke: transparent;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 0)">
                                        <path class="a"
                                            d="M452.815,294.658c2,0,2.24.008,3.031.044a4.144,4.144,0,0,1,1.393.258,2.484,2.484,0,0,1,1.423,1.424,4.144,4.144,0,0,1,.258,1.392c.036.791.044,1.028.044,3.031s-.008,2.24-.044,3.031a4.151,4.151,0,0,1-.258,1.393,2.486,2.486,0,0,1-1.423,1.423,4.141,4.141,0,0,1-1.393.258c-.791.036-1.028.044-3.031.044s-2.24-.008-3.031-.044a4.142,4.142,0,0,1-1.393-.258,2.488,2.488,0,0,1-1.423-1.423,4.159,4.159,0,0,1-.258-1.393c-.036-.791-.044-1.028-.044-3.031s.008-2.24.044-3.031a4.152,4.152,0,0,1,.258-1.392,2.485,2.485,0,0,1,1.423-1.424,4.145,4.145,0,0,1,1.393-.258c.791-.036,1.028-.044,3.031-.044m0-1.351c-2.037,0-2.292.009-3.092.045a5.5,5.5,0,0,0-1.82.349,3.833,3.833,0,0,0-2.194,2.193,5.494,5.494,0,0,0-.348,1.82c-.037.8-.046,1.056-.046,3.092s.009,2.292.046,3.092a5.49,5.49,0,0,0,.348,1.82,3.834,3.834,0,0,0,2.194,2.194,5.5,5.5,0,0,0,1.82.349c.8.036,1.055.045,3.092.045s2.292-.009,3.092-.045a5.5,5.5,0,0,0,1.82-.349,3.834,3.834,0,0,0,2.194-2.194,5.491,5.491,0,0,0,.348-1.82c.037-.8.046-1.056.046-3.092s-.009-2.292-.046-3.092a5.5,5.5,0,0,0-.348-1.82,3.833,3.833,0,0,0-2.194-2.193,5.5,5.5,0,0,0-1.82-.349c-.8-.036-1.055-.045-3.092-.045"
                                            transform="translate(-445.315 -293.307)" />
                                        <path class="a"
                                            d="M465.127,309.267a3.851,3.851,0,1,0,3.851,3.851,3.851,3.851,0,0,0-3.851-3.851m0,6.351a2.5,2.5,0,1,1,2.5-2.5,2.5,2.5,0,0,1-2.5,2.5"
                                            transform="translate(-457.627 -305.618)" />
                                    </g>
                                </svg>
                            </a></li>
                        <li><a href="#" target="_blank" rel="noopener">

                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: #fff;
											stroke: transparent;
                                        }
                                        </style>
                                    </defs>
                                    <path class="a"
                                        d="M12.8,0H2.2A2.2,2.2,0,0,0,0,2.2V12.8A2.2,2.2,0,0,0,2.2,15H6.621V9.7H4.863V7.061H6.621V5.273A2.64,2.64,0,0,1,9.258,2.637h2.666V5.273H9.258V7.061h2.666L11.484,9.7H9.258V15H12.8A2.2,2.2,0,0,0,15,12.8V2.2A2.2,2.2,0,0,0,12.8,0Zm0,0" />
                                </svg>

                            </a></li>
                        <li><a href="#" target="_blank" rel="noopener">

                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: #fff;
											stroke: transparent;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 -48)">
                                        <g transform="translate(0 48)">
                                            <path class="a"
                                                d="M18,49.776a7.544,7.544,0,0,1-2.126.6A3.748,3.748,0,0,0,17.5,48.282a7.264,7.264,0,0,1-2.34.916,3.655,3.655,0,0,0-2.7-1.2,3.737,3.737,0,0,0-3.688,3.786,3.993,3.993,0,0,0,.086.863A10.361,10.361,0,0,1,1.253,48.69,3.885,3.885,0,0,0,.748,50.6a3.817,3.817,0,0,0,1.639,3.145A3.575,3.575,0,0,1,.72,53.282v.042a3.78,3.78,0,0,0,2.956,3.719,3.6,3.6,0,0,1-.967.125,3.184,3.184,0,0,1-.7-.065,3.739,3.739,0,0,0,3.448,2.637A7.3,7.3,0,0,1,.883,61.353,6.742,6.742,0,0,1,0,61.3,10.2,10.2,0,0,0,5.661,63c6.791,0,10.5-5.769,10.5-10.77,0-.167-.006-.329-.014-.489A7.469,7.469,0,0,0,18,49.776Z"
                                                transform="translate(0 -48)" />
                                        </g>
                                    </g>
                                </svg>


                            </a></li>
                        <li><a href="#" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15" viewBox="0 0 12 15">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: #fff;
											stroke: transparent;
                                        }
                                        </style>
                                    </defs>
                                    <path class="a"
                                        d="M8.451,0C4.4,0,2.25,2.635,2.25,5.508A4.038,4.038,0,0,0,4.157,9.028c.335.153.29-.034.578-1.153a.269.269,0,0,0-.063-.261C2.995,5.644,4.345,1.593,8.212,1.593c5.6,0,4.55,7.864.974,7.864A1.335,1.335,0,0,1,7.794,7.813a18.034,18.034,0,0,0,.779-3.028c0-1.968-2.886-1.676-2.886.931a3.194,3.194,0,0,0,.281,1.349s-.929,3.81-1.1,4.522a10.266,10.266,0,0,0,.068,3.324.1.1,0,0,0,.177.046A11.844,11.844,0,0,0,6.64,12.033c.114-.428.584-2.166.584-2.166A2.539,2.539,0,0,0,9.377,10.91c2.828,0,4.873-2.525,4.873-5.658C14.24,2.248,11.709,0,8.451,0Z"
                                        transform="translate(-2.25)" />
                                </svg>


                            </a></li>
                        <li><a href="#" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: #fff;
											stroke: transparent;
                                        }
                                        </style>
                                    </defs>
                                    <path class="a"
                                        d="M-123.34,678a4.81,4.81,0,0,0-.8-2.117,2.78,2.78,0,0,0-2-.906c-2.8-.213-7-.213-7-.213h-.007s-4.2,0-7,.213a2.771,2.771,0,0,0-2,.906,4.81,4.81,0,0,0-.8,2.117,34.405,34.405,0,0,0-.2,3.452v1.616a34.414,34.414,0,0,0,.2,3.452,4.809,4.809,0,0,0,.8,2.117,3.266,3.266,0,0,0,2.2.913c1.6.163,6.8.213,6.8.213s4.2-.007,7-.22a2.779,2.779,0,0,0,2-.906,4.809,4.809,0,0,0,.8-2.117,34.421,34.421,0,0,0,.2-3.452v-1.616A34.412,34.412,0,0,0-123.34,678Zm-11.865,7.029v-5.992l5.4,3.009Z"
                                        transform="translate(143.14 -674.76)" />
                                </svg>


                            </a></li>
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