<?php
/**
 * Template da single-obra
 *
 * exibe as informações de cada obra cadastrada
 *
 * @package WordPress
 * @subpackage Elucidário.art
 *
 * @version 0.3
 * @since 0.1
 */
include get_template_directory().'/template-parts/obra/content-obras-relacionadas.php';
get_header();
get_template_part('template-parts/header/header', 'breadcrumb');

?>
<section id="primary" class="content-area">
	<main role="main" class="container">

		<?php
while (have_posts()): the_post();?>
		<div class="container blog-post">
			<?php
    $post_object = get_post_meta($post->ID);?>

			<?php get_template_part('template-parts/obra/content', 'obra');?>

			<?php get_template_part('template-parts/obra/content', 'campos_clonaveis');?>
		</div>
		<?php
endwhile;?>

	</main>
</section>

<div class="container-fluid">
	<?php
if (function_exists('obra_relacionada')) {
    obra_relacionada();
}
?>
</div>

<?php
get_footer();?>