<?php get_header(); ?>

<main class="join-wrapper">

	<div class="join-text-wrapper">

		<div class="join-title-wrapper">
			<h1 class="join__title"><?php the_title(); ?></h1>
		</div>
		<section class="join__text">
			<?php the_content(); ?>
		</section>
	</div>
	<section class="join__form">

		<?php echo do_shortcode( '[contact-form-7 id="528" title="Get Involved Form"]' ); ?>

	</section>
</main>

<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_footer(); ?>