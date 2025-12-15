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
	<section class="relative pt-12 pb-24 md:pt-28 md:pb-40 overflow-hidden">
		
		<!-- Background Elements (Road/Path) -->
		<div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-[1400px] pointer-events-none z-0">
			<!-- Placeholder for road graphic. Assuming 'Vector' or similar if it existed, otherwise using CSS or skipping if asset missing. -->
		</div>

		<div class="container relative z-10">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
				
				<!-- Left Content (Text) - Spans 5 columns -->
				<div class="lg:col-span-6 relative z-20">
					<!-- Badge -->
					<div class="inline-flex items-center gap-2.5 bg-[#FFF0F3] border border-[#FECDD3] rounded-2xl px-4 py-2 mb-8">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/rocket-outline.svg" class="w-5 h-5 text-[#E11D48]">
						<span class="text-[#E11D48] text-[13px] md:text-[14px] font-bold">Быстро·Комфортно·Надёжно</span>
					</div>
					
					<!-- H1 Title -->
					<h1 class="text-[36px] md:text-40px] leading-[1.1] font-semibold text-[#111827] mb-6 tracking-tight">
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
				<div class="lg:col-span-6 relative z-10 h-full min-h-[300px] lg:min-h-[500px]">
					<!-- The image needs to scale and positioned to the right -->
					<div class="absolute right-[-20%] lg:right-[-200px] top-1/2 -translate-y-1/2 w-[140%] lg:w-[1100px] lg:mt-[-80px] max-w-none">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/car.png" alt="Forsage Bus" class="w-full h-auto object-contain drop-shadow-2xl">
					</div>
				</div>
			</div>

			<!-- Search Widget - Positioned at bottom overlapping -->
			<div class="w-full bottom-[-100px] z-30 hidden md:block">
				<div class="bg-white rounded-xl shadow-[0_10px_40px_-5px_rgba(0,0,0,0.1)] border border-gray-100 p-2 flex items-center">
					
					<!-- From -->
					<div class="flex-1 relative px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Откуда?</label>
						<input type="text" value="Минск" class="w-full font-bold text-gray-800 outline-none text-[15px]">
						
						<!-- Swap Button Centered on Border -->
						<button class="absolute top-1/2 -translate-y-1/2 right-[-14px] w-7 h-7 bg-[#FEF2F2] rounded-full border border-white shadow-sm flex items-center justify-center z-10 text-[#D32F2F] hover:bg-red-100">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/Arrow - Swap.svg" class="w-4 h-4">
						</button>
					</div>

					<!-- To -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100 pl-8">
						<label class="block text-[11px] text-gray-400 mb-1">Куда?</label>
						<input type="text" value="Чашники" class="w-full font-bold text-gray-800 outline-none text-[15px]">
					</div>

					<!-- Date -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Когда?</label>
						<div class="flex items-center justify-between">
							<span class="font-bold text-gray-800 text-[15px]">24 ноября</span>
						</div>
					</div>

					<!-- Return -->
					<div class="flex-1 px-4 py-2 border-r border-gray-100">
						<label class="block text-[11px] text-gray-400 mb-1">Обратно</label>
						<input type="text" placeholder="Обратно" class="w-full font-bold text-gray-800 outline-none text-[15px] placeholder-gray-300">
					</div>

					<!-- Passengers -->
					<div class="flex-1 px-4 py-2">
						<label class="block text-[11px] text-gray-400 mb-1">Пассажиры</label>
						<div class="flex items-center justify-between cursor-pointer">
							<span class="font-bold text-gray-800 text-[15px]">1 пассажир</span>
							<svg class="w-4 h-4 text-[#D32F2F]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
							</svg>
						</div>
					</div>

					<!-- Button -->
					<div class="pl-2">
						<button class="bg-[#D32F2F] text-white font-bold py-3.5 px-6 rounded-lg hover:bg-[#B71C1C] transition-colors shadow-sm text-[15px]">
							Забронировать место
						</button>
					</div>
				</div>
				<!-- Buttons -->
					<div class="flex flex-col sm:flex-row gap-4 mt-[24px]">
						<a href="#routes" class="inline-flex justify-center items-center bg-[#D32F2F] text-white px-8 py-3.5 rounded-lg font-bold hover:bg-[#B71C1C] transition-all text-[15px] shadow-sm">
							Посмотреть маршруты
						</a>
						<a href="#contacts" class="inline-flex justify-center items-center bg-white text-[#111827] border border-[#E5E7EB] px-8 py-3.5 rounded-lg font-bold hover:bg-gray-50 transition-all text-[15px]">
							Связаться с нами
						</a>
					</div>
			</div>
			
			<!-- Mobile Search Widget (Simpler layout) -->
			<div class="md:hidden mt-8 bg-white rounded-xl shadow-lg border border-gray-100 p-4">
				<div class="flex flex-col gap-4">
					<div class="relative">
						<label class="text-[11px] text-gray-400">Откуда?</label>
						<input type="text" value="Минск" class="w-full font-bold border-b border-gray-200 py-2 outline-none">
					</div>
					<div class="relative">
						<label class="text-[11px] text-gray-400">Куда?</label>
						<input type="text" value="Чашники" class="w-full font-bold border-b border-gray-200 py-2 outline-none">
					</div>
					<div class="grid grid-cols-2 gap-4">
						<div>
							<label class="text-[11px] text-gray-400">Когда?</label>
							<div class="font-bold border-b border-gray-200 py-2">24 ноября</div>
						</div>
						<div>
							<label class="text-[11px] text-gray-400">Пассажиры</label>
							<div class="font-bold border-b border-gray-200 py-2">1 пассажир</div>
						</div>
					</div>
					<button class="w-full bg-[#D32F2F] text-white font-bold py-3 rounded-lg mt-2">
						Забронировать место
					</button>
				</div>
			</div>

		</div>
	</section>

	<section id="routes" class="bg-white py-20 md:py-28 relative">
		<div class="container mx-auto px-4">
			
			<h2 class="text-[32px] md:text-[40px] font-bold text-center mb-10 text-[#111827]">Регулярные маршруты</h2>

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
						
						$active_class = ( $i === 0 ) ? 'bg-white text-[#D32F2F] shadow-sm' : 'text-gray-500 hover:text-gray-900';
					?>
					<button onclick="switchTab('<?php echo esc_js($slug); ?>')" id="btn-<?php echo esc_attr($slug); ?>" class="px-8 py-2.5 rounded-md text-[15px] font-bold transition-all <?php echo $active_class; ?>">
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
							<div class="absolute left-[11px] top-3 bottom-8 w-[2px] <?php echo $line_color; ?>"></div>

							<!-- Departure -->
							<div class="relative mb-10">
								<div class="absolute left-[-40px] top-1 flex flex-col items-center z-10 bg-white">
									<div class="w-[24px] h-[24px] border <?php echo $dot_border; ?> rounded-full flex items-center justify-center">
										<div class="w-2 h-2 <?php echo $dot_color; ?> rounded-full"></div>
									</div>
								</div>
								<div class="text-[12px] text-gray-400 mb-1">Отправление</div>
								<div class="text-[18px] font-medium text-gray-900 leading-snug max-w-md">
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
								<div class="absolute left-[-40px] top-1 flex flex-col items-center z-10 bg-white">
									<div class="w-[24px] h-[24px] border border-green-200 rounded-full flex items-center justify-center">
										<div class="w-2 h-2 bg-green-500 rounded-full"></div>
									</div>
								</div>
								<div class="text-[12px] text-gray-400 mb-1">Прибытие</div>
								<div class="text-[18px] font-medium text-gray-900 leading-snug">
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
								<div class="text-xs text-white/70 uppercase tracking-wider mb-2">ОТ</div>
								<div class="text-[42px] font-bold leading-none mb-1"><?php echo esc_html($price); ?></div>
								<div class="text-sm text-white/70">за место</div>
							</div>

							<button class="relative z-10 w-full bg-white <?php echo $btn_text_color; ?> font-bold py-4 rounded-xl mt-8 hover:bg-gray-50 transition-colors shadow-sm">
								Забронировать место
							</button>
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
					<h3 class="text-xl font-bold mb-6 text-gray-900">Остановки по маршруту</h3>
					<div class="text-[15px] leading-relaxed text-gray-600 bg-gray-50 p-6 rounded-2xl border border-gray-100">
						<?php 
						// Split by newline
						$stops = preg_split('/\r\n|\r|\n/', $stops_text);
						$s_count = 0;
						
						foreach( $stops as $stop ) {
							$stop = trim($stop);
							if ( empty($stop) ) continue;
							
							// Check for bold/highlight marker *
							$is_hl = false;
							if ( strpos($stop, '*') === 0 ) {
								$is_hl = true;
								$stop = substr($stop, 1); // remove *
							}
							
							if ($s_count > 0) {
								echo '<span class="mx-2 text-gray-300">↔</span>';
							}
							
							if ($is_hl) {
								echo '<span class="' . $header_highlight . ' font-bold">' . esc_html($stop) . '</span>';
							} else {
								echo esc_html($stop);
							}
							$s_count++;
						} 
						?>
					</div>
				</div>
				<?php endif; ?>

				<!-- Schedule Table -->
				<div>
					<h3 class="text-xl font-bold mb-8 text-gray-900">Расписание рейсов</h3>
					<div class="overflow-hidden bg-white border border-gray-100 rounded-2xl shadow-sm">
						<!-- Table Header -->
						<div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 bg-gray-50 border-b border-gray-100">
							<div class="hidden md:block"></div>
							<div class="text-center font-bold <?php echo $header_highlight; ?> text-lg"><?php echo esc_html($dep_city); ?></div>
							<div class="text-center font-bold <?php echo $header_highlight; ?> text-lg"><?php echo esc_html($arr_city); ?></div>
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
								$badge_class = 'text-white border border-[#B91C1C] bg-[#B91C1C] shadow-sm shadow-red-200';
							} else {
								$badge_class = 'text-[#EF4444] border border-[#FECDD3] bg-[#FFF1F2]';
							}
							
							// Row Styles
							$row_classes = 'grid grid-cols-1 md:grid-cols-3 gap-4 p-6 border-b border-gray-100 items-center transition-colors';
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
		// Need to get all slugs again for JS
		$all_slugs_js = array();
		$routes_query = new WP_Query( $args ); // Re-run lightweight query or just use what we had
		while($routes_query->have_posts()){ 
			$routes_query->the_post(); 
			$all_slugs_js[] = get_post_field('post_name'); 
		}
		wp_reset_postdata();
	?>
	<script>
	function switchTab(selectedSlug) {
		const allSlugs = <?php echo json_encode($all_slugs_js); ?>;
		
		allSlugs.forEach(slug => {
			const content = document.getElementById('tab-' + slug);
			const btn = document.getElementById('btn-' + slug);
			
			if (content && btn) {
				if (slug === selectedSlug) {
					// Show
					content.classList.remove('hidden');
					content.classList.add('block');
					// Active Btn
					btn.classList.remove('text-gray-500', 'hover:text-gray-900');
					btn.classList.add('bg-white', 'text-[#D32F2F]', 'shadow-sm');
				} else {
					// Hide
					content.classList.remove('block');
					content.classList.add('hidden');
					// Inactive Btn
					btn.classList.remove('bg-white', 'text-[#D32F2F]', 'shadow-sm');
					btn.classList.add('text-gray-500', 'hover:text-gray-900');
				}
			}
		});
	}
	</script>
	<?php endif; ?>
</main>

<?php
get_footer();
