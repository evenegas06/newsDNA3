<?php

function agregar_css_js() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style('font-marcellus', 'https://fonts.googleapis.com/css?family=Comfortaa|Marcellus|Merriweather+Sans|Nunito|Questrial|Varela+Round&display=swap');
  //wp_enqueue_style('fontMarcellus', get_template_directory_uri() . '/assets/css/font.css');

  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16.0', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('popper'), '4.5.0', true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('bootstrap-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');

function blueWeb_setup(){
  //Soporte imagenes destacadas 
  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'blueWeb_setup');


//Agregar sidebar
function registrar_widgets(){
  register_sidebar(array(
    'id' => 'widgets-derecha',
    'name' => __('Widgets derecha'),
    'description' => __('Arrastra lo que quieras'),
    'before_widget' => '<div class="card-body d-none d-lg-block">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4><hr>'
  ));
}
add_action('widgets_init', 'registrar_widgets');

//Registrar Menús
function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu superior' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 /* *********************** */
 
//  function dcms_modify_order_fields( $fields ){
//    $val = $fields['comment'];
//    unset($fields['comment']);
 
//    $fields += array('comment' => $val );
 
//    return $fields;
//  }
//  add_filter( 'comment_form_fields', 'dcms_modify_order_fields' );

?>