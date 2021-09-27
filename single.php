<?php get_header(); ?>

<main class="single-resource-wrapper">
	<div class="single-resource__back-button">
		<a class="single-button__link" href="<?php echo get_site_url() . '/' . $post_type ?>"><< Back to <?php echo ucfirst($post_type); ?> </a>
	</div>

	<h1 class="single__title"><?php the_title(); ?></h1>
	<div class="single__category"><?php the_category(', '); ?></div>
	<?php
	$author_id = $post->post_author;
	$author_name = the_author_meta('display_name', $author_id);
	?>
	<div class="single__author"><?php $author_name; ?></div>

	<article class="single__content">
		<?php the_content(); ?>
	</article>

</main>

<?php get_footer(); ?>