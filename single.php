<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bernhardt
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

    <?php 
        if (has_post_thumbnail()) {
           $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 
           $backgroundImg = $backgroundImg[0];
        }else {
           $backgroundImg=get_template_directory_uri() . "/images/hero-bg@x2.png";
        }
    ?>


    <section class="single-hero"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $backgroundImg; ?>')">
        <div class="container">
            <div class="single-hero__content">
                <div class="single-hero__title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="breadcrumbs-wrap">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="single-main">

        <div class="container container--narrow">

            <?php
            $categories = get_the_category();
            $separator = ', ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                }
            } ?>

            <div class="post__cats"><?php echo trim( $output, $separator );?></div>
            <h2 class="single-main__title"><?php the_title(); ?></h2>
            <div class="post-date">
                <span>
                    <?php echo get_the_date( "d.m.Y." ); ?>
                </span>
                <span>
                    <?php the_time( 'G:i' ); ?>
                </span>
            </div>

            <div class="editor">
                <?php the_content(); ?>
            </div>

            <?php get_template_part( 'template-parts/author', 'block' ); ?>

            <article class="clipboard">
                <?php // Get current post URL 
                      $url = get_the_permalink();  
                ?>
                <h3>Share This Article:</h3>
                <div class="clipboard__box">
                    <input class="clipboard__url" type="text" id="current-url" name="copy" value="<?php echo $url; ?>"
                        disabled>
                    <span class="clipboard__icon" id="copy-to-clipboard">
                        <span class="tooltip-text" id="tooltip">Copy to clipboard</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-copy.svg"
                            alt="copy to clipboard" width="12" height="15"></span>
                </div>

            </article>

        </div>

        <?php get_template_part( 'template-parts/social', 'share' ); ?>

    </section>


    <!-- Similar posts custom fields -->
    <?php $similarPostID1 = get_post_meta( get_the_ID(), 'similar_post_id1', true ); ?>
    <?php $similarPostID2 = get_post_meta( get_the_ID(), 'similar_post_id2', true ); ?>
    <?php $similarPostID3 = get_post_meta( get_the_ID(), 'similar_post_id3', true ); ?>
    <!-- END Similar custom meta fields -->
    <section>
        <div class="container">
            <div class="similar-posts">
                <h2>Similar Posts</h2>
                <div class="similar-posts__row">

                    <?php if ($similarPostID1 || $similarPostID2 || $similarPostID3){?>

                    <?php if ($similarPostID1){?>
                    <a class="post-card" href="<?php echo get_permalink($similarPostID1);?>">

                        <?php
                            if (has_post_thumbnail($similarPostID1)) {
                               $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($similarPostID1), 'medium_large'); 
                               $backgroundImg = $backgroundImg[0];
                            }else {
                               $backgroundImg= "";
                            }
                        ?>

                        <div class="post-card__img" style="background-image: url('<?php echo $backgroundImg;?>')"></div>

                        <div class="post-card__content">
                            <div class="post-card__date">
                                <span>
                                    <?php echo get_the_date( "d.m.Y.", $similarPostID1); ?>
                                </span>
                                <span>
                                    <?php echo get_the_time( 'G:i', $similarPostID1 ); ?>
                                </span>
                            </div>

                            <h3><?php echo get_the_title($similarPostID1); ?></h3>

                            <div class="post-card__btn">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.739" height="6.736"
                                    viewBox="0 0 28.739 6.736">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: none;
                                            stroke: #c4bc94;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 6.368) rotate(-90)">
                                        <path class="a" d="M27.921,0H0"
                                            transform="translate(3.014 27.921) rotate(-90)" />
                                        <path class="a" d="M0,0,3,3.266,6,0" transform="translate(0 24.734)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <?php }?>

                    <?php if ($similarPostID2){?>
                    <a class="post-card" href="<?php echo get_permalink($similarPostID2);?>">

                        <?php
                            if (has_post_thumbnail($similarPostID1)) {
                               $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($similarPostID2), 'medium_large'); 
                               $backgroundImg = $backgroundImg[0];
                            }else {
                               $backgroundImg= "";
                            }
                        ?>

                        <div class="post-card__img" style="background-image: url('<?php echo $backgroundImg;?>')"></div>

                        <div class="post-card__content">
                            <div class="post-card__date">
                                <span>
                                    <?php echo get_the_date( "d.m.Y.", $similarPostID2); ?>
                                </span>
                                <span>
                                    <?php echo get_the_time( 'G:i', $similarPostID2 ); ?>
                                </span>
                            </div>

                            <h3><?php echo get_the_title($similarPostID2); ?></h3>

                            <div class="post-card__btn">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.739" height="6.736"
                                    viewBox="0 0 28.739 6.736">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: none;
                                            stroke: #c4bc94;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 6.368) rotate(-90)">
                                        <path class="a" d="M27.921,0H0"
                                            transform="translate(3.014 27.921) rotate(-90)" />
                                        <path class="a" d="M0,0,3,3.266,6,0" transform="translate(0 24.734)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <?php }?>

                    <?php if ($similarPostID3){?>
                    <a class="post-card" href="<?php echo get_permalink($similarPostID3);?>">

                        <?php
                            if (has_post_thumbnail($similarPostID3)) {
                               $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($similarPostID3), 'medium_large'); 
                               $backgroundImg = $backgroundImg[0];
                            }else {
                               $backgroundImg= "";
                            }
                        ?>

                        <div class="post-card__img" style="background-image: url('<?php echo $backgroundImg;?>')"></div>

                        <div class="post-card__content">
                            <div class="post-card__date">
                                <span>
                                    <?php echo get_the_date( "d.m.Y.", $similarPostID3); ?>
                                </span>
                                <span>
                                    <?php echo get_the_time( 'G:i', $similarPostID3 ); ?>
                                </span>
                            </div>

                            <h3><?php echo get_the_title($similarPostID3); ?></h3>

                            <div class="post-card__btn">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.739" height="6.736"
                                    viewBox="0 0 28.739 6.736">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: none;
                                            stroke: #c4bc94;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 6.368) rotate(-90)">
                                        <path class="a" d="M27.921,0H0"
                                            transform="translate(3.014 27.921) rotate(-90)" />
                                        <path class="a" d="M0,0,3,3.266,6,0" transform="translate(0 24.734)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <?php }?>


                    <?php }else{?>
                    <!-- last 3 similar posts -->
                    <?php
                     // WP_Query arguments
                     $args = array(
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'category__in' => wp_get_post_categories( $post->ID )
                     );
                     
                     // The Query
                     $the_query = new WP_Query( $args );
                     
                     if ($the_query->have_posts()) : ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post();  ?>
                    <a class="post-card" href="<?php echo get_permalink();?>">

                        <?php
                            if (has_post_thumbnail()) {
                               $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large'); 
                               $backgroundImg = $backgroundImg[0];
                            }else {
                               $backgroundImg= "";
                            }
                        ?>

                        <div class="post-card__img" style="background-image: url('<?php echo $backgroundImg;?>')"></div>

                        <div class="post-card__content">
                            <div class="post-card__date">
                                <span>
                                    <?php echo get_the_date( "d.m.Y." ); ?>
                                </span>
                                <span>
                                    <?php the_time( 'G:i' ); ?>
                                </span>
                            </div>

                            <h3><?php the_title(); ?></h3>

                            <div class="post-card__btn">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.739" height="6.736"
                                    viewBox="0 0 28.739 6.736">
                                    <defs>
                                        <style>
                                        .a {
                                            fill: none;
                                            stroke: #c4bc94;
                                        }
                                        </style>
                                    </defs>
                                    <g transform="translate(0 6.368) rotate(-90)">
                                        <path class="a" d="M27.921,0H0"
                                            transform="translate(3.014 27.921) rotate(-90)" />
                                        <path class="a" d="M0,0,3,3.266,6,0" transform="translate(0 24.734)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <?php 
                       endwhile;
                       wp_reset_postdata(); 
                    ?>

                    <?php endif; ?>
                    <!-- end similar posts -->

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
</main><!-- #main -->

<?php
get_footer();