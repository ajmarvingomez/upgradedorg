<?php get_header(); ?>

<main class="single-resource-wrapper">
	<div class="single-resource__back-button">
		<a class="single-button__link" href="<?php echo get_site_url() . '/resources' ?>"><< Back to Resources</a>
	</div>

	<h1 class="single__title"><?php the_title(); ?></h1>

	<article class="single__content">
		<?php the_content(); ?>
	</article>

</main>

<?php get_footer(); ?>