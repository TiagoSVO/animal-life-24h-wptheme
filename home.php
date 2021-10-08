<?php get_header() ?>
<main id="al-page">
  <article>
    <div class="al-main-title d-flex flex-row justify-content-center align-items-center">
          <span></span>
          <span></span>
          <h2><?php the_title() ?></h2>
    </div>
    <div class="al-pegadas">
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
    </div>
    <section class="container">
      <div class="row">
        <div class="col">
          <div class="al-page-content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
                $cat_main_carousel = get_category_by_slug('main-carousel');
                $args = array(
                    'cat' => ''.(-1*$cat_main_carousel->term_id).'',
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'posts_per_page' => 5
                );

                query_posts( $args );
                if(have_posts()):
                  while(have_posts()): the_post();

              ?>
              <?php get_template_part('template-parts/content-posts'); ?>
              <?php
                  endwhile;
              ?>

                <div class="row">
                  <div class="pages col-6 text-left">
                    <?php previous_posts_link(__("<< Newer posts")); ?>
                  </div>
                  <div class="pages col-6 text-right">
                    <?php next_posts_link(__("Older posts >>")); ?>
                  </div>
                </div>

              <?php
                else:

              ?>
              <p><?php _e("There's nothing yet to be displayed...") ?></p>

            <?php endif;?>
          </div>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<?php get_footer();?>
