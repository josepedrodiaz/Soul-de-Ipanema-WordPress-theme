<?php
//translation domain
load_theme_textdomain( 'souldeipanema', TEMPLATEPATH.'/languages' );

//Remove Scripts
add_action( 'wp_print_scripts', 'de_script', 100 );
function de_script() {
	if ( !is_admin() ){	
		//Remove jQuery
	    wp_dequeue_script( 'jquery' );
	    wp_deregister_script( 'jquery' );
	}
}
//Register menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Add claa to active menu item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

//to Enable Featured Images
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

//WMPL lang Selector
function langSelector(){
  $langList = icl_get_languages('skip_missing=1'); 
  //print_r($langList);
  echo "<ul>";
  foreach ($langList as $lang) {
      $langName  = substr (strtolower ($lang["native_name"]), 0, 3);
      $langLink = $lang["url"];
      if ($lang["active"] == 1) {$class = "activeLang";}else{$class = "noActiveLang";}
      echo "<li class='$class'><a href='" . $langLink . "'>" . $langName . "</a></li>";
  }
  echo "</ul>";
  
}

//Allow SVG file upload
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Add admin menu item for Services
add_action('admin_menu', 'services_menu');
function services_menu() {
add_submenu_page('edit.php', 'Services', 'Services', 'manage_options', 'edit.php?category_name=services' ); }

  /////////////////////////////////
 ///// SINGLE Blog post template
/////////////////////////////////
/**
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');

/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;

/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :

if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

endforeach;

}

