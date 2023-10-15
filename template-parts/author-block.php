<article class="author-block">

    <div class="author-block__profile">
        <div class="author-block__image"><?php echo wp_get_attachment_image( $user_profile_img, 'full' ); ?></div>
        <?php echo get_avatar( $author_id, '185' ); ?>

        <div class="author-block__socials">
            <span>Stay In Touch:</span>

            <div class="author-block__socials-row">
                <a class="social-icon-round social-icon-round--white" href="#" target="_blank" rel="noopener"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="email" width="20"
                        height="15"></a>
                <a class="social-icon-round social-icon-round--white" href="#" target="_blank" rel="noopener"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="email" width="20"
                        height="15"></a>
            </div>
        </div>
    </div>

 

    <div class="author-block__text">

        <div class="author-block__name">
            <?php //the_author(); ?>

            <?php echo get_the_author_meta('user_firstname'); ?>
            <?php echo get_the_author_meta('user_lastname'); ?>
        </div>
        <div class="author-block__position"></div>
        </hr>
        <div class="author-block__bio"><?php the_author_meta( 'description' ); ?></div>
    </div>


</article>