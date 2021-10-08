<section class="col al-posts-content-page">
  <div class="card h-100 al-posts-card">
    <a class="al-posts-card-link-wrap" target="_blank" href="<?php the_permalink()?>">
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
    </a>
    <div class="card-body">
      <a class="al-posts-card-link-wrap" target="_blank" href="<?php the_permalink()?>">
        <h5 class="card-title"><?php the_title()?></h5>
        <div class="al-posts-divider-card">
            <span></span>
        </div>
        <?php the_excerpt() ?>
        <br/>
      </a>
        <p class="card-text-bottom">
            <a target="_blank" href="<?php the_permalink()?>">Leia mais...</a>
        </p>
    </div>
    <div class="card-footer bg-transparent al-posts-card-footer">
        <p>
            <small class="al-posts-card-footer-categories">
                <strong>Categorias:</strong>
                <?php the_category(', '); ?>
            </small>
        </p>
        <p>
            <small class="al-posts-card-footer-tags">
                <strong>Tags:</strong>
                <?php the_tags('', ' | '); ?>
            </small>
        </p>
    </div>
</section>
