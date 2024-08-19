<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dsarichmond
 */

?>

<?php wp_footer() ?>
<footer class="footer-wrapper">
	<div class="footer-border">

		<div class="footer__logo"><img height="72" width="59" alt="red and white DSA hands logo"
				src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/svg/dsa-logo-red-white.svg"')); ?>"></div>

		<ul class=" footer__link-list">
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/about' ?>">About</a></li>
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/initiatives' ?>">Initiatives</a></li>
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/blog' ?>">Blog</a></li>
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/resource-page' ?>">Resources</a></li>
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/contact' ?>">Contact</a></li>
			<li class="footer-list__link"><a href="https://www.patreon.com/dsarichmond">Donate</a></li>
			<li class="footer-list__link"><a href="<?php echo get_site_url() . '/get-involved' ?>">Get Involved</a></li>
		</ul>
	</div>
</footer>
</body>

</html>