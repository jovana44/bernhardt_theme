<?php
/**
 *  Share buttons template
 */

// Get current page URL 
$url = urlencode(get_the_permalink()); 

// Get current page title
$title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));

// Get Post Thumbnail for pinterest
$media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full')); 
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 

// Construct sharing URL 
$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$url;
$twitterURL = 'https://twitter.com/intent/tweet?url='.$url.'&text='.$title.'&via=Bernhardt';
// $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$url.'&title='.$title.'&source=Bernhardt_Blog';
$pinterestnURL = 'http://pinterest.com/pin/create/button/?url='.$url.'&media='.$thumbnail.'';
?>

<div class="social-share__wrap">
    <div class="social-share">
        <span class="social-share__title">Share:</span>
        <ul>
            <li><a class="social-share__item social-icon-round" href="#"  rel="noreferrer nofollow" 
                            target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="email" width="20"
                        height="15"></a></li>
            <li><a class="social-share__item social-icon-round" href="<?php echo $facebookURL?>"  rel="noreferrer nofollow" 
                            target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook" width="15"
                        height="15"></a></li>
            <li><a class="social-share__item social-icon-round" href="<?php echo $twitterURL?>"  rel="noreferrer nofollow" 
                            target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="twitter" width="18"
                        height="15"></a></li>
            <li><a class="social-share__item social-icon-round" href="<?php echo $pinterestURL?>"  rel="noreferrer nofollow" 
                            target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/pinterest.svg" alt="pinterest"
                        width="12" height="15"></a></li>
        </ul>
    </div>
</div>