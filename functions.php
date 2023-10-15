<?php
/**
 * bernhardt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bernhardt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bernhardt_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bernhardt, use a find and replace
		* to change 'bernhardt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bernhardt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu-left' => esc_html__( 'Primary 1', 'bernhardt' ),
			'header-menu-right' => esc_html__( 'Primary 2', 'bernhardt' ),
			'footer-menu-1' => esc_html__( 'Footer menu 1', 'bernhardt' ),
			'footer-menu-2' => esc_html__( 'Footer menu 2', 'bernhardt' ),
			'footer-menu-3' => esc_html__( 'Footer menu 3', 'bernhardt' ),
			'footer-menu-4' => esc_html__( 'Footer menu 4', 'bernhardt' ),
			'footer-menu-5' => esc_html__( 'Footer menu 5', 'bernhardt' ),
			'footer-menu-bottom' => esc_html__( 'Footer menu bottom', 'bernhardt' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bernhardt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bernhardt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bernhardt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bernhardt_content_width', 640 );
}
add_action( 'after_setup_theme', 'bernhardt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bernhardt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bernhardt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bernhardt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bernhardt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bernhardt_scripts() {
	wp_enqueue_style( 'bernhardt-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bernhardt-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bernhardt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bernhardt-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bernhardt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Function for breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';



/** 
* Convert Gallery block into image slider
*/
add_filter( 'wp_footer', function ( ) {  ?>
	<script>
	document.querySelectorAll(".wp-slider")?.forEach( slider => {
		var src = [];
		var alt = [];
		var img = slider.querySelectorAll("img");
		img.forEach( e => { src.push(e.src);   if (e.alt) { alt.push(e.alt); } else { alt.push("image"); } })
		let i = 0;
		let image = "";
		let myDot = "";
		src.forEach ( e => { image = image + `<div class="wp-slide" > <img decoding="async" loading="lazy" src="${src[i]}" alt="${alt[i]}" > </div>`; i++ })
		i = 0;
		src.forEach ( e => { myDot = myDot + `<span class="wp-dot"></span>`; i++ })
		let dotDisply = "none";
		if (slider.classList.contains("dot")) dotDisply = "block";    
		const main = `<div class="wp-slider">${image}<span class="wp-controls wp-left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100.445" height="23.443" viewBox="0 0 100.445 23.443"><g transform="translate(-682.625 747.338) rotate(-90)"><path class="a" d="M98.722,0H0" transform="translate(735.667 684.348) rotate(90)"/><path class="a" d="M881.616,777.538l11-11.468,11,11.468" transform="translate(-157 -82)"/></g></svg></span> <span class="wp-controls wp-right-arrow" > <svg xmlns="http://www.w3.org/2000/svg" width="100.445" height="23.443" viewBox="0 0 100.445 23.443"><g transform="translate(-682.625 747.338) rotate(-90)"><path class="a" d="M98.722,0H0" transform="translate(735.667 684.348) rotate(90)"/><path class="a" d="M881.616,777.538l11-11.468,11,11.468" transform="translate(-157 -82)"/></g></svg> </span> <div class="dots-con" style="display: ${dotDisply}"> ${myDot}</div></div> `       
		slider.insertAdjacentHTML("afterend",main  );
		slider.remove();
	})
	
	document.querySelectorAll(".wp-slider")?.forEach( slider => { 
	var slides = slider.querySelectorAll(".wp-slide");
	var dots = slider.querySelectorAll(".wp-dot");
	var index = 0;
	slider.addEventListener("click", e => {if(e.target.classList.contains("wp-left-arrow")) { prevSlide(-1)} } )
	slider.addEventListener("click", e => {if(e.target.classList.contains("wp-right-arrow")) { nextSlide(1)} } )
	function prevSlide(n){
	  index+=n;
	  console.log("prevSlide is called");
	  changeSlide();
	}
	function nextSlide(n){
	  index+=n;
	  changeSlide();
	}
	changeSlide();
	function changeSlide(){   
	  if(index>slides.length-1)
		index=0;  
	  if(index<0)
		index=slides.length-1;  
		for(let i=0;i<slides.length;i++){
		  slides[i].style.display = "none";
		  dots[i].classList.remove("wp-slider-active");      
		}
		slides[index].style.display = "block";
		dots[index].classList.add("wp-slider-active");
	}
	 } )
	
	</script>
	
	<?php });


