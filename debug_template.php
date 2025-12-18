<?php
require_once('../../../wp-load.php');
$page_id = 10;
$page = get_post($page_id);
echo "Page ID: " . $page->ID . "\n";
echo "Post Type: " . $page->post_type . "\n";
echo "Post Status: " . $page->post_status . "\n";
echo "Template Meta: " . get_post_meta($page_id, '_wp_page_template', true) . "\n";
echo "Is Template File Readable: " . (is_readable(get_template_directory() . '/page-thank-you.php') ? 'YES' : 'NO') . "\n";
echo "Template Path: " . get_template_directory() . '/page-thank-you.php' . "\n";
