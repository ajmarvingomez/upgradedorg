<?php get_header() ?>

<main class="about-wrapper">
	<div class="about-title-wrapper"><h1 class="about__title"><?php the_title() ?></h1></div>

	<section class="about__text">
		<?php the_content() ?>
	</section>

	<section class="about__initiatives-wrapper">
		<h2 class="about-init__title">Local Initiatives</h2>
		<ul class="about-init__list">
			<li class="about-init__list-item">
				<h2 class="about-item__title"><a href="#">Brake Lights Clinic</a></h2>
				<h3 class="about-item__subtitle">The Best Police Interaction Is No Interaction</h3>
				<p class="about-item__summary">Getting pulled over for having a brake light out can mean at least a burdensome fine, at worst police violence. Our brake light clinics remove the reason for the police stop by checking and repairing bulbs for our neighbors, for free!</p>
				<h3 class="about-item__cta"><a href="#">Learn more</a></h3>
			</li>
			<li class="about-init__list-item">
				<h2 class="about-item__title"><a href="#">Socialist Night School</a></h2>
				<h3 class="about-item__subtitle">Learn About Socialism</h3>
				<p class="about-item__summary">Everyone is welcome to come and learn about selected topics in socialist theory, history, and practice from members of Richmond DSA. No reading is required!</p>
				<h3 class="about-item__cta"><a href="#">Learn more</a></h3>
			</li>
			<li class="about-init__list-item">
				<h2 class="about-item__title"><a href="#">People's Survey</a></h2>
				<h3 class="about-item__subtitle">What Does Richmond Need?</h3>
				<p class="about-item__summary">The Richmond People's Survey is a base-building project in collaboration with the Organization for a Free Society. People's Survey canvassers go door-to-door and wherever else Richmonders congregate and ask what community needs they think have gone unmet.</p>
				<h3 class="about-item__cta"><a href="#">Learn more</a></h3>
			</li>
		</ul>
	</section>
</main>