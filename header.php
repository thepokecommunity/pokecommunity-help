<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="masthead" class="omnibar site-header fixed-top" role="primary-navigation">
		<nav class="navbar navbar-expand-md navbar-dark community-nav">
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#communityNav" aria-controls="communityNav" aria-expanded="false" aria-label="Toggle navigation">
					Explore PokéCommunity
				</button>
				<div class="collapse navbar-collapse" id="communityNav">
					<ul class="navbar-nav community-nav-links">
						<li class="nav-item "><a href="https://www.pokecommunity.com/index.php" class="nav-link link-forums">Forums</a></li>
						<li class="nav-item "><a href="https://www.pokecommunity.com/forumdisplay.php?f=338" class="nav-link link-genseven">Seventh Gen</a></li>
						<li class="nav-item "><a href="https://daily.pokecommunity.com" class="nav-link link-daily">Daily</a></li>
						<li class="nav-item "><a href="https://www.pokecommunity.com/game-corner/" class="nav-link link-romhacks">Game Corner</a></li>
						<li class="nav-item "><a href="https://www.pokecommunity.com/forumdisplay.php?f=21" class="nav-link link-art">Art</a></li>
						<li class="nav-item "><a href="http://pokecommunity.psim.us/" class="nav-link link-battleserver">Battle</a></li>
						<li class="nav-item "><a href="https://discord.gg/pokecommunity" class="nav-link link-discord">Discord</a></li>
					</ul>
				</div>
			</nav>
			<nav class="navbar omnibar-main navbar-expand navbar-dark">
				<a class="navbar-brand" href="https://www.pokecommunity.com/index.php">
					<span class="brand-logo"><img alt="PokéCommunity" src="https://www.pokecommunity.com/images/brand-red-transparent.png" class="brandimage-selectable" title="PokéCommunity"></span>
					<span class="brand-text d-none d-sm-inline app-title">PokéCommunity Help</span>
				</a>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
						<ul class="navbar-nav mr-auto">
						</ul>
				</div>
			</nav>
	</div><!-- #masthead -->

	<div id="main" class="site-main">
