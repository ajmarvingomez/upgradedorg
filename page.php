<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dsarichmond
 */

?>

<?php get_header(); ?>

<main class="page-wrapper">
		<div class="page-title-wrapper"><h1 class="page__title"><?php the_title(); ?></h1></div>
		
		<main class="page__content">
			<section class="page-content__text">
				<?php the_content(); ?>
			</section>
			
			<?php get_template_part('template-parts/social-media'); ?>
		</main>
</main>

<?php get_template_part('template-parts/newsletter'); ?>

<?php get_footer(); ?>