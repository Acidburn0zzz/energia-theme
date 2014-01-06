<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Energia
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name='robots' content='index,follow' />
<meta name="Author" content="Robert Wessels" />
<meta name="Publisher" content="Energia" />
<meta name="Keywords" content="Energia, Wiring, Processing, Maker, LaunchPad, Arduino, Texas Instruments, Sketch, MSP430, mspgcc, mpsdebug, Electronic Arts, Programming, C, C++, Robert Wessels" />
<meta name="Description" content="Energia is a rapid prototyping platform for the Texas Instruments MCU Launchpad. Energia is based on Wiring and Arduino and uses the Processing IDE." />
<meta name="Copyright" content="All contents copyright Robert Wessels" />
  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<div id="header">
		 <div id="headerimg">
			 <div class="description">
			   <?php bloginfo('description'); ?>
			 </div>
		  </div>
		</div>
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'energia' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'energia' ); ?>"><?php _e( 'Skip to content', 'energia' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
	
