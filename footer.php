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
		<div class="bg-white py-10">
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

		<!-- Main Footer Section -->
		<div class="bg-[#111827] text-white pt-16 pb-12 lg:pb-[100px]">
			<div class="container">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12 lg:flex">
					
					<!-- Col 1: Navigation -->
					<div>
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
					<div>
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
					<div>
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
							<div class="flex gap-4">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/wphone.svg" class="w-[43px] h-[43px]"> 
								<div class="flex flex-col w-full">
									<span class="text-[#FFF] text-[12px] mb-1">Телефон</span>
									
									<div class="flex flex-col gap-2">
										<div class="flex items-center flex-nowrap gap-2">
											<div class="bg-white h-[32px] w-[32px] flex items-center justify-center">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.png" class="w-[32px] h-auto">
											</div>
											<div class="flex items-center">
												<a href="tel:+375297168556" class="text-white text-[14px] lg:text-[18px] hover:text-brand-red transition-colors mr-[6px] text-nowrap">+375 (29) 716-85-56</a>
												<div class="flex gap-1.5 ml-1">
													<a href="viber://chat?number=%2B375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" class="min-w-[32px] min-h-[32px]"></a>
													<a href="https://wa.me/375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" class="min-w-[32px] min-h-[32px]"></a>
													<a href="https://t.me/+375297168556"><img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" class="min-w-[32px] min-h-[32px]"></a>
												</div>
											</div>
										</div>
										<div class="flex items-center gap-2">
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
					<div class="ml-[32px]">
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
						<a href="#" class="hover:text-white transition-colors">Политика конфиденциальности</a>
						<a href="#" class="hover:text-white transition-colors">Политика обработки cookie</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
