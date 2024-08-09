<?php get_header(); ?>

<main class="contact-wrapper">
	<div class="contact-title-wrapper">
		<h1 class="contact__title"><?php the_title(); ?></h1>
	</div>

	<main class="contact__content">
		<section class="contact-content__text">
			<?php the_content(); ?>
		</section>

		<section class="contact-content__form">
			<?php echo do_shortcode( '[contact-form-7 id="527" title="Contact Form"]' ); ?>
		</section>

		<?php get_template_part( 'template-parts/social-media' ); ?>
	</main>
</main>

<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_footer(); ?>