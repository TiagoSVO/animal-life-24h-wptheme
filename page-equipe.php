<?php
// Set up the objects needed
$the_query = new WP_Query();
$team_pages = $the_query->query(array('post_type' => 'page'));

// Get the page as an Object
$parent_equipe_page =  get_page_by_path('equipe');

// Filter through all pages and find Portfolio's children
$equipe_people = get_page_children( $parent_equipe_page->ID, $team_pages );

$equipe_people = empty($equipe_people) ? $equipe_people : array_reverse($equipe_people)
?>
<?php get_header() ?>
<main id="al-page">
  <article>
    <div class="al-main-title d-flex flex-row justify-content-center align-items-center">
          <span></span>
          <span></span>
          <h2><?php the_title() ?></h2>
    </div>
    <?php if(get_the_post_thumbnail_url()):?>
        <div class="al-page-post-image" style="background:url('<?php the_post_thumbnail_url(); ?>');">
        </div>
    <? endif; ?>
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
            <?php foreach($equipe_people as $person):?>
              <a title="Saiba mais..." class="al-team-page-link" href="<?php echo get_permalink($person)?>">
              <div class="card mb-3 al-team-card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <div class="al-team-card-img" style=" background:url('<?php echo get_the_post_thumbnail_url($person->ID); ?>')"></div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo get_the_title($person->ID); ?></h5>
                      <p class="card-text"><?php echo get_the_excerpt($person->ID); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<?php get_footer();?>
