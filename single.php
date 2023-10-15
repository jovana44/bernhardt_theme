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

    <section class="single-hero"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo get_template_directory_uri(); ?>/images/hero-bg@x2.png')">
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
            <h2><?php the_title(); ?></h2>
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
                <?php
			    // Get current post URL 
                $url = get_the_permalink();  ?>
                <h3>Share This Article:</h3>
                <div class="clipboard__box">
                    <input class="clipboard__url" type="text" id="current-url" name="copy" value="<?php echo $url; ?>">
                    <span class="clipboard__icon" id="copy-to-clipboard">
                        <span class="tooltip-text" id="tooltip">Copy to clipboard</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-copy.svg"
                            alt="copy to clipboard" width="12" height="15"></span>
                </div>

            </article>

        </div>

        <?php get_template_part( 'template-parts/social', 'share' ); ?>

    </section>


    <section>
        <div class="container">
            <div class="similar-posts">
                <h2>Similar Posts</h2>
                <div class="similar-posts__row">

                    <!-- similar posts -->
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

                        <div class="post-card__img"
                            style="background-image: url('<?php echo $backgroundImg;?>')"></div>

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
                                Read more <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-card.svg"
                                    alt="arrow" width="29" height="7">
                            </div>
                        </div>
                    </a>
                    <?php 
                       endwhile;
                       wp_reset_postdata(); 
                    ?>

                    <?php endif; ?>
                    <!-- end similar posts -->

                </div>
            </div>
        </div>
    </section>


</main><!-- #main -->

<?php
get_footer();