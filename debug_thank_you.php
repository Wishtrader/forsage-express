<?php
require_once('../../../wp-load.php');
echo "Site URL: " . get_option('siteurl') . "\n";
echo "Home URL: " . home_url() . "\n";
$page = get_page_by_path('thank-you');
if ($page) {
    echo "Thank You Page ID: " . $page->ID . "\n";
    echo "Status: " . $page->post_status . "\n";
    echo "Permalink: " . get_permalink($page->ID) . "\n";
} else {
    echo "Thank You Page NOT FOUND\n";
    $pages = get_posts(['post_type' => 'page', 'post_status' => 'any', 'name' => 'thank-you']);
    foreach($pages as $p) {
        echo "Found page with name 'thank-you': ID " . $p->ID . " Status: " . $p->post_status . "\n";
    }
}
