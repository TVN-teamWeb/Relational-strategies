<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

<!-- Loading -->
<!-- div class="loader"></div -->
<!-- TOP -->
	<!-- MENU LEFT -->
	<div id="menu">
		<span style="font-size:45px;cursor:pointer" onclick="openNav()">&#9776;</span><span class="menu">MENU</span>
	</div>

	<!-- MENU CENTER -->
	<div id="logo" class="logo">
		<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo.png">
	</div>

	<!-- MENU RIGHT -->
	<div id="lingue">
		lingue
	</div>

	<!-- BOTTOM -->
<div id="mouse" class="mouse hide-for-small-only">
	<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/mouse.png">
</div>

<!-- LOGIN -->
<div id="login" class="hide-for-small-only">
	<div class="vertical-text">
		<span class="login"><a href="#">login</a></span>/<span class="registry"><a href="#">regitrazione</a></span>
	</div>
</div>

<!-- Social -->
<div id="social" class="hide-for-small-only">
	<div class="vertical-text">
		<span class="login">social</span>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
	<!-- img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/social.png">
	<div class="icons">
		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div-->
</div>

<nav id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
		<ul>
			<li><a class="link" href="#"><span>About</span></a></li>
			<li><a class="link" href="#"><span>About</span></a></li>
			<li><a class="link" href="#"><span>About</span></a></li>
			<li><a class="link" href="#"><span>About</span></a></li>
		</ul>
  </div>
</nav>

		<?php do_action( 'foundationpress_after_header' );
