<section id="al-posts">
    <div class="al-posts-title text-center">
        <h2>Últimos Posts</h2>
    </div>
    <div class="al-posts-divider">
        <span></span>
        <span></span>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                $args = array(
                    'category_name__not_in' => 'main-carousel,sem-categoria',
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $the_query = new WP_Query( $args );

                if($the_query->have_posts()):
                    while($the_query->have_posts()): $the_query->the_post();

            ?>
                <div class="col">
                    <div class="card h-100 al-posts-card">
                        <div class="al-posts-card-image-wrap">
                            <div class="al-posts-card-data-wrap">
                                <div class="al-posts-card-data-day">
                                     <?php echo get_the_date('d')?>
                                </div>
                                <div class="al-posts-card-data-mounth">
                                    <?php echo get_the_date('M')?>
                                </div>
                            </div>
                            <div style=" background:url('<?php the_post_thumbnail_url(); ?>')" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title()?></h5>
                            <div class="al-posts-divider-card">
                                <span></span>
                            </div>
                            <?php the_excerpt() ?>
                            <br/>
                            <p class="card-text-bottom">
                                <a target="_blank" href="<?php the_permalink()?>">Leia mais...</a>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent al-posts-card-footer">
                            <small class="al-posts-card-footer-categories">
                                <strong>Categorias:</strong>
                                <?php the_category(', '); ?>
                            </small> <br/>
                            <small class="al-posts-card-footer-tags">
                                <strong>Tags:</strong>
                                <?php the_tags(', '); ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
    <div class="al-posts-divider">
        <span></span>
        <span></span>
    </div>
    <div class="d-flex align-items-center al-posts-footer justify-content-center">
        <a target="_blank" href="<?php echo esc_url( get_permalink( get_page_by_path( 'noticias' ) ) );?>" class="al-posts-button">Todos os posts</a>
    </div>
</section>
