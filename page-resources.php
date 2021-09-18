<?php get_header(); ?>

<main class="resources-wrapper">
		<div class="resources-title-wrapper"><h1 class="resources__title">Resources</h1></div>

		<section class="resources__text">
			<p>Here you can find documents, forms, and assets related to Richmond DSA.</p>
		</section>
		
		<main class="resources__content">
			<ul class="resources__item-list">
			<?php
			  $p = new WP_Query(array('post_type' => 'resources'));
			  if ($p->have_posts()) {
			    while ($p->have_posts()) {
			      $p->the_post(); ?>

			      	<li class="resources__item">
			      	  <div class="resources__link--1"><a href="#"><?php the_title(); ?></a></div>
			      	  <p><?php the_content() ?></p>
			      	  <div class="resources__link--2"><a href="#">Read <?php the_title() ?></a></div>
			      	</li><?php
			    }
			  }	
			  reset_post_data();
			  ?>
			</ul>
		</main>
</main>

<?php get_footer(); ?>