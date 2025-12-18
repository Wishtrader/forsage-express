<?php
require_once('../../../wp-load.php');
$args = array(
    'post_type'      => 'route',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
echo "Routes count: " . $query->found_posts . "\n";
while($query->have_posts()) {
    $query->the_post();
    echo "Route: " . get_the_title() . " (Slug: " . get_post_field('post_name') . ")\n";
    $stops = get_field('stops_text');
    echo "Stops Content: " . ($stops ? var_export($stops, true) : "EMPTY") . "\n";
    echo "-------------------\n";
}
wp_reset_postdata();
