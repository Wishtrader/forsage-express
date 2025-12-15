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

<body <?php body_class( 'font-manrope antialiased text-[#111827]' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'forsage' ); ?></a>

	<header id="masthead" class="bg-white font-manrope relative">
		<?php
		$menu_items = [
			['title' => 'Маршруты', 'url' => '#routes'],
			['title' => 'Услуги', 'url' => '#services'],
			['title' => 'Преимущества', 'url' => '#advantages'],
			['title' => 'FAQ', 'url' => '#faq'],
			['title' => 'Контакты', 'url' => '#contacts'],
		];
		?>
		<!-- Mobile Header (Visible < md) -->
		<div class="md:hidden bg-white shadow-sm pb-4 pt-2">
			<div class="container">
				<!-- Top Row -->
				<div class="flex items-center justify-between mb-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="w-[120px] h-auto block">
					</a>
					
					<div class="flex flex-col items-center">
						<div class="text-[15px] font-bold text-[#111827] leading-tight">Чашники - Минск</div>
						<div class="text-[13px] lg:text-[20px] text-[#111827]">Ежедневно <span class="text-[15px] lg:text-[18px]">8.00-21.00</span></div>
					</div>

					<button id="mobile-menu-toggle" class="p-1 focus:outline-none">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3 12H21" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M3 6H21" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M3 18H21" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
				</div>

				<!-- Phone Row 1 -->
				<div class="flex items-center justify-between mb-3 px-2">
					<div class="flex items-center gap-3">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.png" alt="MTS" class="w-[32px] h-auto">
						<a href="tel:+375297168556" class="text-[16px] lg:text-[20px] font-bold text-[#111827]">+375 (29) 716-85-56</a>
					</div>
					<div class="flex items-center gap-2">
						<a href="viber://chat?number=%2B375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" class="w-8 h-8"></a>
						<a href="https://wa.me/375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" class="w-8 h-8"></a>
						<a href="https://t.me/+375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" class="w-8 h-8"></a>
					</div>
				</div>

				<!-- Phone Row 2 -->
				<div class="flex items-center gap-3 px-2 mb-1">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/a1.png" alt="A1" class="w-[32px] h-auto">
					<a href="tel:+375291935234" class="text-[17px] text-[#111827]">+375 (29) 193-52-34</a>
				</div>
			</div>
		</div>

		<!-- Mobile Menu Drawer (Hidden by default) -->
		<div id="mobile-menu-drawer" class="fixed inset-0 bg-white z-[9999] hidden flex flex-col p-5">
			<div class="flex justify-end mb-8">
				<button id="mobile-menu-close" class="p-2 focus:outline-none">
					<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
			</div>
			
			<nav class="flex-grow">
				<ul class="flex flex-col gap-6 text-[20px] text-[#111827] list-none p-0 m-0 font-medium">
					<?php foreach($menu_items as $item): ?>
						<li><a href="<?php echo $item['url']; ?>" class="hover:text-brand-red transition-colors"><?php echo $item['title']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>

			<div class="mt-auto mb-6">
				<a href="#booking" class="flex items-center justify-center w-full bg-[#D32F2F] text-white font-medium py-4 rounded-lg text-[16px]">Забронировать место</a>
			</div>
		</div>

		<!-- Desktop Header (Visible md+) -->
		<div class="hidden md:block">
			<div class="py-4 lg:max-h-[136px] max-w-[1240px] mx-auto lg:px-[20px]">
				<div class="container">
					<div class="flex items-center justify-between">
						<div class="site-branding">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="w-[180px] h-auto block">
							</a>
						</div>

						<div class="flex flex-col items-start gap-1">
							<div class="text-[20px] lg:text-[33px] font-bold text-gray-900 leading-tight">Чашники - Минск</div>
							<div class="text-[14px] lg:text-[20px] text-[#111827] mt-1">Ежедневно <span class="text-[16px] lg:text-[18px]">8.00-21.00</span></div>
						</div>

						<div class="flex flex-col gap-3">
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.svg" alt="MTS" class="w-[32px] object-contain">
								<a href="tel:+375297168556" class="text-gray-900 font-semibold text-[16px] lg:text-[20px] no-underline hover:text-brand-red transition-colors">+375 (29) 716-85-56</a>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/a1.svg" alt="A1" class="w-[32px] h-[32px] object-contain">
								<a href="tel:+375291935234" class="text-gray-900 font-semibold text-[16px] lg:text-[20px] no-underline hover:text-brand-red transition-colors">+375 (29) 193-52-34</a>
							</div>
						</div>

						<div class="flex items-center gap-2.5 lg:mb-auto lg:mt-4">
						<a href="viber://chat?number=%2B375297168556" class="social-link block hover:scale-110 transition-transform"><img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" alt="Viber" class="w-[32px] h-[32px] block"></a>
							<a href="https://wa.me/375297168556" class="social-link block hover:scale-110 transition-transform"><img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" alt="WhatsApp" class="w-[32px] h-[32px] block"></a>
							<a href="https://t.me/+375297168556" class="social-link block hover:scale-110 transition-transform"><img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" alt="Telegram" class="w-[32px] h-[32px] block"></a>
						</div>

						<div>
							<a href="#booking" class="inline-flex items-center justify-center bg-brand-red text-white px-8 py-3 rounded-md font-medium text-[16px] lg:w-[282px] lg:h-[51px] no-underline hover:bg-brand-red-hover transition-colors shadow-sm">Забронировать место</a>
						</div>
					</div>
				</div>
			</div>

			<div class="py-3 border-t-2 border-t-[#D6232A]">
				<div class="container">
					<nav id="site-navigation" class="w-full">
						<ul class="flex justify-center gap-10 list-none m-0 p-0">
							<?php foreach($menu_items as $item): ?>
								<li><a href="<?php echo $item['url']; ?>" class="text-[#111827] text-[16px] lg:text-[20px] font-medium hover:text-brand-red transition-colors"><?php echo $item['title']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
		const menuToggle = document.getElementById('mobile-menu-toggle');
		const menuClose = document.getElementById('mobile-menu-close');
		const mobileDrawer = document.getElementById('mobile-menu-drawer');
		const body = document.body;

		function openMenu() {
			mobileDrawer.classList.remove('hidden');
			body.classList.add('overflow-hidden'); // Prevent scrolling
		}

		function closeMenu() {
			mobileDrawer.classList.add('hidden');
			body.classList.remove('overflow-hidden');
		}

		if (menuToggle) {
			menuToggle.addEventListener('click', openMenu);
		}

		if (menuClose) {
			menuClose.addEventListener('click', closeMenu);
		}
	});
	</script>
