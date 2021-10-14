<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dsarichmond
 */
?>

<?php get_header(); ?>

<main class="four-wrapper">

	<section class="four-content">
		<h1 class="four__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dsarichmond' ); ?></h1>

		<p class="four__text"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dsarichmond' ); ?></p>

		<div class="four__search"><?php get_search_form(); ?></div>

		<div class="four__posts"><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></div>
	</section>

</main>

<?php get_template_part('template-parts/newsletter') ?>

<?php get_footer(); ?>