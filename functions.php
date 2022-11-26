<?php

// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas
function load_scripts(){
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true);
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '1.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function animallife24h_config() {
  register_nav_menus(
    array("my_main_menu" => __('Main Menu', 'animallife24h'),
          "footer_menu" => __('Footer Menu', 'animallife24h'))
  );

  $args = array(
    'height' => 400,
    'width'  => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo', array('height' => 936, 'width' => 1080));
  add_post_type_support('page', 'excerpt');
}
add_action('after_setup_theme', 'animallife24h_config', 0);

//Adiciona classe às tags <li> do my_main_menu
function add_class_li_main_menu( $classes, $item, $args ) {

    if ( 'my_main_menu' === $args->theme_location ) {
        // Verifica se a página atual é a mesma do item de menu
        if (in_array('current-menu-item', $classes) ){
          $classes[] = 'nav-item active';
        } else {
          $classes[] = "nav-item";
        }
    }

    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_class_li_main_menu' , 10, 4 );

//Adiciona classe às tags <a> do my_main_menu
function add_attrs_link_main_menu( $atts, $item, $args ) {

    if( $args->theme_location == 'my_main_menu' ) {

      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_attrs_link_main_menu', 10, 3 );

function animallife24h_sidebars() {
  register_sidebar(
    array(
      'name' => __('Services', 'animallife24h'),
      'id' => 'services',
      'description' => __('Services Area.', 'animallife24h'),
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
}
add_action('widgets_init', 'animallife24h_sidebars');

function get_formatted_global_celphone() {
  $cell_phone = get_theme_mod('set_cell');
  $cell_phone_numbers = preg_replace('/[^0-9]/','',$cell_phone);
  $char_size_cell_phone_numbers = strlen($cell_phone_numbers);
  $formated_cell_phone_numbers = '';
  if ($char_size_cell_phone_numbers == 13) {
    $country_code = substr($cell_phone_numbers, -13, 2);
    $area_code = substr($cell_phone_numbers, -11, 2);
    $point_number = substr($cell_phone_numbers, -9, 1);
    $first_four_numbers = substr($cell_phone_numbers, -8, 4);
    $last_four_numbers = substr($cell_phone_numbers, -4, 4);
    $formated_cell_phone_numbers = '('.$area_code.') '.$point_number.'.'.$first_four_numbers.'-'.$last_four_numbers;
  }
  return  $formated_cell_phone_numbers;
}

function get_formatted_global_phone() {
  $phone = get_theme_mod('set_phone');
  $phone_numbers = preg_replace('/[^0-9]/','',$phone);
  $char_size_phone_numbers = strlen($phone_numbers);
  $formated_phone_numbers = '';
  if ($char_size_phone_numbers == 12) {
    $country_code = substr($phone_numbers, -12, 2);
    $area_code = substr($phone_numbers, -10, 2);
    $first_four_numbers = substr($phone_numbers, -8, 4);
    $last_four_numbers = substr($phone_numbers, -4, 4);
    $formated_phone_numbers = '('.$area_code.') '.$first_four_numbers.'-'.$last_four_numbers;
  }
  return  $formated_phone_numbers;
}