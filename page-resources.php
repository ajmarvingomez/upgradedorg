<?php get_header(); ?>

<main class="resources-wrapper">
	<div class="resources-title-wrapper">
		<h1 class="resources__title"><?php the_title(); ?></h1>
	</div>

	<section class="resources__text">
		<p><?php echo get_secondary_title(); ?></p>
	</section>

	<main class="resources__content">
		<ul class="resources__item-list">
			<?php
			$p = new WP_Query( array( 'post_type' => 'resources' ) );
			if ( $p->have_posts() ) {
				while ( $p->have_posts() ) {
					$p->the_post(); ?>

					<li class="resources__item">
						<div class="resources__link--1"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<p><?php the_excerpt(); ?></p>
						<div class="resources__link--2"><a href="<?php echo get_post_permalink(); ?>">Read
								<?php the_title() ?></a></div>
					</li><?php
				}
			}
			?>
		</ul>
	</main>
</main>

<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_footer(); ?>