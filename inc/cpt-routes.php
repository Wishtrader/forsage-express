<?php
/**
 * Custom Post Type: Routes (Маршруты)
 * and ACF Fields (Free version compatible - No Repeaters)
 */
function register_routes_cpt() {
    $labels = array(
        'name'                  => _x( 'Маршруты', 'Post Type General Name', 'forsage' ),
        'singular_name'         => _x( 'Маршрут', 'Post Type Singular Name', 'forsage' ),
        'menu_name'             => __( 'Маршруты', 'forsage' ),
        'all_items'             => __( 'Все маршруты', 'forsage' ),
        'add_new_item'          => __( 'Добавить новый маршрут', 'forsage' ),
        'add_new'               => __( 'Добавить новый', 'forsage' ),
        'new_item'              => __( 'Новый маршрут', 'forsage' ),
        'edit_item'             => __( 'Редактировать маршрут', 'forsage' ),
        'view_item'             => __( 'Посмотреть маршрут', 'forsage' ),
        'search_items'          => __( 'Искать маршрут', 'forsage' ),
        'not_found'             => __( 'Не найдено', 'forsage' ),
        'not_found_in_trash'    => __( 'Не найдено в корзине', 'forsage' ),
    );
    $args = array(
        'label'                 => __( 'Маршрут', 'forsage' ),
        'description'           => __( 'Маршруты и расписания', 'forsage' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'route', $args );
}
add_action( 'init', 'register_routes_cpt', 0 );

/**
 * Register ACF Fields locally
 */
if( function_exists('acf_add_local_field_group') ):

$days = array(
    'monday'    => 'Понедельник',
    'tuesday'   => 'Вторник',
    'wednesday' => 'Среда',
    'thursday'  => 'Четверг',
    'friday'    => 'Пятница',
    'saturday'  => 'Суббота',
    'sunday'    => 'Воскресенье',
);

$schedule_fields = array();
foreach( $days as $key => $label ) {
    $schedule_fields[] = array(
        'key' => 'field_sch_' . $key . '_tab', // Fake tab/message separator
        'label' => $label,
        'type' => 'message', // Visual separator
    );
    $schedule_fields[] = array(
        'key' => 'field_sch_' . $key . '_time_a',
        'label' => 'Время из пункта А (' . $label . ')',
        'name' => 'sch_' . $key . '_time_a',
        'type' => 'text',
        'wrapper' => array('width' => '40'),
    );
    $schedule_fields[] = array(
        'key' => 'field_sch_' . $key . '_time_b',
        'label' => 'Время из пункта Б (' . $label . ')',
        'name' => 'sch_' . $key . '_time_b',
        'type' => 'text',
        'wrapper' => array('width' => '40'),
    );
    $schedule_fields[] = array(
        'key' => 'field_sch_' . $key . '_weekend',
        'label' => 'Стиль выходного?',
        'name' => 'sch_' . $key . '_weekend',
        'type' => 'true_false',
        'ui' => 1,
        'wrapper' => array('width' => '20'),
    );
}

acf_add_local_field_group(array(
	'key' => 'group_routes',
	'title' => 'Информация о маршруте',
	'fields' => array_merge(
        // --- 1. Main Info ---
        array(
            array(
                'key' => 'field_tab_main',
                'label' => 'Основная информация',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_departure_city',
                'label' => 'Город отправления (Название)',
                'name' => 'departure_city',
                'type' => 'text',
                'default_value' => 'Минск',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_arrival_city',
                'label' => 'Город прибытия (Название)',
                'name' => 'arrival_city',
                'type' => 'text',
                'default_value' => 'Чашники',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_departure_address',
                'label' => 'Полный адрес отправления',
                'name' => 'departure_address',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Минск, АС "Славинского", Первомайский район...',
            ),
            array(
                'key' => 'field_arrival_address',
                'label' => 'Полный адрес прибытия',
                'name' => 'arrival_address',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Чашники, ул. Космонавтов, д. 3',
            ),
            array(
                'key' => 'field_travel_time',
                'label' => 'Время в пути',
                'name' => 'travel_time',
                'type' => 'text',
                'default_value' => '3 ч 30 мин',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_distance',
                'label' => 'Расстояние',
                'name' => 'distance',
                'type' => 'text',
                'default_value' => '185 км',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_price',
                'label' => 'Цена (BYN)',
                'name' => 'price',
                'type' => 'text',
                'default_value' => '15 BYN',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_color_scheme',
                'label' => 'Цветовая схема',
                'name' => 'color_scheme',
                'type' => 'radio',
                'choices' => array(
                    'red' => 'Красный (Red)',
                    'blue' => 'Синий (Blue)',
                ),
                'default_value' => 'red',
                'layout' => 'horizontal',
                'wrapper' => array('width' => '50'),
            ),

            // --- 2. Stops ---
            array(
                'key' => 'field_tab_stops',
                'label' => 'Остановки',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_stops_text',
                'label' => 'Список остановок',
                'name' => 'stops_text',
                'type' => 'textarea',
                'rows' => 10,
                'instructions' => 'Введите названия остановок, каждое с новой строки. Чтобы выделить остановку ЖИРНЫМ ЦВЕТОМ, поставьте звездочку в начале. Пример:<br>*Минск<br>Борисов<br>*Чашники',
            ),

            // --- 3. Schedule ---
            array(
                'key' => 'field_tab_schedule',
                'label' => 'Расписание',
                'type' => 'tab',
            ),
        ),
        // Add dynamic day fields
        $schedule_fields
    ),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'route',
			),
		),
	),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => false,
));

endif;
