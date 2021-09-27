<?php get_header(); ?>

<main class="single-wrapper">
	<div class="single__back-button">
		<a class="single-button__link" href="<?php echo get_site_url() . '/blog' ?>"><< Back to Blog</a>
	</div>

	<?php if (is_single()) {
		// author:
		$post_id = get_queried_object_id();
		$post_author_id = get_post_field( 'post_author', $post_id );
		// date:
		$post_obj = get_post($post_id);
		$post_date = date('F j, Y', strtotime($post_obj->post_date));	
		?>

		<div class="single__title-wrapper">
			<div class="single__category"><?php the_category(', '); ?></div>
			<h1 class="single__title"><?php the_title(); ?></h1>
		</div>

		<div class="single__metadata">
			<div class="single__author"><span>By:</span> <span><?php
				 $author_name = the_author_meta( 'display_name', $post_author_id );
				 echo $author_name; ?></span></div>
			<div class="single__slashes"> // </div>
			<div class="single__date"><span>Posted:</span> <span><?php echo $post_date; ?></span></div>
		</div>

		<article class="single__content">
			<div class="blog-content-wrapper">
			<?php the_content(); ?>
			</div>
		</article><?php
	} ?>
</main>

<?php get_footer(); ?>