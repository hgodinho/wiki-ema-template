<?php
/**
 * Template para mostrar os resultados da busca
 *
 *
 * @package WordPress
 * @subpackage Elucidário.art
 *
 * @version 0.2
 * @since 0.4
 *
 */

get_header();
get_template_part('template-parts/header/header', 'breadcrumb');
?>

<section id="primary" class="content-area">
	<main id="main" class="container">
		<?php

//var_dump($wp_query);
?>
		<?php if (have_posts()) {?>

		<div class="container py-4">
			<div class="row">

				<div class="col-12">
					<?php
get_search_form();?>
				</div>

				<div class="col-12 pb-4 pt-4">
					<h1>
						<?php
echo $wp_query->found_posts;
    if ($wp_query->found_posts == '1') { ?>
						<span class="small text-muted">
							<?php _e('resultado de busca para:', TEXT_DOMAIN);?>
						</span>
						<?php
} else {?>
						<span class="small text-muted">
							<?php _e('resultados de busca para:', TEXT_DOMAIN);?>
						</span>
						<?php }?>
						<?php echo get_search_query(); ?>
					</h1>

					<p class="lead text-muted">
						<?php
$paged = get_query_var('paged');
    if ($paged > 0) {?>

						<?php
echo 'Página ' . $paged;
        echo ' de ' . $wp_query->max_num_pages . '.'; ?>
					</p>
					<?php
} else {?>

					<?php
echo 'Página 1';
        echo ' de ' . $wp_query->max_num_pages . '.'; ?>
					</p>
					<?php
}?>

				</div>
			</div>
		</div>

		<div class="container">
			<table class="table table-hover table-striped table-responsive-md">
				<thead>
					<tr>
						<th scope="col">Imagem</th>
						<th scope="col">Tipo</th>
						<th scope="col">Nome</th>
					</tr>
				</thead>
				<tbody>
					<?php

    while (have_posts()): the_post();
        ?>
					<tr>
						<td>
							<a href="<?php the_permalink();?>" class="text-decoration-none">
								<?php if(get_the_post_thumbnail()){
								the_post_thumbnail(array(100,100));	
								}?>
							</a>
						</td>
						<?php //$fichatecnica_autor = get_field('ficha_tecnica');?>
						<td>
							<?php
    	if ($post->post_type == 'obras') {
            echo 'obra';
        }
        if ($post->post_type == 'autores') {
            echo 'autor';
        }
        ?>
						</td>
						<td>
							<a href="<?php the_permalink();?>" class="text-decoration-none">
								<?php 
										if(function_exists('capitular')){
											capitular(get_the_title());
										}
								?>
							</a>
						</td>
					</tr>
					<?php
endwhile;

    ?>
				</tbody>
			</table>

			<?php

    if (function_exists('bootstrap_pagination')) {
        bootstrap_pagination();
    }
} else {
    get_template_part('template-parts/search/nada', 'encontrado');
}
?>
		</div>
		</div>
	</main>
</section>

<?php
get_footer();