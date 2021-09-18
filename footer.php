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
			<section class="social-media-wrapper">
				<section class="footer-sm__content">
					<div class="footer-sm__flex-wrapper">
						<ul class="footer-sm__row">
							<li class="footer-sm__svg"><img alt="Twitter logo" src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/twitter-black.svg' ?>"></li>
							<li class="footer-sm__type">Twitter:</li>
							<li class="footer-sm__user"><a href="https://twitter.com/dsarichmond">@dsarichmond</a></li>
						</ul>
						<ul class="footer-sm__row">
							<li class="footer-sm__svg"><img alt="Instagram logo" src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/instagram-black.svg' ?>"></li>
							<li class="footer-sm__type">Instagram:</li>
							<li class="footer-sm__user"><a href="https://www.instagram.com/dsarichmond/?hl=en">dsarichmond</a></li>
						</ul>
						<ul class="footer-sm__row">
							<li class="footer-sm__svg"><img alt="Facebook logo" src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/facebook-black.svg' ?>"></li>
							<li class="footer-sm__type">Facebook:</li>
							<li class="footer-sm__user"><a href="https://www.facebook.com/DSARichmond/">DSA Richmond</a></li>
						</ul>
						<ul class="footer-sm__row">
							<li class="footer-sm__svg"><img alt="Email logo" src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/envelope-outline-black.svg' ?>"></li>
							<li class="footer-sm__type">Email:</li>
							<li class="footer-sm__user"><a href="mailto:admin@dsarichmond.org">admin@dsarichmond.org</a></li>
						</ul>
						<ul class="footer-sm__row">
							<li class="footer-sm__svg"><img alt="Patreon logo" src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/patreon-black.svg' ?>"></li>
							<li class="footer-sm__type">Patreon:</li>
							<li class="footer-sm__user"><a href="https://www.patreon.com/dsarichmond">patreon.com/dsarichmond</a></li>
						</ul>
					</div>
				</section>
			</section>

			<ul class="footer__link-list">
			  <li class="footer-list__link"><a href="<?php echo get_site_url() . '/about' ?>">About</a></li>
			  <li class="footer-list__link"><a href="<?php echo get_site_url() . '/initiatives' ?>">Campaigns</a></li>
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
