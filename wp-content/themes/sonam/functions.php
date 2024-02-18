<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}




add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
add_theme_support( 'woocommerce' );

global $content_width;
if ( !isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
register_nav_menus( array( 'quick-links' => esc_html__( 'Quick Links', 'blankslate' ) ) );
register_nav_menus( array( 'products' => esc_html__( 'Products', 'blankslate' ) ) );

}



add_action( 'admin_notices', 'blankslate_notice' );
function blankslate_notice() {
$user_id = get_current_user_id();
$admin_url = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http' ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$param = ( count( $_GET ) ) ? '&' : '?';
if ( !get_user_meta( $user_id, 'blankslate_notice_dismissed_8' ) && current_user_can( 'manage_options' ) )
echo '<div class="notice notice-info"><p><a href="' . esc_url( $admin_url ), esc_html( $param ) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__( 'Ⓧ', 'blankslate' ) . '</big></a>' . wp_kses_post( __( '<big><strong>📝 Thank you for using BlankSlate!</strong></big>', 'blankslate' ) ) . '<br /><br /><a href="https://wordpress.org/support/theme/blankslate/reviews/#new-post" class="button-primary" target="_blank">' . esc_html__( 'Review', 'blankslate' ) . '</a> <a href="https://github.com/tidythemes/blankslate/issues" class="button-primary" target="_blank">' . esc_html__( 'Feature Requests & Support', 'blankslate' ) . '</a> <a href="https://calmestghost.com/donate" class="button-primary" target="_blank">' . esc_html__( 'Donate', 'blankslate' ) . '</a></p></div>';
}
add_action( 'admin_init', 'blankslate_notice_dismissed' );
function blankslate_notice_dismissed() {
$user_id = get_current_user_id();
if ( isset( $_GET['dismiss'] ) )
add_user_meta( $user_id, 'blankslate_notice_dismissed_8', 'true', true );
}




add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
	//enqueue css ~~~~~~~~
	wp_enqueue_style('font-icons-min-css', get_template_directory_uri() . '/css/font-icons.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('theme-vendors-min-css', get_template_directory_uri() . '/css/theme-vendors.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('all-min-css', get_template_directory_uri() . '/css/fontawesome-free/css/all.min.css', array(), _S_VERSION, 'all');

	//enqueue js ~~~~~~~~
	//wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'theme-vendors-min-js', get_template_directory_uri() . '/js/theme-vendors.min.js', array(), _S_VERSION, true );	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, array( 'in_footer' => true ) );
	wp_enqueue_script( 'easyResponsiveTabs-js', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array(), _S_VERSION, true );

}

//Theme Option page ~~~~~~~~~~~~~~~~
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        acf_add_options_page(array(
        	'title'    => 'Theme Settings',
	        // 'menu_title'    => 'Theme Settings',
	        'menu_slug'     => 'theme-general-settings',
	        'capability'    => 'edit_posts',
	        'redirect'      => false
        ));

        // Register options header sub-page.
        acf_add_options_sub_page(array(
	        'page_title'    => 'Theme Header Settings',
	        'menu_title'    => 'Header',
	        'parent_slug'   => 'theme-general-settings',
	    ));

	    // Register options footer sub-page.
        acf_add_options_sub_page(array(
	        'page_title'    => 'Theme Slider Settings',
	        'menu_title'    => 'Slider',
	        'parent_slug'   => 'theme-general-settings',
	    ));

	    // Register options footer sub-page.
        acf_add_options_sub_page(array(
	        'page_title'    => 'Theme Footer Settings',
	        'menu_title'    => 'Footer',
	        'parent_slug'   => 'theme-general-settings',
	    ));

    }
}


/*============================================
        Create Event custom post type
============================================*/
	function register_events_custom_post_type() {
	    $supports = array(
	        'title', // post title
	        'editor', // post content
	        'author', // post author
	        'thumbnail', // featured images
	        'excerpt', // post excerpt
	        'custom-fields', // custom fields
	        'comments', // post comments
	        'revisions', // post revisions
	        'post-formats', // post formats
	    );
	    $labels = array(
	        'name' => _x('Events', 'plural'),
	        'singular_name' => _x('Event', 'singular'),
	        'menu_name' => _x('Events', 'admin menu'),
	        'name_admin_bar' => _x('Event', 'admin bar'),
	        'add_new' => _x('Add New', 'add new'),
	        'add_new_item' => __('Add New events'),
	        'new_item' => __('New Event'),
	        'edit_item' => __('Edit Event'),
	        'view_item' => __('View Event'),
	        'all_items' => __('All Events'),
	        'search_items' => __('Search Events'),
	        'not_found' => __('No Events found.'),
	    );
	    $args = array(
	        'supports' => $supports,
	        'labels' => $labels,
	        'public' => true,
	        'query_var' => true,
	        'rewrite' => array('slug' => 'events'),
	        //'taxonomies'  => array( 'events_tax', 'post_tag' ),
	        'show_in_rest'  =>  true,
	        'has_archive' => true,
	        'hierarchical' => false,
	    );
	    register_post_type('events', $args);	

	//Create a CPT Taxonomy when the plugin is activated ~~~~~~~~~~~
	    $labels = array(
	    	'name'              => _x( 'Events', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Event', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Events', 'textdomain' ),
			'all_items'         => __( 'All Events', 'textdomain' ),
			'view_item'         => __( 'View Event', 'textdomain' ),
			'parent_item'       => __( 'Parent Event', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Event:', 'textdomain' ),
			'edit_item'         => __( 'Edit Event', 'textdomain' ),
			'update_item'       => __( 'Update Event', 'textdomain' ),
			'add_new_item'      => __( 'Add New Event', 'textdomain' ),
			'new_item_name'     => __( 'New Event Name', 'textdomain' ),
			'not_found'         => __( 'No Events Found', 'textdomain' ),
			'back_to_items'     => __( 'Back to Events', 'textdomain' ),
			'menu_name'         => __( 'Event Category', 'textdomain' ),
	    );

	    $args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'event' ),
			'show_in_rest'      => true,
	    );

	    register_taxonomy('events_tax', 'events', $args);	
	}

add_action('init', 'register_events_custom_post_type');


add_action( 'wp_footer', 'blankslate_footer' );
function blankslate_footer() {
?>
<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (deviceAgent.match(/(Android)/)) {
$("html").addClass("android");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = esc_html( '|' );
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return esc_html( '...' );
} else {
return wp_kses_post( $title );
}
}
function blankslate_schema_type() {
$schema = 'https://schema.org/';
if ( is_single() ) {
$type = "Article";
} elseif ( is_author() ) {
$type = 'ProfilePage';
} elseif ( is_search() ) {
$type = 'SearchResultsPage';
} else {
$type = 'WebPage';
}
echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
}
add_filter( 'nav_menu_link_attributes', 'blankslate_schema_url', 10 );
function blankslate_schema_url( $atts ) {
$atts['itemprop'] = 'url';
return $atts;
}
if ( !function_exists( 'blankslate_wp_body_open' ) ) {
function blankslate_wp_body_open() {
do_action( 'wp_body_open' );
}
}
add_action( 'wp_body_open', 'blankslate_skip_link', 5 );
function blankslate_skip_link() {
echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'blankslate' ) . '</a>';
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( !is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( !is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


// Dynamic CSS ~~~~~~~~~~~~~
function hook_css() { ?>
        <style>
     .video-bg {
	    background-image: url(<?php echo get_template_directory_uri(); ?>/images/video-bg.png);
	}
	.contact-bg {
	    background-image: url(<?php echo get_template_directory_uri(); ?>/images/contact-bg.jpg);
	}
	.career-text ul li {
	    background: url(<?php echo get_template_directory_uri(); ?>/images/arrow-red.png) no-repeat 0 8px;
	}
	.mission {
	    background-image: url(<?php echo get_template_directory_uri(); ?>/images/stat-bg.jpg);
	}
       	</style>
    <?php
}
add_action('wp_head', 'hook_css');