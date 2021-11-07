<section class="al-main-about" id="al-about">
    <div class="al-main-about-circles">
        <span class="al-main-about-circle"></span>
        <span class="al-main-about-circle"></span>
    </div>
    <div class="al-main-about-pegadas">
        <span class="al-main-about-pegada"
        style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-main-about-pegada"
        style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-main-about-pegada"
        style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-main-about-pegada"
        style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
    </div>
    <div class="al-main-title d-flex flex-row justify-content-center align-items-center">
        <span></span>
        <span></span>
        <h2>Quem Somos</h2>
    </div>
    <div class="container al-main-about-content d-flex flex-row justify-content-center align-items-center">
        <div class="row gx-0">
            <div class="col p-5">
                <?php
                    $the_query = new WP_Query( array( 'pagename' => 'quem-somos' ) );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            the_excerpt();
                        }
                    } else {
                        echo "<p>Nenhum conteúdo disponível. É necessário criar uma página \"Quem Somos\" com o slug ('quem-somos').</p>";
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();

                ?>
            </div>
        </div>
    </div>
</section>
