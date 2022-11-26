<section id="al-footer-menu">
    <div class="al-footer-pegadas-left">

    </div>
    <div class="al-footer-pegadas-right">
        <span class="al-footer-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-footer-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-footer-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-footer-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col d-block">
                <div class="clearfix al-footer-menu-inner-col">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        if ( has_custom_logo() ) {
                          echo '<img class="al-footer-menu-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    }?>
                    <p> A nossa clínica dispõe de
                        uma excelente estrutura
                        para cuidar do seu melhor
                        amigo. Contamos com
                        uma equipe altamente
                        qualificada que vai tratar
                        do seu animal com muito
                        carinho e profissionalismo.
                    </p>
                </div>
                <div class="clearfix al-footer-menu-inner-col-divider ">
                    <hr/>
                </div>
                <nav class="al-footer-menu-inner-col">
                    <h5>Serviços</h5>
                    <ul>
                        <li><a href="#">Clínica</a></li>
                        <li><a href="#">Banho e Tosa</a></li>
                        <li><a href="#">Produtos & Medicações</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col">
                <nav class="al-footer-menu-inner-col">
                    <h5>Navegação</h5>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'container' => false,
                        'container_class' => '',
                        'container_id' => '',
                        'items_wrap' => '<ul>%3$s</ul>')
                      );?>
                </nav>
            </div>
            <div class="col">
                <div class="clearfix al-footer-menu-inner-col">
                    <h5>Contato</h5>
                    <p> Possuímos serviço de atendimento de
                        emergência 24Hs e se você não puder
                        trazer o seu animal, nós o pegamos para
                        você. Cada espaço de nossa clínica foi
                        pensado e montado exclusivamente
                        para oferecer a você e ao seu animal a
                        melhor experiência que vocês já vivenciaram
                        em uma clínica veterinária.
                    </p>
                    <br />
                    <h6>Atendimento</h6>
                    <p>Segunda-Feira a Domingo 24h</p>
                    <ul>
                        <li>
                            <a target='_blank' href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('set_cell'); ?>&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">
                                <i class="bi bi-whatsapp" role="img" aria-label="Whatsapp" ></i> <?php echo get_formatted_global_celphone(); ?>
                            </a>
                            |
                            <a target='_blank' href="tel: <?php echo get_formatted_global_phone(); ?>">
                                <i class="bi bi-telephone-fill" role="img" aria-label="Telefone" ></i> <?php echo get_formatted_global_phone(); ?>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="mailto: <?php echo get_theme_mod('set_email'); ?>">
                                <i class="bi bi-envelope-fill" role="img" aria-label="Email"></i> <?php echo get_theme_mod('set_email'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix al-footer-menu-inner-col-divider ">
                    <hr/>
                </div>
                <div class="al-footer-menu-inner-col">
                    <h5>MÍDIAS SOCIAIS</h5>
                    <ul>
                        <li>
                            <a target="_blank" href="<?php echo get_theme_mod('set_insta'); ?>">
                                <i class="bi bi-instagram" role="img" aria-label="Instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo get_theme_mod('set_youtube'); ?>">
                                <i class="bi bi-youtube" role="img" aria-label="Youtube"></i> Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
