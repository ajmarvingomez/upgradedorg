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
	        <h1 class="home-landing__title text">DSA<br/>Richmond</h1>
	      </div>
	      <div class="home-landing__rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	      </div>
	      <div class="home-landing__line"></div>
	      <h2 class="home-landing__subtitle">Southerners for Solidarity</h2>
	    </div>
	  </section>

	  <section class="homepage__about">
	    <div class="homepage-about__text-wrapper">
	      <article class="homepage-about__text">
	        <h2 class="homepage-about__title">About</h2>
	        <p>The Richmond DSA is an all-volunteer organization of advocates, organizers, and community members with the goal of building working class power in the city of Richmond, Virginia. We seek to promote a truly democratic and socialist&nbsp;society.</p>
	        <p>We act by educating our members and neighbors on the importance of unified struggle, supporting progressive legislation, opposing bills designed to benefit profiteers at the expense of the community, and standing in solidarity with oppressed and marginalized groups through mutual aid&nbsp;efforts.</p>
	        <p>We reject an economic order based solely on private profit, alienated labor, gross inequalities of wealth and power, discrimination based on race or sex, and brutality and violence in defense of the status&nbsp;quo.</p>
	        <p>We invite supporters and members from all stations and backgrounds to join us in bringing about meaningful change to our community, to our city, and to the&nbsp;Commonwealth.</p>
	      </article>
	      <aside class="homepage-about__involved">
	        <h2 class="homepage-involved__title">Get Involved:</h2>
	        <p class="homepage-involved__text">Would you like to join us in building socialism in Richmond? It's easy! Just sign up with the national Democratic Socialists of America organization or donate to help us fund the transition to socialism.</p>
	        <ul class="homepage-involved__list">
	          <li class="homepage-involved__list-item"><a href="#">&raquo; Join Richmond DSA</a></li>
	          <li class="homepage-involved__list-item"><a href="#">&raquo; Donate Now</a></li>
	        </ul>
	        <!--img class="homepage-involved__logo" src="assets/img/red-black-hands.svg" alt="DSA logo"-->
	      </aside>
	    </div>
	  </section>

	  <section class="homepage__resources">
	    <h2 class="homepage-resources__title">Resources</h2>

		<ul class="resources__item-list">
		<?php
		  $p = new WP_Query(array('post_type' => 'resources'));
		  if ($p->have_posts()) {
		    while ($p->have_posts()) {
		      $p->the_post(); ?>

		      	<li class="resources__item">
		      	  <div class="resources__link--1"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></div>
		      	  <p><?php the_excerpt(); ?></p>
		      	  <div class="resources__link--2"><a href="<?php echo get_post_permalink(); ?>">Read <?php the_title() ?></a></div>
		      	</li><?php
		    }
		  }	
		?>
		</ul>
		  
	</section>
</main>

<?php
get_footer();
?>