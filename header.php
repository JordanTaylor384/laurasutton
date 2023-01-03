<?php
/**
* The header for our theme
* This is the template that displays all of the <head> section and everything up until <div id="content">
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
* @package laurasutton
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/has4awm.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class('in');?>>
	<div id="page" class="site navigator">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'laurasutton' ); ?></a>


		<header class="site-header">
			<div class="site-header__fixed">
				<div class="site-header__grid">
					<div class="site-header__logo">
						<?php $logoImage = get_field('logo_image', 'options');?>
						<a href="/">
							<img class="site-header__logo--fixed" src="<?=$logoImage['url'];?>" alt="">
						</a>
					</div>
					<div class="site-header__nav-toggle">
						<div class="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="site-header__prop">
				<?php $logoText = get_field('logo_text', 'options');?>
				<img class="site-header__logo--text" src="<?=$logoText['url'];?>" alt="">
			</div>
		</header>

		<div class="overlay">
			<div class="overlay__inner">
				<div class="overlay__close">

				</div>
				<div class="overlay__menu">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'walker' => new Custom_Menu_List()
					) ); ?>
				</div>
			</div>
		</div>
