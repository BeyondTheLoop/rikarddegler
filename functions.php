<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


//Trigger WOW
function rikarddegler_trigger_wow() { ?>
  <script>
  new WOW().init();
  </script>
<?php }

add_action('wp_head', 'rikarddegler_trigger_wow');

//Add Slick JS to footer
function rikarddegler_slick_footer_js() {
  if(is_front_page()) {
?>
    <script src="wp-content/themes/rikarddegler/slick/slick.js" charset="utf-8"></script>
    <script>
    	$(document).on('ready', function() {
    		$(".client-logo-slider").slick({
    			dots: true,
          arrows: false,
    			infinite: true,
    			slidesToShow: 2,
    			slidesToScroll: 2,
    			autoplay: true,
    			autoplaySpeed: 4000
    		});
    	});
    </script>

    <script>
      $(document).on('ready', function() {
        $(".client-logo-slider-mobile").slick({
          dots: true,
          arrows: false,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000
        });
      });
    </script>
<?php
  }
}

add_action('foundationpress_before_closing_body', 'rikarddegler_slick_footer_js');


/**
*
* Add body class to posts without featured image
*
*/

function add_body_class_no_featured_image( $classes ) {
  if(is_single() && !has_post_thumbnail()) {
    $classes[] = 'no-featured-image';
  }
  return $classes;
}
add_filter( 'body_class','add_body_class_no_featured_image' );

/**
*
* Register Portfolio custom post type
*
*/

function register_portfolio_custom_post_type () {
    $args = array(
      'public' => true,
      'label'  => 'Portfolio',
      'supports' => array( 'title', 'editor', 'thumbnail', )
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio_custom_post_type' );

/**
*
* Add extra item to Yoast Breadcrumbs
*
*/

function add_portfolio_link_yoast_breadcrumbs( $links ) {
    global $post;

    if ( is_singular( 'portfolio' ) ) {
        $breadcrumb[] = array(
            'url' => get_permalink(380),
            'text' => 'Portfolio',
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }
    return $links;
}
add_filter( 'wpseo_breadcrumb_links', 'add_portfolio_link_yoast_breadcrumbs' );

/**
*
* Disable Gutenberg Editor for all post types
*
*/

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
