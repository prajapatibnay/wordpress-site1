<?php
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['exe'] = 'program/exe';
  $mimes['dwg'] = 'image/dwg';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_enqueue_styles', PHP_INT_MAX);

function twentyseventeen_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

// Header Custom Logo
function rogerio_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'rogerio_custom_logo_setup' );
 // Header Custom Logo

 // Register a custom post type called 'Banner'
function wptutsplus_create_post_type() {
  $labels = array(
      'name' => __( 'Banners' ),
      'singular_name' => __( 'banner' ),
      'add_new' => __( 'New banner' ),
      'add_new_item' => __( 'Add New banner' ),
      'edit_item' => __( 'Edit banner' ),
      'new_item' => __( 'New banner' ),
      'view_item' => __( 'View banner' ),
      'search_items' => __( 'Search banners' ),
      'not_found' =>  __( 'No banners Found' ),
      'not_found_in_trash' => __( 'No banners found in Trash' ),
  );
  $args = array(
      'labels' => $labels,
      'has_archive' => true,
      'public' => true,
      'hierarchical' => false,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'custom-fields',
          'thumbnail',
          'page-attributes'
      ),
      'taxonomies' => array( 'post_tag', 'category'),
  );
  register_post_type( 'banner', $args );
}
add_action( 'init', 'wptutsplus_create_post_type' );

// function to show home page banner using query of banner post type
function wptutsplus_home_page_banner() {
 
  // start by setting up the query
  $query = new WP_Query( array(
      'post_type' => 'banner',
      'posts_per_page' => 1,
  ));

  // now check if the query has posts and if so, output their content in a banner-box div
  if ( $query->have_posts() ) { ?>
    <div class="banner-box">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'banner' ); ?>>	
           <img src=" <?php the_post_thumbnail_url();?>"/>
        </div>
        <?php endwhile; ?>
    </div>
<?php }
  wp_reset_postdata();
}
 // Register a custom post type called 'Banner'


// Dynamic Footer
function tutsplus_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'tutsplus' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );  
    
     
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
      'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
      'id' => 'third-footer-widget-area',
      'description' => __( 'The third footer widget area', 'tutsplus' ),
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );   
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'tutsplus_widgets_init' );
// Dynamic Footer