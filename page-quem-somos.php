<?php get_header() ?>
<main id="al-page">
  <article>
    <div class="al-pegadas">
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
        <span class="al-pegada" style="background:url('<?php echo get_template_directory_uri() . '/images/pegada.svg';?>')"></span>
    </div>
    <div class="al-main-title d-flex flex-row justify-content-center align-items-center">
        <span></span>
        <span></span>
        <h2><?php the_title() ?></h2>
    </div>
    <?php if(get_the_post_thumbnail_url()):?>
        <div class="al-page-post-image" style="background:url('<?php the_post_thumbnail_url(); ?>');">
        </div>
    <? endif; ?>
    <section class="container">
      <div class="row">
        <div class="col">
          <div class="al-page-content">
            <?php the_content() ?>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<?php get_footer();?>
