<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209037744-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-209037744-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NLJMQ6F');</script> -->
    <!-- End Google Tag Manager -->

    <!-- Metatags -->

    <!-- Facebook e Whatsapp -->

    <!-- Nome do Site, Título, and Descrição -->
    <meta property="og:site_name" content="Animal Life 24h">
    <meta property="og:title" content="Centro Avançado de Especialidades Veterinária - Animal Life 24h">
    <meta property="og:description" content="Centro Avançado de Especialidades Veterinária - Animal Life 24h. Website criado como cartão de entrada para atender àqueles que precisam de serviços de veterinária de qualidade e com compromisso.">

    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/images/logo300.png' ?>">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="<?php echo get_site_url() ?>">

    <!-- MS Tile - para apps MS-->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/images/logo300.png' ?>">    

    <meta charset="<?php  bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLJMQ6F"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="al-header">
      <nav class="al-top-nav-bar navbar navbar-expand-lg d-none d-md-flex">
        <div class="container">
          <div class="w-50">
            <span class="nav-item me-2">
              <a target='_blank' href="tel: <?php echo get_formatted_global_phone()?>"><i class="bi bi-telephone-fill" role="img" aria-label="Telefone"></i> <?php echo get_formatted_global_phone()?></a>
            </span>
            <span class="nav-item m-2">
              <a target='_blank' href="https://s.tintim.app/whatsapp/32dd15b1-347a-442d-b8e4-21f5e73f079e/b794a52c-e00d-44eb-a0d3-afd3c0faf003"><i class="bi bi-whatsapp" role="img" aria-label="Whatsapp"></i> <?php echo get_formatted_global_celphone()?> </a>
            </span>
          </div>
          <div class="w-50 text-end">
            <span class="nav-item m-2">
              <a target='_blank' href="mailto: <?php echo get_theme_mod('set_email'); ?>"><i class="bi bi-envelope-fill" role="img" aria-label="Email"></i></a>
            </span>
            <span class="nav-item m-2">
              <a target='_blank' href="<?php echo get_theme_mod('set_insta'); ?>"><i class="bi bi-instagram" role="img" aria-label="Instagram"></i></a>
            </span>
            <span class="nav-item ms-2">
              <a target='_blank' href="<?php echo get_theme_mod('set_youtube'); ?>"><i class="bi bi-youtube" role="img" aria-label="Youtube"></i></a>
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
