<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cws
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cws' ); ?></a>

	<header id="masthead" class="site-header fixed" role="banner">
		<div class="outer-container">
			<div class="site-branding">
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong><?php bloginfo( 'name' ); ?></strong></a></div>
				<div class="site-description">Business Advisory<br/>&amp; Tax Consulting</div>
			</div><!-- .site-branding -->
			<?php //if ( !is_home() ) : ?>
			<nav id="site-navigation" class="main-navigation site-nav" role="navigation">
				<?php wp_nav_menu( array( 'menu' => 'primary', 'menu_id' => 'primary-menu-header' ) ); ?>
				<?php wp_nav_menu( array( 'menu' => 'secondary', 'menu_id' => 'secondary-menu-header' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php //endif; ?>
			<a href="#site-navigation" class="menu-toggle"><span class="menu-icon"></span><span class="hide">Menu</span></a>
		</div>
	</header><!-- #masthead -->

	<!--<div id="mobile-menu" class="mobile-menu">
		<?php //wp_nav_menu( array( 'menu' => 'primary', 'menu_id' => 'primary-menu-header' ) ); ?>
		<?php //wp_nav_menu( array( 'menu' => 'secondary', 'menu_id' => 'secondary-menu-header' ) ); ?>
	</div>-->

	<div id="content" class="site-content">
