<?php
// Se tiver só código de php em um arquivo não precisa fechar a tag do php

function animallife24h_customizer($wp_customize) {

  // Copyright

  $wp_customize->add_section(
    'sec_copyright', array(
      'title' => __('Copyright', 'animallife24h'),
      'description' => __('Copyright Section', 'animallife24h')
    )
  );

  $wp_customize->add_setting(
    'set_copyright', array(
      'type' => 'theme_mod',
      'default' => __('Copyright X - All rights reserved', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_copyright', array(
      'label' => __('Copyright', 'animallife24h'),
      'description' => __('Choose whether to show the Services section or not', 'animallife24h'),
      'section' => 'sec_copyright',
      'type' => 'text'
    )
  );

  // Contatos

  $wp_customize->add_section(
    'sec_contacts', array(
      'title' => __('Main Contacts', 'animallife24h'),
      'description' => __('Main contacts area. Here you set the mainly comunication channels: Phone, Cell, Youtube, Instagram, E-mail', 'animallife24h')
    )
  );

  // Telephone

  $wp_customize->add_setting(
    'set_phone', array(
      'type' => 'theme_mod',
      'default' => __('556100000000', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_phone', array(
      'label' => __('Telephone', 'animallife24h'),
      'description' => __('Set the main telephone', 'animallife24h'),
      'section' => 'sec_contacts',
      'type' => 'text'
    )
  );

  // Cell

  $wp_customize->add_setting(
    'set_cell', array(
      'type' => 'theme_mod',
      'default' => __('556100000000', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_cell', array(
      'label' => __('Cellphone', 'animallife24h'),
      'description' => __('Set the main cellphone', 'animallife24h'),
      'section' => 'sec_contacts',
      'type' => 'text'
    )
  );

  // E-mail

  $wp_customize->add_setting(
    'set_email', array(
      'type' => 'theme_mod',
      'default' => __('email@email.com', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_email', array(
      'label' => __('E-mail', 'animallife24h'),
      'description' => __('Set the main e-mail', 'animallife24h'),
      'section' => 'sec_contacts',
      'type' => 'text'
    )
  );

  // Instagram

  $wp_customize->add_setting(
    'set_insta', array(
      'type' => 'theme_mod',
      'default' => __('https://www.instagram.com/<account>/', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_insta', array(
      'label' => __('Telephone', 'animallife24h'),
      'description' => __('Set the main telephone', 'animallife24h'),
      'section' => 'sec_contacts',
      'type' => 'text'
    )
  );

  // Youtube

  $wp_customize->add_setting(
    'set_youtube', array(
      'type' => 'theme_mod',
      'default' => __('https://www.youtube.com/channel/<account>', 'animallife24h'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_youtube', array(
      'label' => __('Youtube', 'animallife24h'),
      'description' => __('Set the main youtube channel', 'animallife24h'),
      'section' => 'sec_contacts',
      'type' => 'text'
    )
  );

}

add_action('customize_register', 'animallife24h_customizer');
