<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package areavoices
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- Stylesheet -->
<link rel="stylesheet" href="/wp-content/themes/areavoices/style.css">
<link rel="stylesheet" href="/wp-content/themes/areavoices/homemade_style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'areavoices' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="super-header">
			<div class="social-links clearfix">
				<a href="http://www.facebook.com" class="ir facebook" target="_blank">Facebook</a>
				<a href="http://www.twitter.com" class="ir twitter" target="_blank">Twitter</a>
				<a href="http://www.instagram.com" class="ir instagram" target="_blank">Instagram</a>
			</div><!-- .social-links -->
		</div><!-- .super-header -->

		<div class="site-branding site-header">
			<div class="container">
				<div class="site-info">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-info -->
			</div><!-- .container -->
		</div><!-- .site-branding .site-header-->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'areavoices' ); ?><!--</button>-->
<!--			--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!--		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<!--	<div id="content" class="site-content">-->
