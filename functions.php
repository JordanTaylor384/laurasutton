<?php
/**
* annearcher functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package annearcher
*/

if ( ! function_exists( 'annearcher_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function annearcher_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on annearcher, use a find and replace
		* to change 'annearcher' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'annearcher', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails'); // Add it for posts

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'annearcher' ),
			'footer' => esc_html__( 'Footer', 'annearcher' ),
			'overlay' => esc_html__( 'Overlay', 'annearcher' ),
		) );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'annearcher_custom_background_args', array(
			'default-color' => 'red',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'annearcher_setup' );


//-----------------------------------------------------------------------------------------------------------------
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
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

/**
* Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
//----------------------- UNDERSCORES_ ^^^^^^^ ------------------------------------------------------------------


//----------------------- Custom -----------------------------------------------------------------------------------

// show ID's in pages & posts

add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);

function posts_columns_id($defaults){
	$defaults['wps_post_id'] = __('ID');
	return $defaults;
}
function posts_custom_id_columns($column_name, $id){
	if($column_name === 'wps_post_id'){
		echo $id;
	}
}

//--------------------------------------------------------------------------------------------------------------
/**
* Enqueue scripts and styles.
*/
function annearcher_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script('comment-reply');
	}
	// wp_enqueue_script('jquery');
	// wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.min.js', array(), null );
	wp_enqueue_script( 'default', get_template_directory_uri() . '/assets/dist/js/main.bundle.js', array(), null );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/dist/css/main.bundle.css' , array(), null );

}
add_action( 'wp_enqueue_scripts', 'annearcher_scripts' );

//---------------------------------------------------------------------------------------------------------------

// enqueue admin stylesheet

function admin_theme_style() {
	wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_theme_style');

function my_login_logo() { ?>
	<style type="text/css">
	#login h1 a, .login h1 a {
		background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anne_archer_small_logo2x.png);
		height: 65px;
		width: 320px;
		/* background-size: 320px 65px; */
		background-repeat: no-repeat;
		background-size: contain;
		background-position: center;
		padding-bottom: 30px;
	}
	body.login {
		background-color: white;
	}
	body.login form {
		background-color: white;
		border: 0;
		box-shadow: none;
	}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Admin footer modification
function remove_footer_admin () {
	echo '<span id="footer-thankyou">Developed by <a href="https://jordan-taylor.co.uk" target="_blank" alt="Jordan Taylor"><img src="'.get_stylesheet_directory_uri().'/assets/img/jt_logo.png" style="margin-left: 5px;"/></a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// remove wordpress dashboard widgets
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


//---------------------------------------------------------------------------------------------------------------

// Remove generator tag
remove_action('wp_head', 'wp_generator');

//---------------------------------------------------------------------------------------------------------------
//Adds additional markup into WP menus

add_filter('wp_nav_menu_objects' , 'my_menu_class');
function my_menu_class($menu) {
	$level = 0;
	$stack = array('0');
	foreach($menu as $key => $item) {
		while($item->menu_item_parent != array_pop($stack)) {
			$level--;
		}
		$level++;
		$stack[] = $item->menu_item_parent;
		$stack[] = $item->ID;
		$menu[$key]->classes[] = 'level-'. ($level - 1);
	}
	return $menu;
}

class Custom_Menu_List extends Walker_Nav_Menu {
	/**
	* @see Walker::start_lvl()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param int $depth Depth of page. Used for padding.
	*/
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		// $output .= "\n$indent<ul class=\"sub-menu\">\n"; //this is default output;

		//if( $depth==0 ) //'0'==>1st-sub-level; '1'=2nd-sub-level; ....
		$output .= "\n$indent<div class=\"sub-menu-container\"><div class=\"sub-menu-inner\"><ul class=\"sub-menu\">\n";
	}

	/**
	* @see Walker::end_lvl()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param int $depth Depth of page. Used for padding.
	*/
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		//$output .= "$indent</ul>\n"; //this is default output;

		//if( $depth==0 ) //'0'==>1st-sub-level; '1'=2nd-sub-level; ....
		$output .= "$indent</ul></div></div>\n";
	}
}

//Mobile version

class Mobile_Slider extends Walker_Nav_Menu {
	/**
	* @see Walker::start_lvl()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param int $depth Depth of page. Used for padding.
	*/
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		//$output .= "\n$indent<ul class=\"sub-menu\">\n"; //this is default output;

		//if( $depth==0 ) //'0'==>1st-sub-level; '1'=2nd-sub-level; ....
		$output .= "\n$indent<ul class=\"sub-menu\">\n";
	}

	/**
	* @see Walker::end_lvl()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param int $depth Depth of page. Used for padding.
	*/
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		//$output .= "$indent</ul>\n"; //this is default output;

		//if( $depth==0 ) //'0'==>1st-sub-level; '1'=2nd-sub-level; ....
		$output .= "$indent</ul>\n";
	}
}

//------------------------------------------------------------------------------------------------
// Add a custom ACF options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// include for ACF fields
// require get_template_directory() . '/inc/acf/field_group/global-acf.php';

//----------------------------------------------------------------------------------------------------
// check if current post is a descendant of cat_id
function pa_category_top_parent_id ($catid) {

	while ($catid) {
		$cat = get_category($catid); // get the object for the catid
		$catid = $cat->category_parent; // assign parent ID (if exists) to $catid
		// the while loop will continue whilst there is a $catid
		// when there is no longer a parent $catid will be NULL so we can assign our $catParent
		$catParent = $cat->cat_ID;
	}

	return $catParent;
}


//------------------------------------------------------------------------------------------------------
// BC
// custom shortcode to add Joomla Style "Read More" separators in wysiwyg editor
// ex: [readmore]this is the content[/readmore]

function read_more($atts, $content = null) {
	return '<div class="read-more"><div class="content">'.$content.'</div><div class="toggle"><div class="inner">Read more</div></div></div>';
}
add_shortcode( 'readmore', 'read_more' );

//----------------------------------------------------------------------------------
// test to remove wordpress fuzzy redirect
remove_filter('template_redirect', 'redirect_canonical');

//-------------------------------------------------------------------------------------------------
// remove spans from Contact Form 7
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});

//----------------------------------------------------------------------------------------------------
// slugify function - used to build anchor links etc

function slugify($string) {
	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

//-------------------------------------------------------------------------------------------------------
// Enable styles dropdown, WYSIWYG styles
add_filter( 'mce_buttons_2', 'fb_mce_editor_buttons' );
function fb_mce_editor_buttons( $buttons ) {

	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}


/**
* Add styles/classes to the "formats" drop-down
*/
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );
function fb_mce_before_init( $settings ) {

	$style_formats = array(
		array(
			'title' => 'Intro Text',
			'selector' => 'p',
			'classes' => 'intro-text',
			'styles' => array(
				'color' => 'inherit'
			)
		),
		array(
			'title' => 'Heading Text',
			'selector' => 'p',
			'classes' => 'heading-text',
			'styles' => array(
				'color' => 'inherit'
			)
		),
		array(
			'title' => 'Title Text',
			'selector' => 'p',
			'classes' => 'title-text',
			'styles' => array(
				'color' => 'inherit'
			)
		)
	);

	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}


//------------------------------------------------------------------------------
// completely remove comments functionality from wordpress

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}

// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}

// Removes from admin bar
function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


//------------------------------------------------------------------------------
// custom exceprt length (global)
function custom_excerpt_length($length){
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// remove brackets from excerpt elipsis
function excerpt_elipsis($content) {
	return str_replace('[&hellip;]', '...', $content);
}
add_filter('the_excerpt', 'excerpt_elipsis');

//-------------------------------------------------------------------------------
// add maintenance mode to site
//
// // Activate WordPress Maintenance Mode
// function wp_maintenance_mode() {
// 	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
// 		wp_die('<h1>Website under Maintenance</h1><br />We are performing scheduled maintenance. We will be back online shortly!');
// 	}
// }
// add_action('get_header', 'wp_maintenance_mode');

//------------------------------------------------------------------------------

// remove p tags from around images in WYSIWYG
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

//------------------------------------------------------------------------------

// function that runs when shortcode is called
function cookie_status() {

 if (cn_cookies_accepted()) {
	 $message = '<p>Consent Accepted</p>';
 } else {
	 $message = '<p>Consent Refused</p>';
 }

return $message;
}
// register shortcode
add_shortcode('cookie_status', 'cookie_status');
