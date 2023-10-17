<article class="author-block 
    <?php echo ( get_post_meta( get_the_ID(), 'author_options', true )  == "author-image-right")?"image-right":""; ?>">

    <div class="author-block__profile">
        <?php if( get_post_meta( get_the_ID(), 'hide_image', true )  == "no"): ?>
        <div class="author-block__image"><?php echo get_avatar(  get_the_author_meta( 'ID' ), '150' ); ?></div>
        <?php endif; ?>

        <div class="author-block__socials">
            <span>Stay In Touch:</span>

            <div class="author-block__socials-row">
                <a class="social-icon-round social-icon-round--white"
                    href="mailto:<?php the_author_meta( 'user_email' ); ?>" aria-label="Contact email">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15">
                        <defs>
                            <style>
                            .a {
                                fill: #fff;
                            }
                            </style>
                        </defs>
                        <g transform="translate(0 -80)">
                            <g transform="translate(13.257 82.712)">
                                <path class="a" d="M339.392,149.8l6.742,4.7v-9.6Z"
                                    transform="translate(-339.392 -144.896)" />
                            </g>
                            <g transform="translate(0 82.712)">
                                <path class="a" d="M0,144.9v9.6l6.742-4.7Z" transform="translate(0 -144.896)" />
                            </g>
                            <g transform="translate(0.037 80)">
                                <g transform="translate(0 0)">
                                    <path class="a"
                                        d="M19.672,80H2.172A1.283,1.283,0,0,0,.96,81.173l9.962,7.241,9.962-7.241A1.283,1.283,0,0,0,19.672,80Z"
                                        transform="translate(-0.96 -80)" />
                                </g>
                            </g>
                            <g transform="translate(0.04 88.36)">
                                <g transform="translate(0 0)">
                                    <path class="a"
                                        d="M13.1,277.921l-1.769,1.285a.579.579,0,0,1-.687,0L8.871,277.92,1.024,283.4a1.28,1.28,0,0,0,1.21,1.164h17.5a1.28,1.28,0,0,0,1.21-1.164Z"
                                        transform="translate(-1.024 -277.92)" />
                                </g>
                            </g>
                        </g>
                    </svg>

                </a>
                <a class="social-icon-round social-icon-round--white" href="<?php the_author_meta( 'user_url' ); ?>"
                    target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                        <defs>
                            <style>
                            .a {
                                fill: #fff;
                            }
                            </style>
                        </defs>
                        <path class="a"
                            d="M18.18,17.84h0v-5.5c0-2.691-.579-4.764-3.726-4.764a3.266,3.266,0,0,0-2.942,1.617h-.044V7.825H8.489V17.84H11.6V12.881c0-1.306.248-2.568,1.864-2.568,1.593,0,1.617,1.49,1.617,2.652V17.84Z"
                            transform="translate(-3.183 -2.84)" />
                        <path class="a" d="M.4,7.977h3.11V17.991H.4Z" transform="translate(-0.148 -2.991)" />
                        <path class="a" d="M1.8,0A1.81,1.81,0,1,0,3.6,1.8,1.8,1.8,0,0,0,1.8,0Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="author-block__text">
        <h3 class="author-block__name"><?php the_author(); ?></h3>
        <div class="author-block__position">Venenatis tellus in metus vulputate</div>
        <?php if (get_the_author_meta('description')): ?>
        <div class="author-block__bio"><?php the_author_meta( 'description' ); ?></div>
        <?php endif; ?>
    </div>

</article>