<?php 

//Dymanic title
function expecto_theme_support(){
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','expecto_theme_support');


##########################
//SVG Support
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
add_filter('upload_mimes', 'add_file_types_to_uploads');


##########################
//Wordpress Menu
function expecto_menus() {

  $location = array(
    'primary' => "Menu primary" //local que o menu será inserido
  );
  register_nav_menus($location);

}
add_action('init', 'expecto_menus');


##########################
//Dymanic CSS
function expecto_register_styles() {
  //Get the style.css version dynamiclly
  $version = wp_get_theme()->get('Version');
  // wp_enqueue_style( 'expecto-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all');
  wp_enqueue_style( 'expecto-fontAwesome', "https://use.fontawesome.com/releases/v5.15.1/css/all.css", array(), '5.15.1', 'all');
  //expecto-style is dependent of expecto-bootstrap
  // wp_enqueue_style( 'expecto-style', get_template_directory_uri() . "/style.css", array('expecto-bootstrap'), $version, 'all');
  wp_enqueue_style( 'expecto-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
// }
}

add_action( 'wp_enqueue_scripts', 'expecto_register_styles');

##########################
//Dymanic JS
function expecto_register_scripts() {
  //true loads on the footer, false loads on the header
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script( 'expecto-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '4.5.2' , true);
  wp_enqueue_script( 'expecto-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2' , true);
  wp_enqueue_script( 'expecto-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js", array(), '4.5.2' , true);
  wp_enqueue_script( 'expecto-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version , true);
  
}

add_action( 'wp_enqueue_scripts', 'expecto_register_scripts');

##########################
//Dymanic JS
?>