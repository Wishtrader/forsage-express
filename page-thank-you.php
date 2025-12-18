<?php
// Template Name: Thank You Page

get_header(); 
?>

<main class="site-main relative">
    
    <!-- Hero/Thank You Section -->
    <!-- Min height based on screen, centered content -->
    <section class="relative min-h-[600px] md:min-h-[700px] flex items-center justify-center overflow-hidden py-12 md:py-20">
        
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/thanks-img.png" alt="Background" class="w-full h-full object-cover object-center">
            <!-- Overlay to ensure text readability if the image is too dark/contrasty -->
            <div class="absolute inset-0 bg-white/40 "></div> 
        </div>

        <!-- Content Container -->
        <div class="container relative z-10 px-4 mx-auto text-center">
            
            <!-- Main Content Wrapper -->
            <div class="flex flex-col items-center max-w-4xl mx-auto">
                
                <!-- Headings Group -->
                <div class="relative mb-6 md:mb-8 w-full">
                    
                    <!-- Main Heading -->
                    <h1 class="relative z-10 text-2xl sm:text-3xl md:text-5xl lg:text-[42px] font-bold text-[#111827] leading-tight mb-0 mt-2 md:mt-4">
                        Спасибо! Ваша заявка уже в работе
                    </h1>
                </div>

                <!-- Subtext -->
                <p class="text-sm sm:text-base md:text-[18px] text-[#111827] font-medium opacity-80 max-w-3xl mb-8 md:mb-10 leading-relaxed mx-auto">
                    Диспетчер проверит расписание и подберет удобный вариант поездки. <br class="hidden md:inline">
                    Мы свяжемся с вами в ближайшее время по указанному телефону или в мессенджере.
                </p>

                <!-- Data Verification Mockup -->
                <div class="w-full max-w-[420px] mx-auto mb-8 bg-transparent">
                    <p class="text-[15px] text-[#4B5563] mb-3 md:mb-4 text-center">Проверьте правильность данных</p>
                    
                    <div class="space-y-4">
                        <!-- Name Field -->
                        <div class="relative">
                            <input type="text" 
                                   id="thank-you-name"
                                   value="" 
                                   placeholder="Имя" 
                                   readonly 
                                   class="w-full h-[50px] md:h-[56px] px-4 md:px-6 bg-[#F9FAFB]/60 backdrop-blur-sm border border-[#D1D5DB] rounded-lg text-gray-800 text-sm md:text-base focus:outline-none cursor-default placeholder-gray-400">
                        </div>

                        <!-- Phone Field -->
                        <div class="relative">
                            <input type="text" 
                                   id="thank-you-phone"
                                   value="" 
                                   placeholder="Телефон" 
                                   readonly 
                                   class="w-full h-[50px] md:h-[56px] px-4 md:px-6 bg-[#F9FAFB]/60 backdrop-blur-sm border border-[#D1D5DB] rounded-lg text-gray-800 text-sm md:text-base focus:outline-none cursor-default placeholder-gray-400">
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <a href="<?php echo home_url('/'); ?>" 
                   class="inline-flex justify-center items-center h-[50px] md:h-[56px] px-8 md:px-12 bg-[#D32F2F] hover:bg-[#B91C1C] text-white text-[15px] md:text-[16px] font-bold rounded-lg transition-colors shadow-sm w-full sm:w-auto">
                    Вернуться на главную
                </a>

            </div>

        </div>

        <!-- Vertical dashed line decoration (optional, inferred from similar designs or can be ignored if not crucial) -->
        <!-- Adding subtle vertical guide if needed, but skipping for cleaner look unless explicitly requested "grid lines" -->

    </section>

</main>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const nameData = localStorage.getItem('forsage_booking_name');
    const phoneData = localStorage.getItem('forsage_booking_phone');
    
    if (nameData) {
        const nameField = document.getElementById('thank-you-name');
        if (nameField) nameField.value = nameData;
    }
    
    if (phoneData) {
        const phoneField = document.getElementById('thank-you-phone');
        if (phoneField) phoneField.value = phoneData;
    }
    
    // Optionally clear data after populating
    // localStorage.removeItem('forsage_booking_name');
    // localStorage.removeItem('forsage_booking_phone');
});
</script>
