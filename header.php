<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php  bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <header class="al-header">
      <nav class="al-top-nav-bar navbar navbar-expand-lg d-none d-md-flex">
        <div class="container">
          <div class="w-50">
            <span class="nav-item me-2">
              <a target='_blank' href="tel: (61) 3542-4076"><i class="bi bi-telephone-fill" role="img" aria-label="Telefone"></i> (61) 3542-4076</a>
            </span>
            <span class="nav-item m-2">
              <a target='_blank' href="https://wa.me/5561996853227"><i class="bi bi-whatsapp" role="img" aria-label="Whatsapp"></i> (61) 9.9685-3227 </a>
            </span>
          </div>
          <div class="w-50 text-end">
            <span class="nav-item m-2">
              <a target='_blank' href="mailto: animallifecontato@gmail.com"><i class="bi bi-envelope-fill" role="img" aria-label="Email"></i></a>
            </span>
            <span class="nav-item m-2">
              <a target='_blank' href="https://www.instagram.com/animallife24h/"><i class="bi bi-instagram" role="img" aria-label="Instagram"></i></a>
            </span>
            <span class="nav-item ms-2">
              <a target='_blank' href="https://www.youtube.com/channel/UCgDi63POKCY6MzlytsfbfHw"><i class="bi bi-youtube" role="img" aria-label="Youtube"></i></a>
            </span>
          </div>
        </div>
      </nav>
    </header>
    <nav class="al-main-menu navbar navbar-expand-sm sticky-top fixed-top navbar-light">
      <div class="container">
        <a class="navbar-brand al-brand" href="<?php esc_url( $logo[0] )?>">
          <?php if ( function_exists( 'the_custom_logo' ) ) {
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            if ( has_custom_logo() ) {
              echo '<img class="img-fluid" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
          }?>
        </a>
        <div class="al-brand-title me-auto">
          <h1>Centro Avançado<br/>
            de Especialidades Veterinárias</h1>
        </div>
        <button class="ms-auto navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <?php wp_nav_menu(array(
            'theme_location' => 'my_main_menu',
            'container' => 'nav',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarMainMenu',
            'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">%3$s</ul>')
          );?>

      </div>
    </nav>
