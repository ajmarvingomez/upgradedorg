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

get_header();
?>

<main class="homepage-wrapper">
	<section class="homepage__landing">
		<div class="home-landing__text-wrapper">
			<div class="backdrop">
				<h1 class="home-landing__title text">DSA<br />Richmond</h1>
			</div>
			<div class="home-landing__rose">
				<img src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/svg/rose-vector.svg')); ?>" alt="rose">
				<img src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/svg/rose-vector.svg')); ?>" alt="rose">
				<img src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/svg/rose-vector.svg')); ?>" alt="rose">
			</div>
			<div class="home-landing__line"></div>
			<h2 class="home-landing__subtitle">Southerners for Solidarity</h2>
		</div>
	</section>

	<section class="homepage__about">
		<div class="homepage-about__text-wrapper">
			<article class="homepage-about__involved">
				<h2 class="homepage-involved__title">Get Involved:</h2>
				<p class="homepage-involved__text">Would you like to join us in building socialism in Richmond? It's
					easy! Just sign up with the national Democratic Socialists of America organization or donate to help
					us fund the transition to socialism.</p>
				<ul class="homepage-involved__list">
					<li class="homepage-involved__list-item"><a href="https://dsausa.org/join">&raquo; Join Richmond
							DSA</a></li>
					<li class="homepage-involved__list-item"><a href="https://www.patreon.com/dsarichmond">&raquo;
							Donate Now</a></li>
				</ul>
				<!--img class="homepage-involved__logo" src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/red-black-hands.svg')); ?>" alt="DSA logo"-->
			</article>
		</div>
	</section>

</main>

<?php get_template_part('template-parts/newsletter'); ?>

<?php
get_footer();
?>