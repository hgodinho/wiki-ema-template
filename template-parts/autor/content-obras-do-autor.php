<?php
/**
 * Template para box que mostra obras do autor
 *
 * @version 0.1
 * @since 0.2
 *
 * @author hgodinho.com
 *
 */
wp_reset_query();
?>

<div class="row py-4 border-top">
    <div class="col">
        <div class="row">
            <!-- Título -->
            <div class="col-12 col-sm-7 pb-4">
                <h3>Obras na coleção:
                </h3>
            </div>
            <!-- // Título -->

            <!-- formulario de busca -->
            <div class="col-12 col-sm-5 pb-4">
                <div class="col-12">
                    <?php get_search_form();?>
                </div>
            </div>
            <!-- // formulario de busca -->
        </div>

             <?php
$autor = get_the_ID();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//echo $paged;
$args = array(
    'post_type' => 'obras',
    'post_status' => 'any',
    'relationship' => array(
        'id' => 'obras_to_autores',
        'to' => $post->ID,
    ),
    'posts_per_page' => 6,
    //'paged' => 148,
);
$connected = new WP_Query($args);
?>
            
                <?php
while ($connected->have_posts()): $connected->the_post();
    get_template_part('template-parts/obra/content', 'cartao-obra-no-loop');
endwhile;

?>
 

            <?php
if (function_exists('bootstrap_pagination')) {
    bootstrap_pagination($connected);
}
?>
        </div>
    </div>
</div>