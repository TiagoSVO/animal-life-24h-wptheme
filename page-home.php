<?php get_header() ?>
<main id="al-main">
  <article>
    <?php get_template_part('template-parts/content', 'main-carousel') ?>
    <?php get_template_part('template-parts/content', 'about') ?>
    <?php get_template_part('template-parts/content', 'services') ?>
    <?php get_template_part('template-parts/content', 'team') ?>
    <?php get_template_part('template-parts/content', 'news') ?>
    <?php get_template_part('template-parts/content', 'gmap') ?>
  </article>
</main>
<?php get_footer();?>
