<?php
  /**
   * index.php
   * style.css (Theme Name: My Theme Author: My Navee kumar) -> activate theme
   * screenshot.png (1200-w * 900-h)
   * functions.php  
   * header.php (wp_head())
   * footer.php (wp_footer()) 
   * single.php
   * archieve.php (shows all of the post)
   * front-page.php (Homepage)
   * search.php
   * 404.php
   */

   //video no.3
  function load_css(){

    wp_register_style(
      'bootstrap',
      get_template_directory_uri() . '/css/bootstrap.min.css',
      array(),
      false,
      'all');

    wp_enqueue_style('bootstrap');
    
    wp_register_style(
      'main',
      get_template_directory_uri() . '/css/main.css',
      array(),
      false,
      'all');

    wp_enqueue_style('main');
  }

  add_action(
      'wp_enqueue_scripts',
      'load_css'
    );

    function load_js(){
    wp_register_script(
      'bootstrap', 
      // get_template_directory_uri(). '/js/bootstrap.min.js',
      get_template_directory_uri(). '/js/bootstrap.bundle.min.js',
      array('jquery'),
      false,
      true
    );
    wp_enqueue_script('bootstrap');
  }
  

  add_action(
    'wp_enqueue_scripts', 
    'load_js'
  );

/*
    =========================
      Theme support function, Giving theme the abilty of below features. Activating Theme options
    =========================
*/
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );
  add_theme_support('post-formats', array('aside','image','video'));
  add_theme_support('widgets');

/*
    =====================================
      Activate Menu
    =====================================
*/

  register_nav_menus(

    array(
      'top-menu' =>'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location'
    )
  );

  //Custom image size

  add_image_size('blog-large', 800, 400, true);
  add_image_size('blog-small', 300, 200, true);

  //Register Sidebars

  function my_sidebars(){

        register_sidebar(
            array(
              'name' => 'Page Sidebar',
              'id' => 'page-sidebar',
              'before_title' => '<h4> class="widgets-title"',
              'after_widgets' => '</h4>'

            )
        );
        register_sidebar(
            array(
              
              'name' => 'Blog Sidebar',
              'id' => 'blog-sidebar',
              'before_title' => '<h4> class="widgets-title"',
              'after_widgets' => '</h4>'

            )
        );
  }

  add_action('widgets_init', 'my_sidebars');


  function my_first_post_type(){

    $args = array(
      'labels' => array(
        'name' => 'Cars',
        'singular_name' => 'Car',
      ),
      'hierarchical' => true, // if we make it true, it will behave as pages.
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-multisite',
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      // 'rewrite' => array('slugs' => 'cars')
    );

    register_post_type('cars', $args);

  }

  add_action('init', 'my_first_post_type');

  
  function my_first_taxonomy(){
        $args = array(
          'labels' => array(
            'name' =>'Brands',
            'singular_name' => 'Brand',
          ),
            'public' => true,
            'hierarchical' => true, // True change it to category, False change it to tag.
          
        );

        register_taxonomy('brands', array('cars'), $args);
  }

  add_action('init', 'my_first_taxonomy');

/* ------------------------------------------------------------------- */
/* Hawthorn School */


function homepage_hero_slider_post_type(){

  $args = array(
    'labels' => array(
      'name' => 'HomepageSliders',
      'singular_name' => 'HomepageSlider'
    ),
    'description' => 'Create homepage slider images with titles and short descriptions.',
    'public' => true,
    'hierarchical' => false,
    'exclude_from_search'=> true,
    'supports'=> array(
      'title', 'editor','revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'
    ),
    'menu_icon' => 'images',
    'has_archive' => true,

  );

  register_post_type("'HomepageSliders", $args);
}
add_action('init', 'homepage_hero_slider_post_type');

function homepage_welcome_message_post_type(){

  $args = array(
    'labels' => array(
      'name' => 'Welcomemessages',
      'singular_name' => 'Welcomemessage'
    ),
    'descripition' => 'Create a homepage welcome message with an image, titles, and short descriptions.',
    'public' => true,
    'hierarchical' => false,
    'pages' => false,
    'exclude_from_search'=> true,
    'supports' => array('title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats'),
    'menu_icon' => 'dashicons-welcome-write-blog',
    'has_archive' => true,
    
  );

  register_post_type('Welcomemessages', $args);
}
add_action('init', 'homepage_welcome_message_post_type');

function hawthorn_video_post_type(){
  $args = array(
    'labels' => array(
      'name' => 'HawthornVideos',
      'singular_name' => 'HawthornVideo'),
      'description' => 'Upload a video with a title and a short description.',
      'public' => true,
      'hierarchical' => false,
      'pages' => false,
      'exclude_from_search' => true,
      'supports' => array('title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats'),
      'menu_icon' => 'images',
      'has_archive' => true
    );

  register_post_type('HawthornVideos', $args);
}
add_action('init', 'hawthorn_video_post_type');

function hawthorn_news_and_event_gallary_post_type(){

  $agrs =  array(

    'labels' => array(
      'name' => 'HawthornEvents',
      'singular_name' => 'HawthornEvent'),
      'description' => 'Create events and upload events related a images and video with a title and a short description.',
      'public' => true,
      'hierarchical' => false,
      'pages' => false,
      'exclude_from_search' => true,
      'supports' => array('title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats'),
      'menu_icon' => 'images',
      'has_archive' => true // display as post
  );
  register_post_type('HawthornEvents', $agrs);
}

add_action('init', 'hawthorn_news_and_event_gallary_post_type');

/*
    =====================================
      Include walker For bootstrap Navbar
    =====================================
*/

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'hawthorn' ),
) );

function prefix_modify_nav_menu_args( $args ) {
  return array_merge( $args, array(
      'walker' => new WP_Bootstrap_Navwalker(),
  ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
/*
      ENDS walker For bootstrap Navbar
    =====================================
*/