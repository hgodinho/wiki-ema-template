<?php
/**
 * Home-page da Wiki-Ema
 *
 * @package WordPress
 * @subpackage Wiki-Ema
 *
 * @version 0.2
 * @since 0.3
 *
 * @author hgodinho.com
 */
get_header();
include get_template_directory() . '/template-parts/jumbotron-home.php';
include get_template_directory() . '/template-parts/obra/content-obra-do-mes.php';
include get_template_directory() . '/template-parts/obra/content-obras-relacionadas.php';

$args = array(
    'post_type' => 'obras',
    'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key' => 'obra_domes',
            'compare' => '=',
            'value' => '1',
        ),
    ),
);
$obra_do_mes = new WP_Query($args);
?>

<section id="primary" class="content-area">

	<?php
if (function_exists('wiki_ema_jumbotron_home')) {
    wiki_ema_jumbotron_home($obra_do_mes);
}

?>

	<main role="main" class="container-fluid">
		<div class="blog-main mt-4">
			<?php
if (function_exists('obra_relacionada')) {
    obra_relacionada($obra_do_mes);
}
?>
		</div>
	</main>

</section>

<?php
get_footer();
?>