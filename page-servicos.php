<?php
// Set up the objects needed
$the_query = new WP_Query();
$services_pages = $the_query->query(array('post_type' => 'page'));

// Get the page as an Object
$parent_service_page =  get_page_by_path('servicos');

// Filter through all pages and find Portfolio's children
$service_children = get_page_children( $parent_service_page->ID, $services_pages );

$service_children = empty($service_children) ? $service_children : array_reverse($service_children)
?>

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
        <?php endif; ?>
        <section class="container">
          <div class="row">
            <div class="col">
              <div class="al-page-content al-service-page">
                    <?php if(empty($service_children)): ?>
                        <p>Não há conteúdo disponível!</p>
                        <p>Para apresentar conteúdo nesta página é necessário ter uma página chamada de Serviço e páginas filhas para cada serviço.</p>
                    <?php else: ?>
                        <?php foreach($service_children as $service):?>
                            <a class="al-service-page-link" href="<?php echo get_permalink($service)?>">
                                <div class="card mb-3">
                                  <div class="row g-0">
                                    <div class="col-md-3">
                                        <div class="al-service-card d-flex justify-content-center">
                                            <div class="al-hexagon-wrap">
                                                <div class="al-hexagon-img" style=" background:url('<?php echo get_the_post_thumbnail_url($service->ID); ?>')" ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                      <div class="card-body">
                                        <h5 class="card-title"><?php echo get_the_title($service->ID); ?></h5>
                                        <p class="card-text"><?php echo($service->post_excerpt); ?></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
          </div>
        </section>

    </article>
</main>
<?php get_footer();?>
