<?php get_header(); ?>

<main class="about-wrapper">
	<div class="about-title-wrapper">
		<h1 class="about__title"><?php the_title(); ?></h1>
	</div>

	<section class="about__text">
		<?php the_content(); ?>
	</section>

</main>

<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_footer(); ?>