<?php
/**
 * The front page template file
 *
 * @package Forsage
 */

get_header();
?>

<main id="primary" class="site-main bg-white">
	<!-- Hero Section -->
	<section class="relative pt-12 pb-4 md:pt-28 md:pb-[80px] overflow-hidden">
		
		<!-- Background Elements (Road/Path) -->
		<div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-[1400px] pointer-events-none z-0">
			<!-- Placeholder for road graphic. Assuming 'Vector' or similar if it existed, otherwise using CSS or skipping if asset missing. -->
		</div>

		<div class="container relative z-10">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
				
				<!-- Left Content (Text) - Spans 5 columns -->
				<div class="lg:col-span-6 relative z-20">
					<!-- Badge -->
					<div class="hidden lg:inline-flex items-center gap-2.5 bg-[#FFF0F3] border rounded-[8px] px-4 py-3 mb-8">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/rocket-outline.svg" class="w-[24px] h-[24px] text-[#B81B22]">
						<span class="text-[#B81B22] text-[13px] md:text-[16px] font-medium">Быстро·Комфортно·Надёжно</span>
					</div>
					
					<!-- H1 Title -->
					<h1 class="text-[36px] lg:text-40px] leading-[1.1] font-semibold text-[#111827] mb-6 tracking-tight">
						Комфортные междугородние <br> <span class="text-[#D6232A]">перевозки</span> по Беларуси
					</h1>

					<!-- Route Subtitle -->
					<div class="text-[16px] md:text-[18px] font-medium text-[#000000] mb-5">
						Междугородние рейсы Минск — Чашники и Минск — Сенно
					</div>

					<!-- Description -->
					<p class="text-[14px] md:text-[18px] leading-relaxed text-[#000000] mb-10 max-w-[588px]">
						Комфортные пассажирские перевозки между городом Минском и Витебской областью. Регулярные рейсы и заказ автобусов для групп и мероприятий.
					</p>
				</div>

				<!-- Right Content (Bus Image) - Spans 7 columns but overflows -->
				<!-- We position this absolutely relative to the container or grid to control the overflow "out to the right" -->
				<div class="hidden lg:flex lg:col-span-6 relative z-10 h-full min-h-[300px] lg:min-h-[500px]">
					<!-- The image needs to scale and positioned to the right -->
					<div class="absolute right-[-20%] lg:right-[-200px] top-1/2 -translate-y-1/2 w-[140%] lg:w-[1100px] lg:mt-[-80px] max-w-none">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/car.png" alt="Forsage Bus" class="w-full h-auto object-contain drop-shadow-2xl">
					</div>
				</div>
			</div>

			<!-- Search Widget - Positioned at bottom overlapping -->
			<div class="w-full bottom-[-100px] z-30 hidden md:block">
				<div class="bg-white shadow-[0_10px_40px_-5px_rgba(0,0,0,0.1)] border border-gray-100 p-2 flex items-center">
					
					<!-- From -->
					<div class="flex-1 relative px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Откуда?</label>
						<select id="desktop-from" class="w-full font-bold text-gray-800 outline-none text-[15px] bg-transparent appearance-none cursor-pointer">
							<option value="Минск">Минск</option>
							<option value="Чашники">Чашники</option>
							<option value="Сенно">Сенно</option>
						</select>
						
						<!-- Swap Button Centered on Border -->
						<button id="desktop-swap" class="absolute top-1/2 -translate-y-1/2 right-[-14px] w-7 h-7 bg-[#FEF2F2] rounded-full border border-white shadow-sm flex items-center justify-center z-10 text-[#D32F2F] hover:bg-red-100 transition-transform active:scale-95">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/Arrow - Swap.svg" class="w-4 h-4">
						</button>
					</div>

					<!-- To -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100 pl-8">
						<label class="block text-[11px] text-gray-400 mb-1">Куда?</label>
						<select id="desktop-to" class="w-full font-bold text-gray-800 outline-none text-[15px] bg-transparent appearance-none cursor-pointer">
							<option value="Чашники">Чашники</option>
							<option value="Минск">Минск</option>
							<option value="Сенно">Сенно</option>
						</select>
					</div>

					<!-- Date -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Когда?</label>
						<input id="hero-date-when" type="text" class="w-full font-bold text-gray-800 outline-none text-[15px] bg-transparent cursor-pointer placeholder-gray-800" value="24 ноября">
					</div>

					<!-- Return -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Обратно</label>
						<input id="hero-date-return" type="text" placeholder="Укажите дату" class="w-full font-bold text-gray-800 outline-none text-[15px] placeholder-gray-300 bg-transparent cursor-pointer">
					</div>

					<!-- Passengers -->
					<div class="flex-1 px-4 py-2">
						<label class="block text-[11px] text-gray-400 mb-1">Пассажиры</label>
						<div class="relative">
							<select class="w-full font-bold text-gray-800 outline-none text-[15px] bg-transparent appearance-none cursor-pointer pr-6 relative z-10">
								<option value="1">1 пассажир</option>
								<option value="2">2 пассажира</option>
								<option value="3">3 пассажира</option>
								<option value="4">4 пассажира</option>
							</select>
							<div class="absolute right-0 top-1/2 -translate-y-1/2 pointer-events-none">
								<svg class="w-4 h-4 text-[#D32F2F]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
								</svg>
							</div>
						</div>
					</div>

					<!-- Button -->
					<div class="pl-2">
						<a href="#contacts" class="inline-flex items-center justify-center bg-[#D32F2F] text-white font-bold py-3.5 px-6 rounded-lg hover:bg-[#B71C1C] transition-colors shadow-sm text-[15px] no-underline">
							Забронировать место
						</a>
					</div>
				
				</div>
				<!-- Buttons -->
					<div class="flex flex-col sm:flex-row gap-4 mt-[24px]">
						<a href="#routes" class="inline-flex justify-center items-center bg-[#D32F2F] text-white px-3 py-2 rounded-lg font-medium hover:bg-[#B71C1C] transition-all text-[16px] shadow-sm min-w-[204px] min-h-[48px]">
							Посмотреть маршруты
						</a>
						<a href="#contacts" class="inline-flex justify-center items-center bg-white text-[#111827] border border-[#D6232A] px-3 py-2 rounded-lg font-medium hover:bg-gray-50 transition-all text-[16px] shadow-sm min-w-[204px] min-h-[48px]">
							Связаться с нами
						</a>
					</div>
			</div>
			
			<!-- Mobile Search Widget (Simpler layout) -->
			<div class="md:hidden lg:mt-8 bg-white rounded-xl shadow-lg border border-gray-100 p-4">
				<div class="flex flex-col gap-4">
					<div class="relative">
						<label class="text-[11px] text-gray-400">Откуда?</label>
						<select id="mobile-from" class="w-full font-bold border-b border-gray-200 py-2 outline-none bg-transparent appearance-none">
							<option value="Минск">Минск</option>
							<option value="Чашники">Чашники</option>
							<option value="Сенно">Сенно</option>
						</select>

						<!-- Mobile Swap Button -->
						<button id="mobile-swap" class="absolute bottom-[-14px] right-4 w-7 h-7 bg-[#FEF2F2] rounded-full border border-white shadow-sm flex items-center justify-center z-10 text-[#D32F2F] hover:bg-red-100 transition-transform active:scale-95 rotate-90">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/Arrow - Swap.svg" class="w-4 h-4">
						</button>
					</div>
					<div class="relative pt-2">
						<label class="text-[11px] text-gray-400">Куда?</label>
						<select id="mobile-to" class="w-full font-bold border-b border-gray-200 py-2 outline-none bg-transparent appearance-none">
							<option value="Чашники">Чашники</option>
							<option value="Минск">Минск</option>
							<option value="Сенно">Сенно</option>
						</select>
					</div>
					<div class="grid grid-cols-2 gap-4">
						<div>
							<label class="text-[11px] text-gray-400">Когда?</label>
							<input id="mobile-date-when" type="text" class="w-full font-bold border-b border-gray-200 py-2 outline-none bg-transparent" value="24 ноября">
						</div>
						<div>
							<label class="text-[11px] text-gray-400">Обратно?</label>
							<input id="mobile-date-when" type="text" class="w-full font-bold border-b border-gray-200 py-2 outline-none bg-transparent" value="24 ноября">
						</div>
					</div>
					<div>
							<label class="text-[11px] text-gray-400">Пассажиры</label>
							<select class="w-full font-bold border-b border-gray-200 py-2 outline-none bg-transparent appearance-none">
								<option value="1">1 пассажир</option>
								<option value="2">2 пассажира</option>
								<option value="3">3 пассажира</option>
								<option value="4">4 пассажира</option>
							</select>
						</div>
					<a href="#contacts" class="w-full flex items-center justify-center bg-[#D32F2F] text-white font-bold py-3 rounded-lg mt-2 no-underline">
						Забронировать место
					</a>
				</div>
			</div>

			<!-- The mobile image of car -->
						<img src="<?php echo get_template_directory_uri(); ?>/assets/car.png" alt="Forsage Bus" class="block lg:hidden w-full h-auto object-contain">
					

	<!-- Flatpickr -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<style>
		.flatpickr-calendar {
			border-radius: 16px;
			box-shadow: 0 10px 40px rgba(0,0,0,0.1);
			border: none;
			font-family: inherit;
		}
		.flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
			background: #D32F2F;
			border-color: #D32F2F;
		}
		.flatpickr-months .flatpickr-month {
			color: #111827;
			fill: #111827;
		}
		.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
			background-color: transparent;
		}
	</style>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		const config = {
			locale: "ru",
			dateFormat: "j F",
			minDate: "today",
			disableMobile: "true",
			defaultDate: "today"
		};
		
		flatpickr("#hero-date-when", config);
		flatpickr("#hero-date-return", { ...config, defaultDate: null });
		flatpickr("#mobile-date-when", config);

		// Booking Form Date & Time
		flatpickr("#booking-date", {
			locale: "ru",
			enableTime: true,
			dateFormat: "d.m.Y H:i",
			time_24hr: true,
			minDate: "today",
			disableMobile: "true"
		});

		// Swap Cities Functionality
		function initSwap(fromId, toId, btnId) {
			const fromSelect = document.getElementById(fromId);
			const toSelect = document.getElementById(toId);
			const swapBtn = document.getElementById(btnId);

			if (fromSelect && toSelect && swapBtn) {
				swapBtn.addEventListener('click', function(e) {
					e.preventDefault();
					const fromVal = fromSelect.value;
					const toVal = toSelect.value;
					
					fromSelect.value = toVal;
					toSelect.value = fromVal;
										// Animation effect
					swapBtn.classList.add('scale-110');
					setTimeout(() => swapBtn.classList.remove('scale-110'), 200);
				});
			}
		}

		initSwap('desktop-from', 'desktop-to', 'desktop-swap');
		initSwap('mobile-from', 'mobile-to', 'mobile-swap');

		// Form Validation and Redirect
		const contactForm = document.getElementById('contact-form');
		if (contactForm) {
			contactForm.addEventListener('submit', function(e) {
				e.preventDefault();
				
				const nameInput = document.getElementById('booking-name');
				const phoneInput = document.getElementById('booking-phone');
				const directionInput = document.getElementById('booking-direction');
				const dateInput = document.getElementById('booking-date');
				
				let isValid = true;
				
				[nameInput, directionInput, dateInput, phoneInput].forEach(el => {
					if (!el.value.trim()) {
						el.classList.add('border-red-500');
						isValid = false;
					} else {
						el.classList.remove('border-red-500');
					}
				});
				
				if (isValid) {
					// Save values to localStorage instead of query params
					localStorage.setItem('forsage_booking_name', nameInput.value.trim());
					localStorage.setItem('forsage_booking_phone', phoneInput.value.trim());
					
					// Redirect without parameters
					<?php 
						$ty_page = get_page_by_path('thank-you');
						$ty_url = $ty_page ? get_permalink($ty_page->ID) : home_url('/?pagename=thank-you');
					?>
					window.location.href = "<?php echo esc_url($ty_url); ?>";
				}
			});
		}
	});
	</script>

		</div>
	</section>

	<section id="routes" class="relative">
		<div class="container mx-auto px-4">
			
			<h2 class="text-[28px] md:text-[40px] font-medium text-center mb-10 text-[#111827]">Регулярные маршруты</h2>

			<?php
			$args = array(
				'post_type'      => 'route',
				'posts_per_page' => -1,
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
			);
			$routes_query = new WP_Query( $args );

			if ( $routes_query->have_posts() ) : 
				$first_slug = '';
			?>

			<!-- Tabs Navigation -->
			<div class="flex justify-center mb-12">
				<div class="inline-flex bg-gray-100/80 rounded-lg p-1.5 flex-wrap justify-center gap-2 md:gap-0">
					<?php 
					$i = 0;
					while ( $routes_query->have_posts() ) : $routes_query->the_post(); 
						$slug = get_post_field( 'post_name', get_the_ID() );
						if ( $i === 0 ) $first_slug = $slug;
						
						$active_class = ( $i === 0 ) ? 'bg-white text-[#D32F2F] shadow-sm underline decoration-2 underline-offset-4' : 'text-gray-500 hover:text-gray-900';
					?>
					<button onclick="switchTab('<?php echo esc_js($slug); ?>')" id="btn-<?php echo esc_attr($slug); ?>" class="lg:px-[72px] py-[13px] rounded-md text-[15px] px-[10px] mx-[10px] lg:mx-0 lg:text-[18px] font-medium transition-all <?php echo $active_class; ?>">
						<?php the_title(); ?>
					</button>
					<?php 
					$i++;
					endwhile; 
					?>
				</div>
			</div>

			<!-- Tabs Content -->
			<?php
			// Reset for content loop
			$routes_query->rewind_posts();
			$j = 0;
			while ( $routes_query->have_posts() ) : $routes_query->the_post();
				$slug = get_post_field( 'post_name', get_the_ID() );
				$is_active = ( $j === 0 );
				$display_class = $is_active ? 'block' : 'hidden';

				// ACF Fields - Explicitly passing ID to ensure correctness in loop
				$post_id  = get_the_ID();
				$dep_city = get_field('departure_city', $post_id);
				$arr_city = get_field('arrival_city', $post_id);
				$dep_addr = get_field('departure_address', $post_id);
				$arr_addr = get_field('arrival_address', $post_id);
				$time     = get_field('travel_time', $post_id);
				$dist     = get_field('distance', $post_id);
				$price    = get_field('price', $post_id);
				$color_scheme = get_field('color_scheme', $post_id); // red or blue

				// Color Logic
				if ( $color_scheme === 'blue' ) {
					$line_color = 'bg-blue-100';
					$dot_color = 'bg-blue-500';
					$dot_border = 'border-blue-200';
					$card_bg = 'bg-gray-900';
					$card_text = 'text-white';
					$btn_text_color = 'text-gray-900';
					$header_highlight = 'text-gray-900';
				} else {
					// Red (Default)
					$line_color = 'bg-red-100';
					$dot_color = 'bg-[#E11D48]'; // brand-red
					$dot_border = 'border-[#FECDD3]';
					$card_bg = 'bg-[#B91C1C]';
					$card_text = 'text-white';
					$btn_text_color = 'text-[#B91C1C]';
					$header_highlight = 'text-[#D32F2F]';
				}
			?>
			<div id="tab-<?php echo esc_attr($slug); ?>" class="tab-content animate-fade-in <?php echo $display_class; ?>">
				
				<!-- Top Info Block -->
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-12">
					
					<!-- Route Details -->
					<div class="lg:col-span-8 bg-white border border-gray-100 rounded-2xl p-8 shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
						<div class="relative pl-10">
							<!-- Timeline Line -->
							<img class="absolute left-[11px] w-[1.5px] top-3 bottom-8" src="<?php echo get_template_directory_uri(); ?>/assets/vline.svg" alt="path">

							<!-- Departure -->
							<div class="relative mb-4">
								<div class="absolute left-[-53px] top-1 flex flex-col items-center z-10 bg-white">
									<div class="w-[48px] h-[38px] border border-[#D6232A] rounded-[4px] flex items-center justify-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/Location.svg" alt="location">
									</div>
								</div>
								<div class="text-[12px] text-gray-400 mb-1 ml-[10px]">Отправление</div>
								<div class="text-[16px] lg:text-[18px] font-[300] text-[#4B5563] ml-[10px] leading-snug max-w-md">
									<?php echo nl2br(esc_html($dep_addr)); ?>
								</div>
							</div>

							<!-- Meta Info (Time/Distance) -->
							<div class="flex items-center gap-6 mb-10 pl-1">
								<div class="flex items-center gap-2 text-gray-400 text-xs">
									<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
									<span><?php echo esc_html($time); ?></span>
								</div>
								<div class="flex items-center gap-2 text-gray-400 text-xs">
									<span><?php echo esc_html($dist); ?></span>
								</div>
							</div>

							<!-- Arrival -->
							<div class="relative">
								<div class="absolute left-[-53px] top-1 flex flex-col items-center z-10 bg-white">
									<div class="w-[48px] h-[38px] border border-green-200 rounded-[4px] flex items-center justify-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/Location2.svg" alt="location">
									</div>
								</div>
								<div class="text-[12px] text-gray-400 mb-1 ml-[10px]">Прибытие</div>
								<div class="text-[16px] lg:text-[18px] font-medium text-[#4B5563] ml-[10px] leading-snug">
									<?php echo nl2br(esc_html($arr_addr)); ?>
								</div>
							</div>
						</div>
					</div>

					<!-- Price Card -->
					<div class="lg:col-span-4">
						<div class="<?php echo $card_bg . ' ' . $card_text; ?> rounded-2xl p-8 h-full flex flex-col justify-between shadow-lg relative overflow-hidden group">
							
							<!-- Decorative Circle -->
							<div class="absolute top-[-50px] right-[-50px] w-40 h-40 bg-white opacity-5 rounded-full pointer-events-none"></div>

							<div class="relative z-10">
								<div class="text-[16px] text-white uppercase tracking-wider mb-2">ОТ</div>
								<div class="text-[40px] font-semibold leading-none mb-[18px]"><?php echo esc_html($price); ?></div>
								<div class="text-[16px] text-white">за место</div>
							</div>

							<a href="#contacts" class="relative z-10 w-full flex items-center justify-center bg-white <?php echo $btn_text_color; ?> font-bold py-4 rounded-xl mt-8 hover:bg-gray-50 transition-colors shadow-sm no-underline">
								Забронировать место
							</a>
						</div>
					</div>
				</div>

				<!-- Stops List -->
				<!-- Stops List -->
				<?php 
				$stops_text = get_field('stops_text', get_the_ID());
				if( !empty($stops_text) ): 
				?>
				<div class="mb-16">
					<h3 class="text-[18px] lg:text-[24px] font-semibold mb-6 text-gray-900">Остановки по маршруту</h3>
					<div class="flex items-center flex-wrap gap-1 text-[18px] text-gray-600 bg-gray-50 p-6 rounded-2xl border border-gray-100">
						<?php 
						// Split by newline and filter empty
						$raw_stops = preg_split('/\r\n|\r|\n/', $stops_text);
						$stops = array_filter($raw_stops, function($value) { return !empty(trim($value)); });
						$stops = array_values($stops); // Reindex
						$total_stops = count($stops);
						
						foreach( $stops as $index => $stop ) {
							$stop = trim($stop);
							
							// Check for bold/highlight marker *
							$is_hl = false;
							if ( strpos($stop, '*') === 0 ) {
								$is_hl = true;
								$stop = substr($stop, 1); // remove *
							}

							// Auto-highlight first and last
							if ( $index === 0 || $index === $total_stops - 1 ) {
								$is_hl = true;
							}
							
							if ($index > 0) {
								echo '
								<span class="mx-2 text-[#D6232A] min-w-[27px]">
									<img src="' . get_template_directory_uri() . '/assets/line_swap.svg" alt="arrows" class="w-[24px]">
								</span>';
							}
							
							if ($is_hl) {
								echo '<span class="' . $header_highlight . ' font-bold">' . esc_html($stop) . '</span>';
							} else {
								echo esc_html($stop);
							}
						} 
						?>
					</div>
				</div>
				<?php endif; ?>

				<!-- Schedule Table -->
				<div>
					<h3 class="text-[18px] lg:text-[24px] font-semibold mb-8 text-gray-900">Расписание рейсов</h3>
					<div class="overflow-x-auto bg-white border border-gray-100 rounded-2xl shadow-sm">
						<div class="min-w-[760px]">
						<!-- Table Header -->
						<div class="grid grid-cols-3 gap-4 p-6 bg-gray-50 border-b border-gray-100">
							<div></div>
							<div class="text-center font-bold <?php echo $header_highlight; ?> text-[16px] lg:text-[24px]"><?php echo esc_html($dep_city); ?></div>
							<div class="text-center font-bold <?php echo $header_highlight; ?> text-[16px] lg:text-[24px]"><?php echo esc_html($arr_city); ?></div>
						</div>

						<!-- Table Rows -->
						<?php 
						$week_map = array(
							'monday'    => 'Понедельник',
							'tuesday'   => 'Вторник',
							'wednesday' => 'Среда',
							'thursday'  => 'Четверг',
							'friday'    => 'Пятница',
							'saturday'  => 'Суббота',
							'sunday'    => 'Воскресенье',
						);

						$current_day_slug = strtolower(date('l'));

						foreach( $week_map as $key => $label_day ) {
							$time_a = get_field('sch_' . $key . '_time_a', get_the_ID());
							$time_b = get_field('sch_' . $key . '_time_b', get_the_ID());
							$is_weekend = get_field('sch_' . $key . '_weekend', get_the_ID());
							
							$is_today = ( $key === $current_day_slug );

							// Badge styles
							if ( $is_weekend ) {
								$badge_class = 'flex items-center justify-center lg:w-[204px] lg:h-[46px] text-[18px] lg:text-[20px] text-white border border-[#B91C1C] bg-[#D6232A] shadow-sm shadow-red-200';
							} else {
								$badge_class = 'flex items-center justify-center lg:w-[204px] lg:h-[46px] text-[18px] lg:text-[20px] font-bold text-[#EF4444] border border-[#FECDD3] ';
							}
							
							// Row Styles
							$row_classes = 'grid grid-cols-3 gap-4 p-6 border-b border-gray-100 items-center transition-colors';
							if ( $is_today ) {
								$row_classes .= ' bg-[#FEF2F2] shadow-[inset_3px_0_0_0_#D32F2F]'; // Light red bg + left border effect
							} else {
								$row_classes .= ' hover:bg-gray-50';
							}
						?>
						<div class="<?php echo $row_classes; ?>">
							<div class="flex items-center gap-2">
								<div class="font-bold <?php echo $badge_class; ?> px-4 py-1.5 rounded-lg w-fit text-sm">
									<?php echo esc_html($label_day); ?>
								</div>
								<?php if ( $is_today ) : ?>
									<span class="text-[#D32F2F] text-xs font-bold uppercase tracking-wide bg-white px-2 py-1 rounded border border-red-100">Сегодня</span>
								<?php endif; ?>
							</div>
							<div class="text-center md:text-lg font-medium text-gray-800 tracking-wide"><?php echo esc_html($time_a); ?></div>
							<div class="text-center md:text-lg font-medium text-gray-800 tracking-wide"><?php echo esc_html($time_b); ?></div>
						</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php 
				$j++;
				endwhile; 
				wp_reset_postdata();
			else : ?>
				<p class="text-center text-gray-500">Маршруты пока не добавлены.</p>
			<?php endif; ?>

		</div>
	</section>
	
	<!-- Note: We also need to update the Javascript to be dynamic. Since we use the slug in IDs, the existing script function switchTab needs to know ALL tabs. -->
	<!-- We can output a small inline array of slugs for JS to use. -->
	<?php if( !empty($first_slug) ) : 
		// We need to re-loop or data is already lost? 
		// Actually, we can collect data during the FIRST loop if we structure it right, 
		// but we used rewinds. Let's just do a clean data collection query/loop here to be safe and clean.
		
		$all_slugs_js = array();
		$routes_map_data = array();
		
		$routes_query = new WP_Query( $args ); 
		while($routes_query->have_posts()){ 
			$routes_query->the_post();
			$pid = get_the_ID(); 
			$slug = get_post_field('post_name'); 
			$all_slugs_js[] = $slug;
			
			// Get stops for map
			$raw_stops = get_field('stops_text', $pid);
			$stops_arr = array();
			if ($raw_stops) {
				$lines = preg_split('/\r\n|\r|\n/', $raw_stops);
				foreach($lines as $line){
					$line = trim($line);
					if(empty($line)) continue;
					// Clean * from name
					$name = str_replace('*', '', $line);
					$stops_arr[] = $name;
				}
			}
			$routes_map_data[$slug] = $stops_arr;
		}
		wp_reset_postdata();
	?>

	<!-- Map Section -->
	<section class="mb-20">
		<div class="container mx-auto px-4">
			<h2 class="text-[28px] md:text-[40px] font-medium my-10 lg:my-0 text-center lg:mt-[30px] mb-[10px] lg:mb-10 text-[#111827]">Остановки по маршруту</h2>
			
			<div class="relative w-full h-[500px] rounded-2xl overflow-hidden shadow-lg border border-gray-100 mb-4">
				<div id="route-map" class="w-full h-full bg-gray-100"></div>
			</div>
			
		</div>
	</section>

	<!-- Services Section -->
	<section id="services" class="lg:py-10 bg-white">
		<div class="container mx-auto px-4">
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-4">Наши услуги</h2>
				<p class="text-gray-500 text-lg md:text-xl max-w-3xl mx-auto">Полный спектр пассажирских перевозок для комфортных и безопасных поездок</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<!-- Card 1: Regular Routes -->
				<div class="group bg-white rounded-3xl p-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 border border-gray-100">
					<!-- Image Area -->
					<div class="relative bg-gray-100 rounded-2xl overflow-hidden h-48 mb-6">
						<!-- Icon Badge -->
						<div class="absolute top-4 left-4 bg-white p-2.5 rounded-xl shadow-sm z-10">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/bus.svg" alt="Icon" class="w-6 h-6 text-[#D32F2F]">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/bus2.png" alt="Bus" class="w-full h-full object-cover mix-blend-multiply opacity-90 group-hover:scale-105 transition-transform duration-500">
					</div>

					<!-- Content -->
					<div class="px-4 pb-6">
						<h3 class="text-xl font-bold text-gray-900 mb-3">Регулярные рейсы</h3>
						<p class="text-[15px] text-gray-500 leading-relaxed mb-6">
							Ежедневные поездки по маршрутам Минск — Чашники и Минск — Сенно с гарантированным расписанием.
						</p>
						
						<ul class="space-y-2">
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Удобное расписание
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Комфортные автобусы
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Онлайн-бронирование
							</li>
						</ul>
					</div>
				</div>

				<!-- Card 2: Order Bus -->
				<div class="group bg-white rounded-3xl p-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 border border-gray-100">
					<!-- Image Area -->
					<div class="relative bg-gray-100 rounded-2xl overflow-hidden h-48 mb-6">
						<!-- Icon Badge -->
						<div class="absolute top-4 left-4 bg-white p-2.5 rounded-xl shadow-sm z-10">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/people.svg" alt="Icon" class="w-6 h-6">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/bus2.png" alt="Bus" class="w-full h-full object-cover mix-blend-multiply opacity-90 group-hover:scale-105 transition-transform duration-500">
					</div>

					<!-- Content -->
					<div class="px-4 pb-6">
						<h3 class="text-xl font-bold text-gray-900 mb-3">Заказ автобусов</h3>
						<p class="text-[15px] text-gray-500 leading-relaxed mb-6">
							Организация групповых поездок по всей Беларуси. Современные автобусы для корпоративов, экскурсий и мероприятий.
						</p>
						
						<ul class="space-y-2">
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Любые маршруты
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Гибкое расписание
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Опытные водители
							</li>
						</ul>
					</div>
				</div>

				<!-- Card 3: International -->
				<div class="group bg-white rounded-3xl p-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 border border-gray-100">
					<!-- Image Area -->
					<div class="relative bg-gray-100 rounded-2xl overflow-hidden h-48 mb-6">
						<!-- Icon Badge -->
						<div class="absolute top-4 left-4 bg-white p-2.5 rounded-xl shadow-sm z-10">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/world.svg" alt="Icon" class="w-6 h-6">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/bus2.png" alt="Bus" class="w-full h-full object-cover mix-blend-multiply opacity-90 group-hover:scale-105 transition-transform duration-500">
					</div>

					<!-- Content -->
					<div class="px-4 pb-6">
						<h3 class="text-xl font-bold text-gray-900 mb-3">Международные рейсы</h3>
						<p class="text-[15px] text-gray-500 leading-relaxed mb-6">
							Комфортные поездки в Россию. Регулярные рейсы в популярные города с полным пакетом документов.
						</p>
						
						<ul class="space-y-2">
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Рейсы в РФ
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Удобные остановки
							</li>
							<li class="flex items-center gap-3 text-sm font-medium text-gray-700">
								<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F]"></span>
								Помощь с документами
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Choose Us Section -->
	<section id="advantages" class="py-20 bg-gray-50">
		<div class="container mx-auto px-4">
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-4">Почему выбирают нас</h2>
				<p class="text-gray-500 text-lg md:text-xl max-w-3xl mx-auto">Мы заботимся о каждом пассажире и создаём условия для приятного путешествия</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				<!-- Item 1: Safety -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/security-safe.svg" alt="Safety" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Безопасность превыше всего</h3>
					<p class="text-gray-500 leading-relaxed">
						Профессиональные водители с большим стажем и регулярное техническое обслуживание автобусов
					</p>
				</div>

				<!-- Item 2: Punctuality -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/clock.svg" alt="Clock" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Пунктуальность</h3>
					<p class="text-gray-500 leading-relaxed">
						Мы ценим ваше время. Отправление и прибытие строго по расписанию, без задержек и ожидания.
					</p>
				</div>

				<!-- Item 3: WiFi -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/wifi.svg" alt="WiFi" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Бесплатный Wi-Fi</h3>
					<p class="text-gray-500 leading-relaxed">
						Оставайтесь на связи во время поездки с высокоскоростным интернетом.
					</p>
				</div>

				<!-- Item 4: Comfort -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/tea-drink.svg" alt="Comfort" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Комфорт в пути</h3>
					<p class="text-gray-500 leading-relaxed">
						Удобные кресла, кондиционер и регулярные остановки для отдыха.
					</p>
				</div>

				<!-- Item 5: Climate -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/snowflake.svg" alt="Climate" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Климат-контроль</h3>
					<p class="text-gray-500 leading-relaxed">
						Современные системы вентиляции и кондиционирования для вашего комфорта.
					</p>
				</div>

				<!-- Item 6: Quality -->
				<div class="bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/check.svg" alt="Quality" class="w-7 h-7">
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-3">Гарантия качества</h3>
					<p class="text-gray-500 leading-relaxed">
						Более 10 лет безупречной работы и тысячи довольных пассажиров.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Statistics Section -->
	<section class="w-full h-auto md:h-[150px] bg-[#D32F2F] text-white flex items-center py-8 md:py-0">
		<div class="container mx-auto px-4">
			<div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-white/10 md:divide-none">
				
				<div class="flex flex-col items-center justify-center">
					<div class="text-3xl md:text-[40px] font-bold mb-2 leading-none">15 000+</div>
					<div class="text-sm md:text-base opacity-90 font-medium">Пассажиров в год</div>
				</div>

				<div class="flex flex-col items-center justify-center">
					<div class="text-3xl md:text-[40px] font-bold mb-2 leading-none">99.8%</div>
					<div class="text-sm md:text-base opacity-90 font-medium">Рейсов вовремя</div>
				</div>

				<div class="flex flex-col items-center justify-center">
					<div class="text-3xl md:text-[40px] font-bold mb-2 leading-none">24/7</div>
					<div class="text-sm md:text-base opacity-90 font-medium">Поддержка клиентов</div>
				</div>

				<div class="flex flex-col items-center justify-center">
					<div class="text-3xl md:text-[40px] font-bold mb-2 leading-none">15+</div>
					<div class="text-sm md:text-base opacity-90 font-medium">Современных автобусов</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Rules Section -->
	<section class="py-20 bg-gray-50">
		<div class="container mx-auto px-4 max-w-[1200px]">
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-4">Правила проезда</h2>
				<p class="text-gray-500 text-lg md:text-xl max-w-4xl mx-auto">
					Перед поездкой, пожалуйста, ознакомьтесь с основными правилами проезда пассажиров, детей и животных. Подробные условия можно уточнить у оператора при бронировании.
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<!-- Card 1: Children -->
				<div class="bg-white p-8 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-start gap-3">
						<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F] mt-2.5 flex-shrink-0"></span>
						Порядок проезда детей до 3 лет
					</h3>
					<p class="text-[15px] text-gray-500 leading-relaxed">
						Проезд детей до 3 лет – пассажир имеет возможность провозить одного ребенка до 3 лет бесплатно, без предоставления отдельного места ребенку, при условии предъявления документа, подтверждающего возраст ребенка.
					</p>
				</div>

				<!-- Card 2: Animals -->
				<div class="bg-white p-8 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-start gap-3">
						<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F] mt-2.5 flex-shrink-0"></span>
						Правила провоза животных
					</h3>
					<p class="text-[15px] text-gray-500 leading-relaxed">
						Допускается провоз мелких домашних животных в переноске или сумке с непромокаемым дном, при наличии ветеринарной справки. Животное провозится бесплатно, как ручная кладь. Пассажир обязан предупредить менеджера колл-центра, или указать в примечании к заказу (при онлайн заказе) о необходимости провоза животного.
					</p>
				</div>

				<!-- Card 3: Documents -->
				<div class="bg-white p-8 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-lg transition-shadow duration-300">
					<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-start gap-3">
						<span class="w-1.5 h-1.5 rounded-full bg-[#D32F2F] mt-2.5 flex-shrink-0"></span>
						<span>Выдаются ли документы командировочным?</span>
					</h3>
					<p class="text-[15px] text-gray-500 leading-relaxed">
						При оплате проезда, Вам будут выданы документы, подтверждающие факт принятия денег.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- How to Book Section -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-[1200px]">
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827]">Как забронировать поездку</h2>
			</div>

			<div class="relative">
				<!-- Connecting Line (Desktop Only) -->
				<div class="hidden md:block absolute top-[24px] left-[10%] right-[10%] h-[1px] bg-red-100 z-0"></div>

				<div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
					<!-- Step 1 -->
					<div class="flex flex-col items-center text-center">
						<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-6 text-[#D32F2F]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="Phone" class="">
						</div>
						<h3 class="text-16 md:text-18 max-w-[217px] font-medium text-gray-900 mb-3 h-12 flex items-center justify-center">Позвоните или оставьте заявку на сайте</h3>
						<p class="text-[14px] md:text-[16px] text-gray-500 leading-relaxed max-w-[200px]">
							Свяжитесь с нами удобным способом: телефон, мессенджер, онлайн заявка
						</p>
					</div>

					<!-- Step 2 -->
					<div class="flex flex-col items-center text-center">
						<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-6 text-[#D32F2F]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/calendar.svg" alt="Calendar" class="">
						</div>
						<h3 class="text-16 md:text-18 max-w-[217px] font-medium text-gray-900 mb-3 h-12 flex items-center justify-center">Выбор рейса и времени</h3>
						<p class="text-[14px] lg:text-[16px] text-gray-500 leading-relaxed max-w-[200px]">
							Уточняем маршрут, дату и время отправления
						</p>
					</div>

					<!-- Step 3 -->
					<div class="flex flex-col items-center text-center">
						<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-6 text-[#D32F2F]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/check.svg" alt="Check" class="">
						</div>
						<h3 class="text-16 md:text-18 max-w-[217px] font-medium text-gray-900 mb-3 h-12 flex items-center justify-center">Подтверждение брони</h3>
						<p class="text-[14px] lg:text-[16px] text-gray-500 leading-relaxed max-w-[200px]">
							Резервируем место и отправляем подтверждение
						</p>
					</div>

					<!-- Step 4 -->
					<div class="flex flex-col items-center text-center">
						<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-6 text-[#D32F2F]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/bus.svg" alt="Bus" class="">
						</div>
						<h3 class="text-16 md:text-18 max-w-[217px] font-medium text-gray-900 mb-3 h-12 flex items-center justify-center">Поездка</h3>
						<p class="text-[14px] lg:text-[16px] text-gray-500 leading-relaxed max-w-[200px]">
							Приезжайте к месту отправления и комфортно путешествуйте
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Buses Section -->
	<section class="py-20 bg-gray-50">
		<div class="container mx-auto px-4 max-w-[1200px]">
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-4">Наши автобусы</h2>
				<p class="text-gray-500 text-lg md:text-xl max-w-4xl mx-auto">
					Мы подбираем транспорт под вашу задачу — от ежедневных рейсов до поездок для больших групп. Все машины проходят регулярное обслуживание и готовы к дальним поездкам.
				</p>
			</div>

			<div class="flex flex-col gap-20">
				<!-- Block 1: Regular Routes -->
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<!-- Carousel 1 -->
					<div class="relative group">
						<div class="carousel-container relative overflow-hidden rounded-3xl h-[300px] md:h-[400px]" id="carousel-1">
							<!-- Added bg-gray-200 placeholder to prevent collapse if image missing -->
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-100 z-10 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/b1.png" alt="Bus 1" class="w-full h-full object-cover">
							</div>
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-0 z-0 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/b2.png" alt="Bus 2" class="w-full h-full object-cover">
							</div>
						</div>
						<!-- Controls -->
						<div class="flex gap-4 mt-6">
							<button onclick="busPrevSlide('carousel-1')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 10H39M10 10L19 1M10 10L19 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
							<button onclick="busNextSlide('carousel-1')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 10H1M30 10L21 1M30 10L21 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</div>
					</div>

					<!-- Content -->
					<div class="pl-8 relative border-l-2 border-[#D32F2F]">
						<div class="absolute -top-1 -left-3 bg-gray-50 py-1">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/bus2.svg" class="w-6 h-6 text-[#D32F2F] -ml-[6px]">
						</div>
						<h3 class="text-[18px] lg:text-[24px] font-medium text-gray-900 mb-6">Автобусы для регулярных рейсов</h3>
						<div class="space-y-4 text-gray-500 leading-relaxed text-16 lg:text-18">
							<p>Для ежедневных маршрутов Минск — Чашники и Минск — Сенно мы используем удобные автобусы с аккуратным салоном. В салоне комфортно сидеть даже в дороге, предусмотрены полки для ручной клади и достаточно места для ног.</p>
							<p>Комфортная посадка, мягкий ход и регулярное обслуживание транспорта позволяют спокойно добираться до работы, учёбы или домой без лишнего стресса.</p>
						</div>
					</div>
				</div>

				<!-- Block 2: Chartered -->
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<!-- Content (Order swapped on desktop) -->
					<div class="order-2 lg:order-1 pr-8 relative border-r-2 border-[#D32F2F] text-right">
						<div class="absolute -top-1 -right-3 bg-gray-50 py-1">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/bus.svg" class="w-6 h-6 text-[#D32F2F]">
						</div>
						<h3 class="text-[18px] lg:text-[24px] font-medium text-gray-900 mb-6">Автобусы под заказ для групп и мероприятий</h3>
						<div class="space-y-4 text-gray-500 leading-relaxed text-[16px] lg:text-[18px]">
							<p>Для корпоративных выездов, экскурсий, свадеб и других мероприятий мы предлагаем автобусы под заказ. Мы подбираем транспорт под количество пассажиров и маршрут, чтобы всем было удобно и в салоне, и при посадке.</p>
							<p>В салоне достаточно места для багажа и личных вещей, а наш водитель заранее продумывает маршрут с учётом времени и остановок.</p>
						</div>
					</div>

					<!-- Carousel 2 -->
					<div class="order-1 lg:order-2 relative group">
						<div class="carousel-container relative overflow-hidden rounded-3xl h-[300px] md:h-[400px]" id="carousel-2">
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-100 z-10 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/b3.png" alt="Bus 3" class="w-full h-full object-cover">
							</div>
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-0 z-0 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/bus2.png" alt="Bus 4" class="w-full h-full object-cover">
							</div>
						</div>
						<!-- Controls (Aligned Right) -->
						<div class="flex gap-4 mt-6 justify-end">
							<button onclick="busPrevSlide('carousel-2')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 10H39M10 10L19 1M10 10L19 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
							<button onclick="busNextSlide('carousel-2')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 10H1M30 10L21 1M30 10L21 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</div>
					</div>
				</div>

				<!-- Block 3: International -->
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<!-- Carousel 3 -->
					<div class="relative group">
						<div class="carousel-container relative overflow-hidden rounded-3xl h-[300px] md:h-[400px]" id="carousel-3">
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-100 z-10 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/b2.png" alt="Bus 5" class="w-full h-full object-cover">
							</div>
							<div class="slide absolute inset-0 transition-opacity duration-500 opacity-0 z-0 bg-gray-200">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/b1.png" alt="Bus 6" class="w-full h-full object-cover">
							</div>
						</div>
						<!-- Controls -->
						<div class="flex gap-4 mt-6">
							<button onclick="busPrevSlide('carousel-3')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 10H39M10 10L19 1M10 10L19 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
							<button onclick="busNextSlide('carousel-3')" class="text-[#D32F2F] hover:opacity-70 transition cursor-pointer">
								<svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 10H1M30 10L21 1M30 10L21 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</div>
					</div>

					<!-- Content -->
					<div class="pl-8 relative border-l-2 border-[#D32F2F]">
						<div class="absolute -top-1 -left-3 bg-gray-50 py-1">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/bus.svg" class="w-6 h-6 text-[#D32F2F]">
						</div>
						<h3 class="text-[18px] md:text-[24px] font-medium text-gray-900 mb-6">Транспорт для дальних и международных поездок</h3>
						<div class="space-y-4 text-gray-500 leading-relaxed text-[16px] lg:text-[18px]">
							<p>Для международных рейсов и длительных маршрутов мы используем комфортные автобусы, рассчитанные на долгую дорогу. В салоне удобные сиденья, достаточно места для ног и багажа, чтобы поездка проходила максимально спокойно.</p>
							<p>Перед выездом транспорт проходит техническую проверку, а водитель заранее знакомится с маршрутом, чтобы вы чувствовали себя уверенно на протяжении всей дороги.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
	function busNextSlide(containerId) {
		const container = document.getElementById(containerId);
		if (!container) return;
		
		const slides = container.querySelectorAll('.slide');
		if (slides.length < 2) return;

		// Find current active
		let activeIndex = -1;
		slides.forEach((slide, index) => {
			if (slide.classList.contains('opacity-100')) {
				activeIndex = index;
			}
		});

		// Hide current
		if (activeIndex !== -1) {
			slides[activeIndex].classList.remove('opacity-100', 'z-10');
			slides[activeIndex].classList.add('opacity-0', 'z-0');
		}

		// Show next
		let nextIndex = (activeIndex + 1) % slides.length;
		slides[nextIndex].classList.remove('opacity-0', 'z-0');
		slides[nextIndex].classList.add('opacity-100', 'z-10');
	}

	function busPrevSlide(containerId) {
		const container = document.getElementById(containerId);
		if (!container) return;

		const slides = container.querySelectorAll('.slide');
		if (slides.length < 2) return;

		let activeIndex = -1;
		slides.forEach((slide, index) => {
			if (slide.classList.contains('opacity-100')) {
				activeIndex = index;
			}
		});

		if (activeIndex !== -1) {
			slides[activeIndex].classList.remove('opacity-100', 'z-10');
			slides[activeIndex].classList.add('opacity-0', 'z-0');
		}

		let prevIndex = (activeIndex - 1 + slides.length) % slides.length;
		slides[prevIndex].classList.remove('opacity-0', 'z-0');
		slides[prevIndex].classList.add('opacity-100', 'z-10');
	}
	</script>

	<!-- FAQ Section -->
	<section id="faq" class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-[1200px]">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
				
				<!-- Left Column: Title & Desc -->
				<div class="lg:col-span-4">
					<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-6 leading-tight">Часто задаваемые вопросы</h2>
					<p class="text-gray-500 text-[18px] md:text-[20px] leading-relaxed">
						Не нашли ответ на свой вопрос? Свяжитесь с нами любым удобным способом, и мы с радостью вам поможем!
					</p>
				</div>

				<!-- Right Column: Accordion -->
				<div class="lg:col-span-8 space-y-4">
					<!-- Item 1 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Как забронировать место в автобусе?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							Вы можете забронировать место онлайн через форму на нашем сайте, позвонить по контактным телефонам диспетчеру или написать нам в мессенджеры (Viber, Telegram, WhatsApp). Бронирование открыто 24/7.
						</div>
					</div>

					<!-- Item 2 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Какие способы оплаты вы принимаете?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							Мы принимаем оплату наличными водителю при посадке, а также поддерживаем онлайн-оплату банковскими картами через систему ЕРИП или на сайте при бронировании (уточняйте доступность у оператора).
						</div>
					</div>

					<!-- Item 3 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Можно ли вернуть билет?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							Да, вы можете отменить бронь или вернуть билет бесплатно, если сообщите нам об этом не позднее чем за 24 часа до отправления рейса. В ином случае условия возврата могут варьироваться.
						</div>
					</div>

					<!-- Item 4 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Есть ли багажное отделение?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							Да, все наши туристические автобусы оснащены просторными багажными отделениями. Вы можете бесплатно провезти одну единицу основного багажа и ручную кладь в салоне.
						</div>
					</div>

					<!-- Item 5 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Как заказать автобус для группы?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							Для заказа автобуса под ваше мероприятие (свадьба, экскурсия, корпоратив), пожалуйста, выберите раздел "Заказ автобусов" на сайте или позвоните нашим менеджерам. Мы рассчитаем стоимость индивидуально.
						</div>
					</div>

					<!-- Item 6 -->
					<div class="border-b border-gray-100">
						<button onclick="toggleFaq(this)" class="w-full flex items-center justify-between py-6 text-left group">
							<span class="text-[16px] md:text-[18px] font-medium text-gray-900 group-hover:text-[#D32F2F] transition-colors">Какие документы нужны для поездки в Россию?</span>
							<svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<div class="hidden pb-6 text-gray-500 leading-relaxed">
							При пересечении границы с РФ гражданам Беларуси необходим действующий паспорт. Для детей обязательно наличие паспорта или свидетельства о рождении (в зависимости от возраста и текущих правил). Рекомендуем уточнять актуальные требования перед поездкой.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
	function toggleFaq(btn) {
		const content = btn.nextElementSibling;
		const icon = btn.querySelector('svg');
		
		// Toggle Content
		if (content.classList.contains('hidden')) {
			content.classList.remove('hidden');
			icon.classList.add('rotate-180', 'text-[#D32F2F]');
		} else {
			content.classList.add('hidden');
			icon.classList.remove('rotate-180', 'text-[#D32F2F]');
		}
	}
	</script>

	<!-- Contact Us Section -->
	<section id="contacts" class="lg:py-20 py-8 bg-gray-50">
		<div class="container mx-auto px-4 max-w-[1200px]">
			<!-- Header -->
			<div class="text-center mb-16">
				<h2 class="text-[28px] md:text-[40px] font-medium text-[#111827] mb-4">Свяжитесь с нами</h2>
				<p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto">
					Готовы помочь вам в любое время. Выберите удобный способ связи или оставьте заявку
				</p>
			</div>

			<div class="flex flex-col flex-col-reverse lg:grid lg:grid-cols-2 gap-12 items-start">
				
				<!-- Left Column: Info & Messengers -->
				<div class="space-y-10">
					<!-- Contact Info List -->
					<div class="space-y-8">
						<!-- Address -->
						<div class="flex items-start gap-6">
							<div class="w-12 h-12 rounded-full border-2 border-[#D32F2F] flex items-center justify-center flex-shrink-0 text-[#D32F2F] bg-white">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/Location.svg" alt="Address" class="">
							</div>
							<div>
								<p class="text-gray-400 text-sm mb-1">Наш офис</p>
								<p class="text-gray-900 font-medium text-[16px] lg:text-[18px] leading-snug">
									ул. Братская д.11, пом. 380 г. Минск<br>
									ИН 220065
								</p>
							</div>
						</div>

						<!-- Phones -->
						<div class="flex items-start gap-6">
							<div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 text-[#D32F2F] bg-white">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="Phone" class="">
							</div>
							<div>
								<p class="text-gray-400 text-sm mb-2">Телефон</p>
								<div class="space-y-3">
									<a href="tel:+375297168556" class="flex items-center gap-3 text-gray-900 font-medium text-lg hover:text-[#D32F2F] transition">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/mts.svg" alt="MTS" class="w-5 h-5 object-contain">
										<span class="text-[16px] lg:text-[18px]">+375 (29) 716-85-56</span>
									</a>
									<a href="tel:+375291935234" class="flex items-center gap-3 text-gray-900 font-medium text-lg hover:text-[#D32F2F] transition">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/a1.svg" alt="A1" class="w-5 h-5 object-contain">
										<span class="text-[16px] lg:text-[18px]">+375 (29) 193-52-34</span>
									</a>
								</div>
							</div>
						</div>

						<!-- Email -->
						<div class="flex items-start gap-6">
							<div class="w-12 h-12 flex items-center justify-center flex-shrink-0 text-[#D32F2F] bg-white">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/mail.svg" alt="Email" class="">
							</div>
							<div>
								<p class="text-gray-400 text-sm mb-1">E-mail</p>
								<a href="mailto:info@forsazhexpress.by" class="text-gray-900 font-medium text-[16px] lg:text-[18px] hover:text-[#D32F2F] transition">
									info@forsazhexpress.by
								</a>
							</div>
						</div>

						<!-- Working Hours -->
						<div class="flex items-start gap-6">
							<div class="w-12 h-12 flex items-center justify-center flex-shrink-0 text-[#D32F2F] bg-white">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/clock.svg" alt="Time" class="">
							</div>
							<div>
								<p class="text-gray-400 text-sm mb-1">Режим работы</p>
								<p class="text-gray-900 font-medium text-[16px] lg:text-[18px]">
									Ежедневно: 08:00 — 22:00
								</p>
								<p class="text-gray-400 text-sm mt-1">Онлайн-бронирование: 24/7</p>
							</div>
						</div>
					</div>

					<!-- Messengers Block -->
					<div class="bg-[#D32F2F] rounded-2xl p-8 text-white relative overflow-hidden shadow-xl">
						<div class="relative z-10">
							<h3 class="text-[18px] lg:text-[20px] text-center lg:text-left font-bold mb-2">Быстрая связь через мессенджеры</h3>
							<p class="text-red-100 text-center lg:text-left text-sm mb-6">Напишите нам в любой удобный мессенджер — ответим в течение 5 минут</p>
							
							<div class="flex flex-wrap gap-4">
								<a href="viber://chat?number=%2B375297168556" class="flex w-full lg:w-auto items-center gap-2 bg-white text-[#7360F2] px-4 py-3 rounded-lg font-medium hover:bg-gray-100 transition lg:min-w-[152px] justify-center">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/Viber.svg" alt="Viber" class="w-5 h-5">
									<span class="text-gray-900">Viber</span>
								</a>
								<a href="https://t.me/forsazhexpress" class="flex w-full lg:w-auto items-center gap-2 bg-white text-[#0088CC] px-4 py-3 rounded-lg font-medium hover:bg-gray-100 transition lg:min-w-[152px] justify-center">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/Telegram.svg" alt="Telegram" class="w-5 h-5">
									<span class="text-gray-900">Telegram</span>
								</a>
								<a href="https://wa.me/79297168556" class="flex w-full lg:w-auto items-center gap-2 bg-white text-[#25D366] px-4 py-3 rounded-lg font-medium hover:bg-gray-100 transition lg:min-w-[152px] justify-center">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5">
									<span class="text-gray-900">WhatsApp</span>
								</a>
							</div>
						</div>
						<!-- Decorative background elements if needed, skipping for cleaner code -->
					</div>
				</div>

				<!-- Right Column: Form -->
				<div id="booking" class="bg-white rounded-[32px] shadow-[0_20px_40px_rgba(0,0,0,0.08)] p-8 md:p-10">
					<h3 class="text-2xl font-bold text-gray-900 mb-2">Оставьте заявку</h3>
					<p class="text-gray-500 mb-8">Заполните форму, и мы свяжемся с вами в ближайшее время</p>
					
					<form id="contact-form" class="space-y-6">
						<div>
							<label class="block text-gray-700 font-medium mb-2 pl-1">Ваше имя</label>
							<input id="booking-name" type="text" name="name" class="w-full bg-[#E5E7EB] border-2 border-transparent rounded-xl px-5 py-4 text-gray-900 focus:ring-2 focus:ring-[#D32F2F] outline-none transition" placeholder="" required>
						</div>
						
						<div>
							<label class="block text-gray-700 font-medium mb-2 pl-1">Направление</label>
							<div class="relative">
								<select id="booking-direction" name="direction" class="w-full bg-[#E5E7EB] border-2 border-transparent rounded-xl px-5 py-4 text-gray-900 focus:ring-2 focus:ring-[#D32F2F] outline-none appearance-none transition cursor-pointer" required>
									<option value="">Выберите направление</option>
									<option value="minsk-chashniki">Минск — Чашники</option>
									<option value="chashniki-minsk">Чашники — Минск</option>
									<option value="minsk-senno">Минск — Сенно</option>
									<option value="senno-minsk">Сенно — Минск</option>
								</select>
								<div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
									<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
								</div>
							</div>
						</div>
						
						<div>
							<label class="block text-gray-700 font-medium mb-2 pl-1">Дата и время</label>
							<input id="booking-date" type="text" name="date" class="w-full bg-[#E5E7EB] border-2 border-transparent rounded-xl px-5 py-4 text-gray-900 focus:ring-2 focus:ring-[#D32F2F] outline-none transition" placeholder="дд.мм.гггг чч:мм" required>
						</div>
						
						<div>
							<label class="block text-gray-700 font-medium mb-2 pl-1">Телефон или мессенджер</label>
							<input id="booking-phone" type="text" name="phone" class="w-full bg-[#E5E7EB] border-2 border-transparent rounded-xl px-5 py-4 text-gray-900 focus:ring-2 focus:ring-[#D32F2F] outline-none transition" placeholder="" required>
						</div>
						
						<button type="submit" class="w-full bg-[#D32F2F] text-white font-bold text-lg rounded-xl py-4 hover:bg-[#B71C1C] transition shadow-lg mt-4">
							Отправить заявку
						</button>
					</form>
				</div>

			</div>
		</div>
	</section>





	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=0ec14044-dbfb-4b4b-b224-b1fb047a9f6e" type="text/javascript"></script>
	<script>
	const allSlugs = <?php echo json_encode($all_slugs_js); ?>;
	const routesData = <?php echo json_encode($routes_map_data); ?>;
	
	function log(msg) {
		console.log(msg);
	}

	let myMap = null;
	let clusterer = null;

	log('Map Init. Routes Data: ' + JSON.stringify(routesData));

	ymaps.ready(init);
	function init(){
		// Center on Belarus roughly
		myMap = new ymaps.Map("route-map", {
			center: [53.90, 27.55], // Minsk
			zoom: 7,
			controls: ['zoomControl', 'fullscreenControl']
		});
		
		log('Map created.');

		// Render initial route
		if (allSlugs.length > 0) {
			updateMap(allSlugs[0]);
		}
	}

	async function updateMap(slug) {
		if (!myMap) {
			log('updateMap failed: myMap is null');
			return;
		}
		
		myMap.geoObjects.removeAll();
		
		const stops = routesData[slug];
		log('Updating map for slug: ' + slug + '. Stops found: ' + (stops ? stops.length : 0));
		
		if (!stops || stops.length === 0) {
			log('No stops for slug: ' + slug);
			return;
		}

		log('Starting sequential geocoding...');
		const validResults = [];

		// Sequential geocoding with delay to avoid rate limits
		for (let i = 0; i < stops.length; i++) {
			const stopName = stops[i];
			const query = stopName + ", Беларусь";
			
			try {
				const res = await ymaps.geocode(query);
				const firstGeoObject = res.geoObjects.get(0);
				
				if (firstGeoObject) {
					const coords = firstGeoObject.geometry.getCoordinates();
					log('Geocoded [' + i + ']: ' + stopName + ' -> ' + coords);
					
					const placemark = new ymaps.Placemark(coords, {
						balloonContentHeader: stopName,
						balloonContentBody: 'Остановка по маршруту: ' + stopName,
						hintContent: stopName,
						iconContent: (i + 1)
					}, {
						preset: 'islands#redIcon', // Better for iconContent
						iconColor: '#D32F2F'
					});
					
					validResults.push({ placemark, coords, order: i });
					myMap.geoObjects.add(placemark);
				} else {
					log('Geocoded FAILED (no result) [' + i + ']: ' + stopName);
				}
			} catch (err) {
				let errMsg = 'Unknown Error';
				try {
					errMsg = JSON.stringify(err);
				} catch(e) {
					errMsg = err.toString();
				}
				log('Geocoded ERROR [' + i + ']: ' + stopName + ' - ' + errMsg);
			}
			
			// Small delay between requests
			await new Promise(resolve => setTimeout(resolve, 100));
		}

		log('Geocoding finished. Valid: ' + validResults.length);
		
		if (validResults.length > 1) {
			const coordsArray = validResults.map(r => r.coords);
			const myPolyline = new ymaps.Polyline(coordsArray, {
				balloonContent: "Маршрут"
			}, {
				strokeColor: "#D32F2F",
				strokeWidth: 4,
				strokeOpacity: 0.7
			});
			myMap.geoObjects.add(myPolyline);
			log('Polyline added.');
		}
		
		if (validResults.length > 0) {
			// Auto zoom to bounds
			try {
				const bounds = myMap.geoObjects.getBounds();
				if (bounds) {
					myMap.setBounds(bounds, {
						checkZoomRange: true,
						zoomMargin: 50
					});
					log('Map bounds updated.');
				}
			} catch(e) { log('Bounds error: ' + e); }
		}
	}

	function switchTab(selectedSlug) {
		// Toggle Tabs UI
		allSlugs.forEach(slug => {
			const content = document.getElementById('tab-' + slug);
			const btn = document.getElementById('btn-' + slug);
			
			if (content && btn) {
				if (slug === selectedSlug) {
					content.classList.remove('hidden');
					content.classList.add('block');
					btn.classList.remove('text-gray-500', 'hover:text-gray-900');
					btn.classList.add('bg-white', 'text-[#D32F2F]', 'shadow-sm', 'underline', 'decoration-2', 'underline-offset-4');
				} else {
					content.classList.remove('block');
					content.classList.add('hidden');
					btn.classList.remove('bg-white', 'text-[#D32F2F]', 'shadow-sm', 'underline', 'decoration-2', 'underline-offset-4');
					btn.classList.add('text-gray-500', 'hover:text-gray-900');
				}
			}
		});

		// Update Map
		updateMap(selectedSlug);
	}
	</script>
	<?php endif; ?>
</main>

<?php
get_footer();
