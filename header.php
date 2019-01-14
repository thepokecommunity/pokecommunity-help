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

	<nav id="masthead" class="navbar navbar-default omnibar site-header" role="primary-navigation">
		<script src="//www.pokecommunity.com/library/headroom.min.js"></script>
		<div class="container-fluid sub-navigation slide headroom--top headroom--not-bottom">
		<button class="btn btn-sm explore-PC">Explore PokéCommunity</button>
			<ul class="nav navbar-nav">
				<li class="dropdown"><a href="https://www.pokecommunity.com/index.php" class="link-forums">Forums</a></li>
				<li class="dropdown"><a href="https://www.pokecommunity.com/forumdisplay.php?fn=ultrasunmoon" class="link-sunmoon">Ultra Sun/Ultra Moon</a></li>
				<li class="dropdown"><a href="https://daily.pokecommunity.com" class="link-daily">Daily</a></li>
				<li class="dropdown"><a href="https://www.pokecommunity.com/forumdisplay.php?f=289" class="link-romhacks">Fan Games</a></li>
				<li class="dropdown"><a href="https://www.pokecommunity.com/forumdisplay.php?f=21" class="link-art">Art</a></li>
				<li class="dropdown"><a href="https://pokecommunity.psim.us/" class="link-battleserver">Battle</a></li>
				<li class="dropdown"><a href="https://discord.gg/hpQpnzX" class="link-discord">Discord</a></li>
				<li class="dropdown"><a href="https://pokecommunity.com/help" class="link-help">Help</a></li>
			</ul>
		</div>
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="app-title"><img src="https://www.pokecommunity.com/images/brand-pcdaily-transparent.png" alt="PokéCommunity Help" class="brandimage" height="50" width="50"></a>
			</div>
			<ul class="nav navbar-nav no-collapse">
				<li id="menu-item-8" class="app-title menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8 active"><a title="Daily" href="https://daily.pokecommunity.com/">Help</a></li>
			</ul>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        Sections
		    </button>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu', 'walker' => new wp_bootstrap_navwalker() ) ); ?>
			</div>
			<ul class="nav navbar-nav navbar-right core-nav-usertools">
				<li class="search-menu"><a href="#" class="search-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search fa-lg"></i> <span class="sr-only">Search</span>
				</a>
				<ul class="dropdown-menu">
					<?php get_search_form(); ?>
				</ul>
				</li>
			</ul>
		</div>
		<script>
			var subnavopen = 0;
			  jQuery(".explore-PC").click(function(){
			    if(subnavopen == 0) {
			      jQuery(".sub-navigation .navbar-nav").removeClass("closed");
			      jQuery(".sub-navigation .navbar-nav").slideDown();
			      subnavopen = 1;
			    }
			    else {
			      jQuery(".sub-navigation .navbar-nav").addClass("closed");
			      subnavopen = 0;
			    }
			    return false
			  });
			
			var header = document.querySelector(".sub-navigation");
			 
			new Headroom(header, {
			  tolerance: {
			    down : 2,
			    up : 5
			  },
			  offset : 100,
			  classes: {
			    initial: "slide",
			    pinned: "nav-fixed",
			    unpinned: "nav-unfixed"
			  },
			  onUnpin : function() {
			    jQuery(".sub-navigation .navbar-nav").addClass("closed");
			  }
			}).init();
		</script>
	</nav><!-- #masthead -->
			
	<div id="search-container" class="search-box-wrapper hide">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>

	<div id="main" class="site-main">
