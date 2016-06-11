<?php
/**
 * @package WordPress
 * @subpackage Air-Right-WordPress-Theme
 * @since Air Right WordPress Theme Template 1.0.0
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head id="airright-template" data-template-set="airright-wordpress-theme-template">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="XXXXXXXXXX" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="6e51HIeheAyfgAGnvLCq2WYQQ6MBFW0rd1xfzCImXBc" />
<?php if (is_search()) echo "\t" . '<meta name="robots" content="noindex, nofollow" />' . "\n"; ?>
	<meta property="og:title" content="<?php wp_title(''); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-icon.png" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="XXXXXXXXXX" />
	<meta itemprop="name" content="<?php wp_title(''); ?>" />
	<meta itemprop="description" content="<?php bloginfo('description'); ?>" />
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-icon.png" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_/img/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_/img/apple-touch-icon-precomposed.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php include '_/inc/header-includes.php' ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/lib/respond-1.4.2.min.js"></script>
	<![endif]-->
	<!-- WordPress Head -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<nav id="primary-navigation-mobile" class="site-navigation primary-navigation-mobile" role="navigation">
			<!-- <a class="screen-reader-text skip-link" href="#content">Skip to content</a> -->
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
		<div class="wrapper-inside">
			<header id="header" role="banner">
				<div class="main-logo">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/_/img/air-right-logo.png" alt="Air Right Products and Services LLC Logo" /></a></h1>
				</div><!-- .main-logo -->
				<a id="primary-navigation" class="menu-toggle">
				  <span>toggle menu</span>
				</a>
				<nav id="nav" class="primary-navigation-desktop" role="navigation">
					<?php wp_nav_menu( array('theme_location' => 'primary', 'menu-class' => 'nav-menu' ) ); ?>
				</nav>
			</header>

			<div id="main" class="site-main">
