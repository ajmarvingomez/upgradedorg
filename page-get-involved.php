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
	<!--section class="join__form">
		<div class="join-form__wrapper">[INSERT FORM HERE]</div>  insert Wordpress form here -->

		<form action="/get-involved/#wpcf7-f240-p185-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
		<div style="display: none;">
		<input type="hidden" name="_wpcf7" value="240">
		<input type="hidden" name="_wpcf7_version" value="5.4.2">
		<input type="hidden" name="_wpcf7_locale" value="en_US">
		<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f240-p185-o1">
		<input type="hidden" name="_wpcf7_container_post" value="185">
		<input type="hidden" name="_wpcf7_posted_data_hash" value="">
		</div>
		<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *"></span></p>
		<p><span class="wpcf7-form-control-wrap pronouns"><input type="text" name="pronouns" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Preferred Pronouns"></span></p>
		<p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email Address *"></span></p>
		<p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Tell Us About Yourself"></textarea></span></p>
		<p><span id="wpcf7-613e35513ed4c-wrapper" class="wpcf7-form-control-wrap website-wrap" style="display:none !important; visibility:hidden !important;"><label for="wpcf7-613e35513ed4c-field" class="hp-message">Please leave this field empty.</label><input id="wpcf7-613e35513ed4c-field" class="wpcf7-form-control wpcf7-text" type="text" name="website" value="" size="40" tabindex="-1" autocomplete="new-password"></span></p>
		<p><input type="submit" value="Get Involved Now" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
		<div class="wpcf7-response-output" aria-hidden="true"></div></form>
	<!--/section-->
</main>

<?php get_footer(); ?>