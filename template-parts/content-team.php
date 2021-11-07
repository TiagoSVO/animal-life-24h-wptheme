<?php
// Set up the objects needed
$the_query = new WP_Query();
$people_team_pages = $the_query->query(array('post_type' => 'page'));

// Get the page as an Object
$parent_team_page =  get_page_by_path('equipe');

// Filter through all pages and find Portfolio's children
$team_children = get_page_children( $parent_team_page->ID, $people_team_pages );

$team_children = empty($team_children) ? $team_children : array_reverse($team_children)
?>
<section id="al-team">
    <div class="al-main-title d-flex flex-row justify-content-center align-items-center">
        <span></span>
        <span></span>
        <h2>Equipe</h2>
    </div>
    <div class="al-team-wrap flex-wrap d-flex justify-content-between">
        <?php if(empty($team_children)): ?>
              <p>Não há conteúdo disponível!</p>
              <p>Para apresentar conteúdo nesta página é necessário ter uma página chamada de Equipe e páginas filhas para cada membro da equipe.</p>
        <?php else: ?>
            <?php foreach($team_children as $person_team):?>

                <div class="al-team-person" style=" background:url('<?php echo get_the_post_thumbnail_url($person_team->ID); ?>')">
                    <div class="al-team-person-content">
                        <h3><?php echo get_the_title($person_team->ID); ?></h3>
                        <hr/>
                        <?php echo($person_team->post_excerpt);?>
                        <hr/>
                        <div class="al-team-person-content-linkwrap">
                            <a href="<?php echo get_permalink($person_team)?>">
                                Saiba mais...
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</section>
