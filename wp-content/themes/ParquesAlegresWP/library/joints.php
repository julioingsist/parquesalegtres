<?php
/* Welcome to joints :)
This is the core joints file where most of the
main functions & features reside. If you have
any custom functions, it's best to put them
in the functions.php file.

*/

/*********************
LAUNCH joints
Let's fire off all the functions
and tools. I put it up here so it's
right up top and clean.
*********************/

// we're firing all out initial functions at the start
add_action('after_setup_theme','joints_start', 16);

function joints_start() {

    // launching operation cleanup
    add_action('init', 'joints_head_cleanup');
    // remove WP version from RSS
    add_filter('the_generator', 'joints_rss_version');
    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'joints_remove_wp_widget_recent_comments_style', 1 );
    // clean up comment styles in the head
    add_action('wp_head', 'joints_remove_recent_comments_style', 1);
    // clean up gallery output in wp
    add_filter('gallery_style', 'joints_gallery_style');

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'joints_scripts_and_styles', 999);
    // ie conditional wrapper

    // launching this stuff after theme setup
    joints_theme_support();

    // adding sidebars to Wordpress (these are created in functions.php)
    add_action( 'widgets_init', 'joints_register_sidebars' );
    // adding the joints search form (created in functions.php)
    add_filter( 'get_search_form', 'joints_wpsearch' );

    // cleaning up random code around images
    add_filter('the_content', 'joints_filter_ptags_on_images');
    // cleaning up excerpt
    add_filter('excerpt_more', 'joints_excerpt_more');

} /* end joints start */

/*********************
WP_HEAD GOODNESS
The default wordpress head is a mess.
Let's clean it up by removing all the junk we don't need.
*********************/

function joints_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
  // remove WP version from css
  add_filter( 'style_loader_src', 'joints_remove_wp_ver_css_js', 9999 );
  // remove Wp version from scripts
  add_filter( 'script_loader_src', 'joints_remove_wp_ver_css_js', 9999 );

} /* end Joints head cleanup */

// remove WP version from RSS
function joints_rss_version() { return ''; }

// remove WP version from scripts
function joints_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

// remove injected CSS for recent comments widget
function joints_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

// remove injected CSS from recent comments widget
function joints_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

// remove injected CSS from gallery
function joints_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function joints_scripts_and_styles() {
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  if (!is_admin()) {

    // modernizr (without media query polyfill)
    wp_register_script( 'parquesa-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.foundation.js', array(), '2.5.3', false );

    // register main stylesheet
    wp_register_style( 'parquesa-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '', 'all' );
    wp_register_style( 'parquesa-font-alegreya', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900|Alegreya+Sans:400,300,500,700,800,900', array(), '', 'all' );
    wp_register_style( 'parquesa-stylesheet', get_template_directory_uri() . '/library/css/style.css', array(), '', 'all' );


    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    //adding scripts file in the footer
    wp_register_script( 'scripts-js', get_template_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-flexslider', get_template_directory_uri() . '/library/js/libs/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-quees-js', get_template_directory_uri() . '/library/js/scripts-quees.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-como-mejorar-js', get_template_directory_uri() . '/library/js/scripts-como-mejorar.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-como-apoyar-js', get_template_directory_uri() . '/library/js/scripts-como-apoyar.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-como-proveer-js', get_template_directory_uri() . '/library/js/scripts-como-proveer.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-informacion-parques-js', get_template_directory_uri() . '/library/js/scripts-informacion-parques.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-alta-parque-js', get_template_directory_uri() . '/library/js/scripts-alta-parque.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-success-case-js', get_template_directory_uri() . '/library/js/scripts-success-case.js', array( 'jquery' ), '', true );

    wp_register_script( 'scripts-single-js', get_template_directory_uri() . '/library/js/scripts-single.js', array( 'jquery' ), '', true );

    // enqueue styles and scripts
    wp_enqueue_script( 'parquesa-modernizr' );
    wp_enqueue_script ('foundation-js');
    wp_enqueue_style( 'parquesa-font-awesome' );
    wp_enqueue_style( 'parquesa-font-alegreya' );
    wp_enqueue_style( 'parquesa-stylesheet' );
     wp_enqueue_style( 'foundation-icons' );

    $wp_styles->add_data( 'parquesa-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

    /*
    I recommend using a plugin to call jQuery
    using the google cdn. That way it stays cached
    and your site will load faster.
    */

    if ( is_page_template('page-quees.php') ) {
      // Returns true when 'page-quees.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-quees-js' );
    } else if ( is_page_template('page-como-mejorar.php') ) {
      // Returns true when 'page-como-mejorar.php' is being used.
      wp_enqueue_script( 'scripts-como-mejorar-js' );
    } else if ( is_page_template('page-como-apoyar.php') ) {
      // Returns true when 'page-como-apoyar.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-como-apoyar-js' );
    } else if ( is_page_template('page-como-proveer.php') ) {
      // Returns true when 'page-como-proveer.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-como-proveer-js' );
    } else if ( is_page_template('page-informacion-parques.php') ) {
      // Returns true when 'page-informacion-parques.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-informacion-parques-js' );
    } else if ( is_page_template('page-alta-parque.php') ) {
      // Returns true when 'page-alta-parque.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-alta-parque-js' );
    } else if ( is_singular( 'success_case' ) ) {
      // Run some code if viewing a singular success-case.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-success-case-js' );
    } else if ( is_single() ) {
      // Returns true when 'single.php' is being used.
      wp_enqueue_script( 'scripts-flexslider' );
      wp_enqueue_script( 'scripts-single-js' );
    } else {
      // Returns false when 'page-quees.php' is not being used.
      wp_enqueue_script( 'scripts-js' );
    }

  }
}


//Replace jQuery with Google CDN jQuery

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

/*********************
THEME SUPPORT
*********************/

// Adding WP 3+ Functions & Theme Support
function joints_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support('post-thumbnails');

	// default thumb size
	set_post_thumbnail_size(125, 125, true);

	// rss
	add_theme_support('automatic-feed-links');

	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/

	// adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);

	// wp menus
	add_theme_support( 'menus' );

} /* end joints theme support */

/*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using joints_related_posts(); )
function joints_related_posts() {
	echo '<ul id="parquesa-related-posts">';
	global $post;
	$tags = wp_get_post_tags($post->ID);
	if($tags) {
		foreach($tags as $tag) { $tag_arr .= $tag->slug . ','; }
        $args = array(
        	'tag' => $tag_arr,
        	'numberposts' => 5, /* you can change this to show more */
        	'post__not_in' => array($post->ID)
     	);
        $related_posts = get_posts($args);
        if($related_posts) {
        	foreach ($related_posts as $post) : setup_postdata($post); ?>
	           	<li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	        <?php endforeach; }
	    else { ?>
            <?php echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'ParquesAlegres' ) . '</li>'; ?>
		<?php }
	}
	wp_reset_query();
	echo '</ul>';
} /* end joints related posts function */

/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function joints_page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	echo $before.'<nav class="page-navigation"><ul class="pagination">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = __( "First", 'ParquesAlegres' );
		echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
	}
	echo '<li class="bpn-prev-link">';
	previous_posts_link('<<');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="current"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="bpn-next-link">';
	next_posts_link('>>');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = __( "Last", 'ParquesAlegres' );
		echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
	}
	echo '</ul></nav>'.$after."";
} /* end page navi */

/*********************
ADD FOUNDATION FEATURES TO WORDPRESS
*********************/
// Add "has-dropdown" CSS class to navigation menu items that have children in a submenu.
function nav_menu_item_parent_classing( $classes, $item )
{
    global $wpdb;

$has_children = $wpdb -> get_var( "SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='" . $item->ID . "'" );

    if ( $has_children > 0 )
    {
        array_push( $classes, "has-dropdown" );
    }

    return $classes;
}

add_filter( "nav_menu_css_class", "nav_menu_item_parent_classing", 10, 2 );

//Deletes empty classes and changes the sub menu class name
    function change_submenu_class($menu) {
        $menu = preg_replace('/ class="sub-menu"/',' class="dropdown"',$menu);
        return $menu;
    }
    add_filter ('wp_nav_menu','change_submenu_class');


//Use the active class of the ZURB Foundation for the current menu item. (From: https://github.com/milohuang/reverie/blob/master/functions.php)
function required_active_nav_class( $classes, $item ) {
    if ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );

// Search Form
function joints_wpsearch($form) {
	$form = '
  <form class="search-form search-form--alt" role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
      <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Buscar en el sitio...','ParquesAlegres').'" />
      <button id="searchsubmit" value="'. esc_attr__('Search') .'" />
          <i class="fa fa-search"></i>
      </button>
  </form>';
	return $form;
} // don't remove this bracket!

/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs
function joints_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function joints_excerpt_more($more) {
	global $post;
	// edit here if you like
// return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'ParquesAlegres') . get_the_title($post->ID).'">'. __('Read more &raquo;', 'ParquesAlegres') .'</a>';
return '...';
}

/*
 * This is a modified the_author_posts_link() which just returns the link.
 *
 * This is necessary to allow usage of the usual l10n process with printf().
 */
function joints_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}

function remove_jetpack_styles(){
  wp_deregister_style('AtD_style'); // After the Deadline
  wp_deregister_style('jetpack-carousel'); // Carousel
  wp_deregister_style('grunion.css'); // Grunion contact form
  wp_deregister_style('the-neverending-homepage'); // Infinite Scroll
  wp_deregister_style('infinity-twentyten'); // Infinite Scroll - Twentyten Theme
  wp_deregister_style('infinity-twentyeleven'); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style('infinity-twentytwelve'); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style('noticons'); // Notes
  wp_deregister_style('post-by-email'); // Post by Email
  wp_deregister_style('publicize'); // Publicize
  wp_deregister_style('sharedaddy'); // Sharedaddy
  wp_deregister_style('sharing'); // Sharedaddy Sharing
  wp_deregister_style('stats_reports_css'); // Stats
  wp_deregister_style('jetpack-widgets'); // Widgets
}
add_action('wp_print_styles', 'remove_jetpack_styles');

?>