<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forsage
 */

?>

	<footer id="colophon" class="font-manrope mt-auto">
		<!-- Top Section: Promo -->
		<div class="hidden md:block bg-white py-10">
			<div class="container">
				<div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-10">
					<div class="shrink-0">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="lg:w-[282px] h-auto block">
						</a>
					</div>
					<div class="text-center md:text-left">
						<h2 class="text-[#D6232A] font-bold text-[20px] md:text-[24px] lg:text-[32px] mb-4">Наши партнеры равняются на нас</h2>
						<p class="text-[#000] text-[15px] md:text-[16px] lg:text-[20px]">Комфортные междугородние перевозки между городом Минском и Витебской областью</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Top Section: Promo Mobile -->
		<div class="md:hidden bg-white pt-4 pb-0">
			<div class="container">
				<div class="flex items-center justify-between gap-1>
					
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="w-full max-w-[100px] h-auto block">
						</a>
						<p class="text-[#000] text-[13px]">Комфортные междугородние перевозки между городом Минском и Витебской областью</p>
					
					
				</div>
				<div class="text-center md:text-left">
						<h2 class="text-[#D6232A] font-semibold text-[18px] mt-4 mb-4">Наши партнеры равняются на нас</h2>
					</div>
			</div>
		</div>

		<!-- Main Footer Section -->
		<div class="bg-[#111827] text-white pt-16 pb-12 lg:pb-[100px]">
			<div class="container">
				<div class="flex flex-col lg:grid lg:grid-flow-col lg:grid-cols-7 gap-x-6 gap-y-12">
					
					<!-- Col 1: Navigation -->
					<div class="hidden lg:block lg:col-span-1">
						<h3 class="text-[18px] lg:text-[20px] text-white font-medium mb-6">Навигация</h3>
						<ul class="flex flex-col gap-4 text-[#FFF] text-[15px] lg:text-[18px]">
							<li><a href="#routes" class="hover:text-brand-red transition-colors">Маршруты</a></li>
							<li><a href="#services" class="hover:text-brand-red transition-colors">Услуги</a></li>
							<li><a href="#advantages" class="hover:text-brand-red transition-colors">Преимущества</a></li>
							<li><a href="#faq" class="hover:text-brand-red transition-colors">FAQ</a></li>
							<li><a href="#contacts" class="hover:text-brand-red transition-colors">Контакты</a></li>
						</ul>
					</div>

					<!-- Col 2: Services -->
					<div class="hidden lg:block lg:col-span-2 lg:pl-12">
						<h3 class="text-[18px] text-white lg:text-[20px] font-medium mb-6">Услуги</h3>
						<ul class="flex flex-col gap-4 text-[#FFF] text-[15px] lg:text-[18px] text-nowrap">
							<li><a href="#" class="hover:text-brand-red transition-colors">Регулярные рейсы</a></li>
							<li><a href="#" class="hover:text-brand-red transition-colors">Заказ автобусов</a></li>
							<li><a href="#" class="hover:text-brand-red transition-colors">Международные поездки</a></li>
							<li><a href="#" class="hover:text-brand-red transition-colors">Корпоративные перевозки</a></li>
							<li><a href="#" class="hover:text-brand-red transition-colors">Экскурсионные туры</a></li>
							<li><a href="#" class="hover:text-brand-red transition-colors">VIP-автобусы</a></li>
						</ul>
					</div>

					<!-- Col 3: Contacts -->
					<div class="lg:max-w-[384px] lg:w-full lg:col-span-2">
						<h3 class="text-[18px] lg:text-[20px] text-white font-medium mb-6">Контакты</h3>
						<div class="flex flex-col gap-6">
							<p class="text-[14px] lg:text-[18px] text-white mb-2">Общество с ограниченной ответственностью "Форсажэкспресс"</p>
							
							<!-- Address -->
							<div class="flex gap-4">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/wmail.svg" class="w-[43px] h-[43px]">
								<div class="flex flex-col">
									<span class="text-[#FFF] text-[12px] mb-0.5">Почтовый адрес</span>
									<span class="text-[14px] lg:text-[18px] text-white leading-snug">ул.Вишневая, д. 12, г. Чашники, Витебская область.</span>
								</div>
							</div>

							<!-- Phone -->
							<div class="flex gap-4 w-full lg:w-max-[284px]">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/wphone.svg" class="w-[43px] h-[43px]"> 
								<div class="flex flex-col w-full">
									<span class="text-[#FFF] text-[12px] mb-1">Телефон</span>
									
									<div class="flex flex-col gap-2">
										<div class="flex items-center flex-nowrap gap-2">
											<div class="bg-white h-[32px] w-[32px] flex items-center justify-center">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.png" class="w-[32px] h-auto">
											</div>
											<div class="flex flex-col lg:flex-row items-center">
												<a href="tel:+375297168556" class="text-white text-[14px] lg:text-[18px] hover:text-brand-red transition-colors mr-[6px] text-nowrap">+375 (29) 716-85-56</a>
												<div class="flex gap-1.5 ml-1 -mb-[20px] lg:mt-0">
													<a href="viber://chat?number=%2B375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" class="min-w-[32px] min-h-[32px]"></a>
													<a href="https://wa.me/375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" class="min-w-[32px] min-h-[32px]"></a>
													<a href="https://t.me/+375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" class="min-w-[32px] min-h-[32px]"></a>
												</div>
											</div>
										</div>
										<div class="flex items-center gap-2 mt-2 lg:mt-0">
											<div class="bg-white h-[32px] w-[32px] flex items-center justify-center">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/a1.svg" class="w-[32px] h-auto">
											</div>
											<a href="tel:+375291935234" class="text-white text-[14px] lg:text-[18px] hover:text-brand-red transition-colors">+375 (29) 193-52-34</a>
										</div>
									</div>
								</div>
							</div>

							<!-- Email -->
							<div class="flex gap-4">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/wemail.svg" class="w-[43px] h-[43px] brightness-0 invert">
								<div class="flex flex-col">
									<span class="text-[#FFF] text-[12px] mb-0.5">E-mail</span>
									<a href="mailto:info@forsazhexpress.by" class="text-[14px] lg:text-[18px] text-white hover:text-brand-red transition-colors">info@forsazhexpress.by</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Col 4: License -->
					<div class="lg:ml-[32px] lg:col-span-2 lg:pl-12">
						<h3 class="text-[18px] lg:text-[20px] text-white font-medium mb-6">Лицензия</h3>
						<div class="flex flex-col gap-5">
							<div class="flex flex-col">
								<span class="text-[#9CA3AF] text-[12px] lg:text-[16px] mb-0.5">Лицензирующий орган</span>
								<span class="text-[14px] lg:text-[18px] text-white leading-snug">Министерство транспорта и коммуникаций Республики Беларусь</span>
							</div>

							<div class="flex flex-col">
								<span class="text-[#9CA3AF] text-[12px] lg:text-[16px] mb-0.5">Номер лицензии</span>
								<span class="text-[14px] lg:text-[18px] text-white">13200000046114</span>
							</div>

							<div class="flex flex-col">
								<span class="text-[#9CA3AF] text-[12px] lg:text-[16px] mb-0.5">Вид деятельности</span>
								<span class="text-[14px] lg:text-[18px] text-white leading-snug">Деятельность в области автомобильного транспорта</span>
							</div>

							<div class="flex flex-col">
								<span class="text-[#9CA3AF] text-[12px] lg:text-[16px] mb-0.5">Статус лицензии</span>
								<span class="text-[14px] lg:text-[18px] text-white">Действующая с 01.03.2013 г.</span>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Copyright Bar -->
			<div class="border-t border-[#D32F2F] mt-12 bg-[#111827]">
				<div class="container">
					<div class="py-6 flex flex-col md:flex-row justify-between items-center gap-4 text-[13px] lg:text-[16px] text-[#FFF]">
						<div>&copy; <?php echo date( 'Y' ); ?> ФорсажЭкспресс. Все права защищены.</div>
						<a href="<?php echo home_url( '/privacy-policy' ); ?>" class="hover:text-white transition-colors">Политика конфиденциальности</a>
						<a href="<?php echo home_url( '/cookie-policy' ); ?>" class="hover:text-white transition-colors">Политика обработки cookie</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

	<!-- Cookie Consent Popup -->
	<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 mx-auto lg:w-[852px] lg:h-[188px] bg-white z-[10000] border-2 border-[#D32F2F] transition-transform duration-500 translate-y-[150%] px-4 py-6 md:py-8 font-manrope">
		<div class="container mx-auto">
			<div class="flex flex-col lg:flex-row items-center justify-between gap-6 lg:gap-12">
				
				<!-- Text Content -->
				<div class="flex-1 text-center lg:text-left">
					<div class="text-[16px] md:text-[18px] font-medium text-[#111827] mb-3 flex items-center justify-center lg:justify-start gap-2">
						<span>Мы используем файлы cookies</span>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/coolicon.svg" alt="Cookie" class="w-6 h-6">
					</div>
					<p class="text-[16px] md:text-[18px] leading-[1.4] text-[#111827]">
						Этот сайт применяет файлы cookies для корректной работы, анализа использования и улучшения качества сервиса. Вы можете принять все файлы cookies или ограничиться только необходимыми.
					</p>
				</div>

				<!-- Buttons -->
				<div class="flex flex-col gap-3 w-full sm:w-[270px] shrink-0">
					<button id="cookie-accept" class="w-full bg-[#D32F2F] hover:bg-[#B91C1C] text-white font-medium py-3.5 rounded-lg transition-colors shadow-sm text-[16px]">
						Принять
					</button>
					<button id="cookie-decline" class="w-full bg-white border border-[#D32F2F] text-[#111827] font-medium py-3.5 rounded-lg hover:bg-red-50 transition-colors text-[16px]">
						Отклонить
					</button>
				</div>
			</div>
		</div>
	</div>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
		const banner = document.getElementById('cookie-banner');
		const acceptBtn = document.getElementById('cookie-accept');
		const declineBtn = document.getElementById('cookie-decline');
		
		// Check if user has already made a choice
		if (!localStorage.getItem('cookie_consent')) {
			// Show banner with delay
			setTimeout(() => {
				banner.classList.remove('translate-y-[150%]');
			}, 1000);
		}

		// Handle Accept
		acceptBtn.addEventListener('click', function() {
			localStorage.setItem('cookie_consent', 'accepted');
			banner.classList.add('translate-y-[150%]');
		});

		// Handle Decline
		declineBtn.addEventListener('click', function() {
			localStorage.setItem('cookie_consent', 'declined');
			banner.classList.add('translate-y-[150%]');
		});
	});
	</script>

<?php wp_footer(); ?>

</body>
</html>
