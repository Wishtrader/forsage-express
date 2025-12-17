<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Forsage
 */

get_header();
?>

<main class="min-h-screen relative flex items-center justify-center bg-gray-50 overflow-hidden">
	<!-- Background Image (Bus Station) -->
	<div class="absolute inset-0 z-0">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/station.png" alt="Bus Station" class="w-full h-full object-cover">
		<!-- Overlay for better text readability if needed, though image seems light -->
		<div class="absolute inset-0 bg-white/30 backdrop-blur-[1px]"></div>
	</div>

	<!-- Content Container -->
	<div class="relative z-10 container mx-auto px-4 text-center max-w-4xl pt-20">
		
		<!-- 404 Sign Board Look -->
		<div class="mb-8 inline-block">
			<!-- Simulating the LED board look from the image -->
			<div class="bg-[#8B8B8B] rounded-lg p-1 shadow-lg mx-auto w-[200px]">
				<div class="bg-[#515151] rounded border-2 border-[#6B6B6B] py-2 px-8 shadow-inner">
					<h1 class="text-[#EBCBA6] text-6xl font-mono tracking-widest font-bold drop-shadow-[0_0_5px_rgba(235,203,166,0.6)]">404</h1>
				</div>
			</div>
		</div>

		<!-- Title -->
		<h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 drop-shadow-sm">
			Страница не найдена
		</h2>

		<!-- Description -->
		<p class="text-gray-700 md:text-xl leading-relaxed mb-10 max-w-2xl mx-auto font-medium">
			К сожалению, запрашиваемая страница недоступна.<br>
			Возможно, страница была удалена, ссылка устарела или адрес указан с ошибкой.
		</p>

		<!-- Button -->
		<a href="<?php echo home_url(); ?>" class="inline-block bg-[#D32F2F] text-white font-bold text-lg px-10 py-4 rounded-xl shadow-lg hover:bg-[#B71C1C] transition-transform hover:scale-105">
			Перейти на главную
		</a>

	</div>
</main>

<?php
get_footer();
