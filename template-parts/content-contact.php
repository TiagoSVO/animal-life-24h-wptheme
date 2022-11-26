<section id="al-contact">
    <div class="al-contact-circles">
        <span class="al-contact-circle"></span>
        <span class="al-contact-circle"></span>
    </div>
    <div class="al-contact-pegadas">
        <span class="al-contact-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-contact-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-contact-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-contact-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
    </div>
    <h2>Fale Conosco</h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col al-contact-line-divider-right">
                <div class="al-contact-content-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="91" title="Formulário de contato 1" class="row g-3"]'); ?>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="al-contact-content-wrap d-grid">
                        <div class="row al-contact-content-info">
                            <div class="col">
                                <p><strong>HORÁRIO DE ATENDIMENTO</strong></p>
                                <p>Segunda a Domingo 24h</p>
                            </div>
                        </div>
                        <div class="row al-contact-content-info">
                            <div class="col">
                                <p><strong>ENDEREÇO</strong></p>
                                <p>
                                    <a target="_blank" href="https://www.google.com/maps/dir//Animal+Life+24+hs+-+Centro+Avan%C3%A7ado+de+Especialidades+Veterin%C3%A1rio+QNJ+26+Lote+12+Lojas+01%2F02+Taguatinga+Norte+Bras%C3%ADlia+-+DF,+72140-260/@-15.8173406,-48.08262,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x935a3b856716ec49:0x70dca8f7c7ec0d2b!2m2!1d-48.08262!2d-15.8173406">Quadra QNJ 26 12, LOJA 01/02 Taguatinga Norte - Taguatinga/DF</a>
                                </p>
                            </div>
                        </div>
                        <div class="row al-contact-content-info">
                            <div class="col">
                                <p><strong>TELEFONES</strong></p>
                                <p><a target='_blank' href="tel: <?php echo get_formatted_global_phone(); ?>"><?php echo get_formatted_global_phone(); ?></a> | <a target='_blank' href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('set_cell'); ?>&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es."><?php echo get_formatted_global_celphone(); ?></a></p>
                            </div>
                        </div>
                        <div class="row al-contact-content-info">
                            <div class="col">
                                <p><strong>E-MAIL</strong></p>
                                <p>
                                    <a href="<?php echo get_theme_mod('set_email'); ?>"><?php echo get_theme_mod('set_email'); ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="row al-contact-content-info">
                            <div class="col">
                                <p><strong>REDES SOCIAIS</strong></p>
                                <div class="al-contact-redes-sociais">
                                    <a target='_blank' href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('set_cell'); ?>&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es."><i class="bi bi-whatsapp" role="img" aria-label="Whatsapp - <?php echo get_formatted_global_celphone(); ?>"></i></a>
                                    <a target='_blank' href="<?php echo get_theme_mod('set_insta'); ?>"><i class="bi bi-instagram" role="img" aria-label="Instagram"></i></a>
                                    <a target='_blank' href="<?php echo get_theme_mod('set_youtube'); ?>"><i class="bi bi-youtube" role="img" aria-label="Youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
