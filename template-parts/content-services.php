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
<section id="al-services" style="background-image: url('https://picsum.photos/id/837/2000')">
    <div class="al-green-screen"></div>
    <div class="al-services-title text-center">
            <h2>Serviços</h2>
        </div>
        <div class="al-services-content">
            <div class="container">
                <div class="row justify-content-between text-center ">
                    <?php foreach($service_children as $service):?>

                        <div class="col-12 col-md-6 col-lg-4  al-service-card-wrap">
                            <a href="<?php echo get_permalink($service)?>">
                                <div class="d-flex">
                                    <div class="al-service-card">
                                        <div class="al-hexagon-wrap">
                                            <div class="al-hexagon-img" style=" background:url('<?php echo get_the_post_thumbnail_url($service->ID); ?>')" ></div>
                                        </div>
                                        <div class="al-services-content">
                                            <h3><?php echo get_the_title($service->ID); ?></h3>
                                            <p><?php echo($service->post_content); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>
