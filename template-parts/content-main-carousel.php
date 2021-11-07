<section id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <?php
    $the_query = new WP_Query( array( 'category_name' => 'main-carousel' ) );
    $carousel_list = array();

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $post_info = array(
                "title" => get_the_title(),
                "description" => get_the_content(),
                "image" => get_the_post_thumbnail_url()
            );
            $carousel_list[] = $post_info;
        }
    } else {
        $carousel_list[] = array();
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    ?>
    <div class="carousel-indicators">
        <?php foreach ($carousel_list as $i => $item): ?>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i === 0 ? 'active' : '';?>" aria-current="true" aria-label="<?php echo "Slide".$item["id"] ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($carousel_list as $i => $item): ?>
            <div class="<?php echo 'carousel-item '.($i === 0 ? 'active' : '');?>" style="background-color: #333; background:url('<?php echo $item['image'];?>')">
                <div class="carousel-caption">
                    <h5><?php echo $item['title'];?></h5>
                    <p><?php echo $item["description"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php _e('Previous') ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php _e('Next') ?></span>
    </button>
</section>
