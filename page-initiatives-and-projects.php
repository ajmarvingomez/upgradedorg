<?php get_header() ?>

<main class="projects-wrapper">
		<div class="projects-title-wrapper"><h1 class="projects__title"><?php the_title() ?></h1></div>
		
		<main class="projects__content">
			<ul class="projects-init__list">

				<?php
				$p = new WP_Query(array('post_type' => 'initiatives'));
				if ($p->have_posts()) {
					while ($p->have_posts()) {
						$p->the_post(); ?>
						<li class="projects-init__list-item">
							<h2 class="projects-item__title"><a href="#"><?php the_title(); ?></a></h2>
							<h3 class="projects-item__subtitle"><?php echo get_secondary_title(); ?></h3>
							<div class="projects-item__summary"><?php the_excerpt() ?></div>
							<h3 class="projects-item__cta"><?php the_shortlink("Learn more"); ?></h3>
						</li><?php
					}
				}
				?> <!-- end entry -->
				
			</ul> <!-- end list -->
		</main> <!-- end content -->
</main>
<?php get_footer() ?>