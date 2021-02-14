<?php
/**
* The header for our theme
* This is the template that displays all of the <head> section and everything up until <div id="content">
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
* @package annearcher
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/duo0nym.css">
	<?php wp_head(); ?>
</head>

<body>
	<div <?php body_class('in');?>>
		<div id="page" class="site navigator">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'annearcher' ); ?></a>

			<div class="overlay">
				<div class="overlay__inner">
					<div class="overlay__header">
						<div class="overlay__logo">
							<a href="/" aria-label="Visit Anne Archer Associates Homepage" tabindex="-1">
								<img src="<?=the_field('header_logo', 'option');?>" aria-label="Anne Archer Associates Logo"/>
							</a>
						</div>
						<div class="overlay__close">
							<div class="close-toggle"></div>
						</div>
					</div>
					<nav class="overlay__nav">
						<?php wp_nav_menu( array(
							'theme_location' => 'overlay',
							'menu_id'        => 'overlay-menu',
							'walker' => new Custom_Menu_List()
						) ); ?>
					</nav>
				</div>
			</div>

			<header class="site-header">
				<div class="container">
					<div class="site-header__grid">
						<div class="site-header__logo">
							<a href="/" aria-label="Visit Anne Archer Associates Homepage" tabindex="-1">
								<img src="<?=the_field('header_logo', 'option');?>" aria-label="Anne Archer Associates Logo"/>
							</a>
						</div>
						<div class="site-header__nav">
							<div class="site-header__greeting">
								<div class="greeting"></div>
								<div class="logo">
									<img src="<?=the_field('sticky_logo', 'option');?>"/>
								</div>
							</div>
							<nav>
								<?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'walker' => new Custom_Menu_List()
								) ); ?>
							</nav>
							<div class="nav-toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</header>


			<div class="sticky-nav" aria-hidden="true">
				<div class="container">
					<div class="sticky-nav__grid">
						<div class="sticky-nav__logo">
							<a href="/" aria-label="Visit Anne Archer Associates Homepage" tabindex="-1">
								<img src="<?=the_field('sticky_logo', 'option');?>" aria-label="Anne Archer Associates Logo"/>
							</a>
						</div>
						<div class="sticky-nav__nav">
							<nav>
								<?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'add_a_class'     => 'noindex',
									'walker' => new Custom_Menu_List()
								) ); ?>
							</nav>
							<div class="nav-toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="prop"></div>

			<a name="content"></a>
