  <?php get_template_part('template-parts/content', 'footer-menu') ?>
  <section id="al-footer" className="">
      <div class="container">
          <div class="d-flex align-items-center al-footer-wrap">
              <div><?php echo get_theme_mod('set_copyright'); ?></div>
              <div class="ms-auto">Desenvolvido por tiago.svo.dev</div>
          </div>
      </div>
  </section>
  <?php get_template_part('template-parts/content', 'whatsapp') ?>
  <?php wp_footer();?>
  </body>
</html>
