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
					
					<ul class="navbar-nav navbar-user-tools">
						
						<li class="nav-item nav-item-help  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarHelpDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-question-circle"></i>
								<span class="nav-link-label sr-only">Help</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarHelpDropdown">
								
							</div>
						</li>
						<li class="nav-item nav-item-donations  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDonationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-donate"></i>
								<span class="nav-link-label sr-only">Donations</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarDonationsDropdown">
								
							</div>
						</li>
						<li class="nav-item nav-item-search  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarSearchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-search"></i>
								<span class="nav-link-label sr-only">Search</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarSearchDropdown">
								
							</div>
						</li>
						<li class="nav-item nav-item-admin-tools  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarAdminToolsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-toolbox"></i>
								<span class="nav-link-label sr-only">Administrative Tools</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarAdminToolsDropdown">
								
							</div>
						</li>
						<li class="nav-item nav-item-notifications  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarNotificationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-bell"></i>
								<span class="nav-link-label sr-only">Notifications</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarNotificationsDropdown">
								
							</div>
						</li>
						<li class="nav-item nav-item-messages  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarMessagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-fw fa-lg fa-envelope"></i>
								<span class="nav-link-label sr-only">Messages</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarMessagesDropdown">
								
							</div>
						</li>
						<li class="nav-item user-menu dropdown has-avatar">
							<a class="nav-link dropdown-toggle" href="#" id="navbarUserMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="menu-icon"><i class="far fa-fw fa-lg fa-user"></i></span>
								<span class="nav-link-label">Laslow</span>
								<img class="useravatar hidden-xs" alt="You" src="https://www.pokecommunity.com/customavatars/avatar5_2.gif">
							</a>
							<div class="dropdown-menu dropdown-menu-right wide-menu" aria-labelledby="navbarUserMenuDropdown">
								<div class="user-account-box">
									<div class="user-menu-avatar">
										<img class="useravatar" alt="Your avatar" src="https://www.pokecommunity.com/customavatars/avatar5_2.gif">
									</div>
									<div class="user-menu-greeting">
										<h1 class="account-name">Laslow</h1>
										<ul class="actions actions-text actions-inline">
											<li class="action"><a href="https://www.pokecommunity.com/member.php?u=5"><i class="far fa-fw fa-id-card"></i> Profile</a></li>
											<li class="action"><a href="https://www.pokecommunity.com/settings.php?do=account"><i class="fas fa-fw fa-user-circle"></i> Account Settings</a></li>
										</ul>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<ul class="actions actions-grid row">
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/member.php?u=5"><div class="action-icon">
											<i class="fal fa-address-card"> </i>
										</div>
										<span>Profile</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/dashboard.php"><div class="action-icon">
											<i class="fas fa-tachometer-alt"> </i>
										</div>
										<span>Dashboard</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/settings.php"><div class="action-icon">
											<i class="far fa-sliders-v-square"> </i>
										</div>
										<span>Settings</span></a>
									</li>
									<li class="action col-4">
										<a href="#" onclick="window.open('misc.php?do=buddylist&amp;focus=1','buddylist','statusbar=no,menubar=no,toolbar=no,scrollbars=yes,resizable=yes,width=250,height=300'); return false;"><div class="action-icon">
											<i class="fas fa-address-book"> </i>
										</div>
										<span>Contacts</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/search.php?do=getnew"><div class="action-icon">
											<i class="far fa-calendar-check"> </i>
										</div>
										<span>New Posts</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/search.php?do=getnew&amp;and=subscribe"><div class="action-icon">
											<div>
												<i class="fas fa-check" data-fa-transform="shrink-8 up-.5" data-fa-mask="fas fa-heart"></i>
											</div>
										</div>
										<span>Favorite Section Updates</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/settings.php?do=editavatar"><div class="action-icon">
											<i class="far fa-portrait"> </i>
										</div>
										<span>Change<br>Avatar</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/settings.php?do=postflair"><div class="action-icon">
											<i class="fas fa-fire"> </i>
										</div>
										<span>Change<br>Flair</span></a>
									</li>
									<li class="action col-4">
										<a href="https://www.pokecommunity.com/settings.php?do=profile"><div class="action-icon">
											<i class="fas fa-user"> </i>
										</div>
										<span>Change<br>Profile</span></a>
									</li>
								</ul>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="https://www.pokecommunity.com/login.php?do=logout&amp;logouthash=1547789506-6861f8a69445f376c3f277504a6f21c374bff4cd"><i class="fas fa-sign-out"></i>Sign Out</a>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
	</div><!-- #masthead -->
			
	<div id="search-container" class="search-box-wrapper hide">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>

	<div id="main" class="site-main">
