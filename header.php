<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forsage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'forsage' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="header-row">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="header-logo">
						</a>
					</div>

					<div class="header-route-info">
						<div class="route-title">Чашники - Минск</div>
						<div class="route-schedule">Ежедневно 8.00-21.00</div>
					</div>

					<div class="header-phones">
						<div class="phone-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.png" alt="MTS" width="16" height="16">
							<a href="tel:+375297168556">+375 (29) 716-85-56</a>
						</div>
						<div class="phone-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/a1.png" alt="A1" width="16" height="16">
							<a href="tel:+375291935234">+375 (29) 193-52-34</a>
						</div>
					</div>

					<div class="header-socials">
						<a href="#" class="social-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" alt="Viber"></a>
						<a href="#" class="social-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" alt="WhatsApp"></a>
						<a href="#" class="social-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" alt="Telegram"></a>
					</div>

					<div class="header-cta">
						<a href="#booking" class="btn btn-primary">Забронировать место</a>
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'header-menu',
						)
					);
					?>
				</nav>
			</div>
		</div>
	</header>
