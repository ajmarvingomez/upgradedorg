<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dsarichmond
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,200;1,300;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_site_url() . '/wp-content/themes/dsarichmond/style.css'; ?> "
</head>
<body>
<?php wp_body_open(); ?>
	<nav class="nav-wrapper">
		<div class="nav-content-wrapper">
	 		<div class="nav-content__img-wrapper">
	      		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/logo_dsa-richmond.svg'; ?>" alt="Richmond DSA logos"></a>
	    	</div>
	    <div class="nav-hamburger-icon">
	    	<img src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/hamburger-icon.svg'?>"" alt="hamburger icon">
	    </div>
	    <div class="nav-close-icon nav-content--hide"><img src="<?php echo get_site_url() . '/wp-content/uploads/2021/09/x.svg' ?>" alt="hamburger icon"></div>
	    <ul class="nav-content__link-list">
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/about' ?>">About</a></li>
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/initiatives' ?>">Campaigns</a></li>
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/blog' ?>">Blog</a></li>
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/resource-page' ?>">Resources</a></li>
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/contact' ?>">Contact</a></li>
	      <li class="nav-list__link"><a href="https://www.patreon.com/dsarichmond">Donate</a></li>
	      <li class="nav-list__link"><a href="<?php echo get_site_url() . '/get-involved' ?>">Get Involved</a></li>
	    </ul>
	  </div>
	</nav>