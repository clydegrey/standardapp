<?php
/* ======================================= */
/* Universal Theme Functions */
/* ======================================= */
if ( ! isset( $content_width ) ) $content_width = 1140; /* pixels */

/* Makes theme available for translation. */
add_action('after_setup_theme', 'universal_theme_setup');
function universal_theme_setup(){

load_theme_textdomain( 'universal-wp', get_template_directory() . '/language' );
}


/*=======================================
  TGM Plugins Activations
=======================================*/
require_once get_template_directory() . '/framework/functions/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'universal_register_required_plugins' );
function universal_register_required_plugins() {

  $plugins = array(

    array(
      'name'            => 'Kirki Customizer', // The plugin name
      'slug'            => 'kirki', // The plugin slug (typically the folder name)
      'required'        => false, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),
     array(
      'name'            => 'Visual Composer', // The plugin name
      'slug'            => 'js_composer', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/js_composer.zip'), // The plugin source
      'required'        => false, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

    array(
      'name'            => 'Universal Shortcodes', // The plugin name
      'slug'            => 'universal-shortcodes', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/universal-shortcodes.zip'), // The plugin source
      'required'        => true, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

    array(
      'name'            => 'Universal Portfolio', // The plugin name
      'slug'            => 'universal-portfolio', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/universal-portfolio.zip'), // The plugin source
      'required'        => true, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

    array(
      'name'            => 'Universal Testimonials', // The plugin name
      'slug'            => 'universal-testimonials', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/universal-testimonials.zip'), // The plugin source
      'required'        => true, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
      'name'            => 'Universal Widgets', // The plugin name
      'slug'            => 'universal-widgets', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/universal-widgets.zip'), // The plugin source
      'required'        => true, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

    array(
      'name'            => 'Contact Form 7', // The plugin name
      'slug'            => 'contact-form-7', // The plugin slug (typically the folder name)
      'required'        => false, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

    array(
      'name'            => 'Envato Market', // The plugin name
      'slug'            => 'envato-market', // The plugin slug (typically the folder name)
      'source'          => esc_url('http://forbetterweb.com/universal/wp-content/plugins/envato-market.zip'), // The plugin source
      'required'        => false, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),

  );

  $config = array(
    'id'           => 'universal-wp',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
  );

  tgmpa( $plugins, $config );
}



/*-----------------------------------------------------------------------------------*/
/*	Universal Includes
/*-----------------------------------------------------------------------------------*/

include( get_template_directory() . '/framework/functions/theme-options.php');
include( get_template_directory() . '/framework/meta/metabox-class.php');
include( get_template_directory() . '/framework/meta/classes.php');
include( get_template_directory() . '/framework/functions/breadcrumbs.php');
include( get_template_directory() . '/framework/functions/sidebars.php');
if ( class_exists( 'WooCommerce' ) ) {
  include (get_template_directory() . '/framework/functions/woocommerce.php');
};


/*-----------------------------------------------------------------------------------*/
/*  Universal Image Size
/*-----------------------------------------------------------------------------------*/


add_image_size('universal_shop_main', 690, 810, true);
add_image_size('universal_shop_single', 555, 650, true);
add_image_size('universal_shop_thumbnail', 104, 122, true);


/*-----------------------------------------------------------------------------------*/
/*	Universal Register menu
/*-----------------------------------------------------------------------------------*/

if( !function_exists('universal_register_menu') ) {
  function universal_register_menu() {
    register_nav_menus(
      array(
      'menu' => esc_html__('Main Menu', 'universal-wp' ),
      'onepage-menu' => esc_html__('One Page Menu', 'universal-wp' )
      )
    );
  }
  add_action( 'init', 'universal_register_menu' );
}

/*
|--------------------------------------------------------------------------
| Universal Audio Function
|--------------------------------------------------------------------------
*/

if(!function_exists('universal_audio')) {
  function universal_audio($postid) {

    $single_audio_item = get_post_meta($postid, 'universal_external_audio_block', true);

    if(($single_audio_item != '')) {
      if( strpos($single_audio_item, 'soundcloud') ) {

        $id = $single_audio_item;

        echo '<div class="post-audio"> ' .$id. ' </div>';
      }
    }

  }
}


/*
|--------------------------------------------------------------------------
| Universal Video Function
|--------------------------------------------------------------------------
*/

if(!function_exists('universal_video')) {
  function universal_video($postid) {

    $single_video_item = get_post_meta($postid, 'universal_external_video_block', true);



        echo '<div class="post-video">'.$single_video_item.'</div>';

    }

  }

/*
|--------------------------------------------------------------------------
| Universal Gallery function
|--------------------------------------------------------------------------
*/

if ( !function_exists( 'universal_gallery' ) ) {
  function universal_gallery($postid) {

    $gallery_images = get_post_meta($postid, 'universal_gallery_block',true);

    if(!empty($gallery_images)) {

        echo '<div class="owl-carousel gallery-slider" id="gs-'.$postid.'">';

          foreach ($gallery_images as $gallery_item) {
            $item_url = $gallery_item['universal_gallery_post'];

              echo  '<img src="'. $item_url['url'] .'" class="img-responsive">';
          }

        echo  '</div>';
    }
  }
}


/*
|--------------------------------------------------------------------------
| Universal More Remove
|--------------------------------------------------------------------------
*/

add_filter( 'the_content_more_link', 'universal_modify_read_more_link' );
function universal_modify_read_more_link() {
return '';
};


/*
|--------------------------------------------------------------------------
| Remove more link function
|--------------------------------------------------------------------------
*/

function universal_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'universal_excerpt_more');

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
  wp_enqueue_script( 'comment-reply' );

/*
|--------------------------------------------------------------------------
| Theme Stylesheets
|--------------------------------------------------------------------------
*/

function universal_scripts_styles(){
  $theme_info = wp_get_theme();
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('universal-fonts', universal_fonts_url(), array(), null );
  wp_enqueue_style('universal-style', get_stylesheet_uri(), array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('universal-style-css', get_template_directory_uri() . '/assets/css/theme-style.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('fontawesome-icons', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('ionicons-icons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('swipebox', get_template_directory_uri() . '/assets/css/swipebox.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('universal-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), $theme_info->get( 'Version' )); 
  wp_enqueue_style('universal-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $theme_info->get( 'Version' )); 
}
add_action( 'wp_enqueue_scripts', 'universal_scripts_styles', 90 );



/*
|--------------------------------------------------------------------------
| Theme Scripts
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'universal_load_scripts' ) ) {
  function universal_load_scripts() {

    $theme_info = wp_get_theme(); 

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('viewportchecker', get_template_directory_uri() . '/assets/js/viewportchecker.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('fitvids',  get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/assets/js/jquery.smartmenus.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('swipebox', get_template_directory_uri() . '/assets/js/jquery.swipebox.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('isotope-custom', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/jquery.waitforimages.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('PageScroll2id', get_template_directory_uri() . '/assets/js/jquery.malihu.PageScroll2id.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('retina',  get_template_directory_uri() . '/assets/js/retina.min.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('universal-responsive', get_template_directory_uri() . '/assets/js/responsive.js', array('jquery'), $theme_info->get( 'Version' ), true);
    wp_enqueue_script('universal-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_info->get( 'Version' ), true);
    if(is_singular() && comments_open()) {wp_enqueue_script('comment-reply');}

  };
};
add_action('wp_enqueue_scripts', 'universal_load_scripts');






/*
|--------------------------------------------------------------------------
| Universal page menu
|--------------------------------------------------------------------------
*/

function universal_page_menu_args( $args ) {
  if ( ! isset( $args['show_home'] ) )
    $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'universal_page_menu_args' );

/*
|--------------------------------------------------------------------------
| Universal content navigation
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'universal_content_nav' ) ) :

function universal_content_nav( $html_id ) {
  global $wp_query;

  if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav id="<?php echo esc_attr($html_id) ?>" class="navigation" role="navigation">
      <div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span>'.esc_html__('Older posts', 'universal-wp' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( esc_html__( 'Newer posts', 'universal-wp' ) . '<span class="meta-nav">&rarr;</span>' ); ?></div>
    </nav>
  <?php endif;
}
endif;


/*
|--------------------------------------------------------------------------
| Universal comments
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'universal_comment' ) ) :
function universal_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
  ?>
  <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <p><?php esc_html_e( 'Pingback:', 'universal-wp' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( 'Edit', 'universal-wp' ), '<span class="edit-link">', '</span>' ); ?></p>
  <?php
      break;
    default :
    global $post;
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    <article id="comment-<?php comment_ID(); ?>" class="comment">
      <header class="comment-meta comment-author vcard">
        <?php
          echo get_avatar( $comment, 75 );
          printf( '<div class="author-card">%1$s</div>',
            get_comment_author_link(),
            ( $comment->user_id === $post->post_author ) ? '<span>' . esc_html__( 'Post author', 'universal-wp' ) . '</span>' : ''
          );
          printf( '<div class="comment-time">%3$s</div>',
            esc_url( get_comment_link( $comment->comment_ID ) ),
            get_comment_time( 'c' ),
            sprintf( esc_html__( '%1$s at %2$s', 'universal-wp' ), get_comment_date(), get_comment_time() )
          );
        ?>
      </header>

      <?php if ( '0' == $comment->comment_approved ) : ?>
        <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'universal-wp' ); ?></p>
      <?php endif; ?>

      <section class="comment-content comment">
        <?php comment_text(); ?>
        <?php edit_comment_link( esc_html__( 'Edit', 'universal-wp' ), '<div class="edit-link">', '</div>' ); ?>
        <div class="reply">
          <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'universal-wp' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div><!-- .reply -->
      </section><!-- .comment-content -->
    </article><!-- #comment-## -->
  <?php
    break;
  endswitch; // end comment_type check
}
endif;

function is_blog() {
  global $post;
  $posttype = get_post_type( $post );
  return ( ( $posttype == 'post' ) && ( is_home() || is_single() || is_archive() || is_category() || is_tag() || is_author() ) ) ? true : false;
}

function universal_fix_blog_link_on_cpt( $classes, $item, $args ) {
  if( !is_blog() ) {
    $blog_page_id = intval( get_option('page_for_posts') );
    if( $blog_page_id != 0 && $item->object_id == $blog_page_id )
      unset($classes[array_search('current_page_parent', $classes)]);
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'universal_fix_blog_link_on_cpt', 10, 3 );
/*
|--------------------------------------------------------------------------
| Universal post types and functions
|--------------------------------------------------------------------------
*/

function universal_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( "title-tag" );
  add_theme_support( "custom-header");
  add_theme_support( "custom-background");
  add_theme_support( 'post-formats', array( 'image', 'link', 'quote', 'video', 'audio', 'gallery' ) );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 680, 9999 ); // Unlimited height, soft crop
}

add_action( 'after_setup_theme', 'universal_setup' );




// post by views functionality
function universal_set_post_views($postID) {
    $count_key = 'universal_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function universal_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    universal_set_post_views($post_id);
}
add_action( 'wp_head', 'universal_track_post_views');

function universal_get_post_views($postID){
    $count_key = 'universal_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

/*-----------------------------------------------------------------------------------*/
/*  Add fullscreen check box to Featured Image 
/*-----------------------------------------------------------------------------------*/



function universal_featured_image_fullscreen( $content ) {
    global $post;
      $text = esc_html__('Fullscreen (only with Template: Visual Composer)', 'universal-wp');
      $id = 'featured_image_full';
      $value = esc_attr( get_post_meta( $post->ID, $id, true ) );
      $label = '<label for="' . $id . '" class="selectit"><input name="' . $id . '" type="checkbox" id="' . $id . '" value="' . $value . ' "'. checked( $value, 1, false) .'> ' . $text .'</label>';
      return $content .= $label;
}

add_filter( 'admin_post_thumbnail_html', 'universal_featured_image_fullscreen' );

  
function universal_save_featured_image_fullscreen( $post_id, $post, $update ) {
  
    $value = 0;
    if ( isset( $_REQUEST['featured_image_full'] ) ) {
        $value = 1;
    }
    // Set meta value to either 1 or 0
    update_post_meta( $post_id, 'featured_image_full', $value );
}
add_action( 'save_post', 'universal_save_featured_image_fullscreen', 10, 3 );

function universal_body_classes($classes) { 
global $post;
if (is_page()) {
    $id = 'featured_image_full';
    if(get_post_meta( $post->ID, $id, true )){$classes[] = 'fullscreen'; }
    return $classes; 
  } elseif (is_404()) {
      $classes[] = 'fullscreen error404';   
    return $classes;
  } elseif (is_admin_bar_showing()) {
      $classes[] = 'admin-bar';   
    return $classes;
  }
  return $classes;
};
add_filter('body_class', 'universal_body_classes');


/*-----------------------------------------------------------------------------------*/
/*  Exclude Pages from Search Results
/*-----------------------------------------------------------------------------------*/

function universal_search_filter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
};
add_filter('pre_get_posts','universal_search_filter');


/*-----------------------------------------------------------------------------------*/
/*  Connect Google Fonts
/*-----------------------------------------------------------------------------------*/


function universal_fonts_url() {
$fonts_url = '';
 
/* Translators: If there are characters in your language that are not
* supported by Lora, translate this to 'off'. Do not translate
* into your own language.
*/
$raleway = _x( 'on', 'Raleway font: on or off', 'universal-wp' );
$open_sans = _x( 'on', 'Roboto Mono font: on or off', 'universal-wp' );
$caveat = _x( 'on', 'Caveat font: on or off', 'universal-wp' );
$great_vibes = _x( 'on', 'Great Vibes font: on or off', 'universal-wp' );
 
if ( 'off' !== $raleway || 'off' !== $open_sans || 'off' !== $caveat || 'off' !== $great_vibes ) {
$font_families = array();
 
if ( 'off' !== $raleway ) {
$font_families[] = 'Raleway:100,200,300,400,500,600,700,800,900';
}
 
if ( 'off' !== $open_sans ) {
$font_families[] = 'Roboto Mono:100,400';
}

if ( 'off' !== $caveat ) {
$font_families[] = 'Caveat';
}

if ( 'off' !== $great_vibes ) {
$font_families[] = 'Great Vibes';
}
 
$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext' ),
);
 
$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
 
return esc_url_raw( $fonts_url );
}

/*-----------------------------------------------------------------------------------*/
/*	Other Functions
/*-----------------------------------------------------------------------------------*/

add_filter('wp_list_categories', 'universal_add_span_cat_count');
function universal_add_span_cat_count($links) {
$links = str_replace('(', '<span class="universal_cat_count">', $links);
$links = str_replace(')', '</span>', $links);
return $links;
}

if(get_theme_mod('universal_menu_select') == 'onepage')  { 
  function universal_add_classes_a($atts, $item, $args) {
      $class = 'page-scroll';
      $atts['class'] = $class;
      return $atts;
  }
add_filter('nav_menu_link_attributes','universal_add_classes_a', 10, 3 );
};

function universal_MenuFallback ($args) {
  echo '<ul id="menu-all-pages" class="nav navbar-nav"><li id="menu-item-968" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-968"><a href="'. get_home_url() .'">' . esc_html__('Home', 'universal-wp') . '</a></li>
</ul>';
}


class Universal_My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = Array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}