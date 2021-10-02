<?php

// Carregando nossos scripts e folhas
function load_scripts(){
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true);
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '1.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');
