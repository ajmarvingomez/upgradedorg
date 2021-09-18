<?php get_header(); ?>

<main class="contact-wrapper">
		<div class="contact-title-wrapper"><h1 class="contact__title"><?php the_title(); ?></h1></div>
		
		<main class="contact__content">
			<section class="contact-content__text">
				<?php the_content(); ?>
			</section>

			<section class="contact-content__form">
				<!--div class="contact-form__form">INSERT FORM</div-->
				<form action="/contact/#wpcf7-f245-p188-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
				<div style="display: none;">
				<input type="hidden" name="_wpcf7" value="245">
				<input type="hidden" name="_wpcf7_version" value="5.4.2">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f245-p188-o1">
				<input type="hidden" name="_wpcf7_container_post" value="188">
				<input type="hidden" name="_wpcf7_posted_data_hash" value="">
				</div>
				<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *"></span></p>
				<p><span class="wpcf7-form-control-wrap pronouns"><input type="text" name="pronouns" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Preferred Pronouns"></span></p>
				<p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email Address *"></span></p>
				<p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Reason/Subject"></span></p>
				<p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span></p>
				<p><span id="wpcf7-613d0c73cdc7a-wrapper" class="wpcf7-form-control-wrap website-wrap" style="display:none !important; visibility:hidden !important;"><label for="wpcf7-613d0c73cdc7a-field" class="hp-message">Please leave this field empty.</label><input id="wpcf7-613d0c73cdc7a-field" class="wpcf7-form-control wpcf7-text" type="text" name="website" value="" size="40" tabindex="-1" autocomplete="new-password"></span></p>
				<p><input type="submit" value="Contact Richmond DSA" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
				<div class="wpcf7-response-output" aria-hidden="true"></div></form>
			</section>

			<?php get_template_part('template-parts/social-media'); ?>
		</main>
</main>

<?php get_footer(); ?>