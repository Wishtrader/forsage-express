<?php
// Try to load WordPress environment
$root = dirname( dirname( dirname( dirname( __FILE__ ) ) ) );

if ( file_exists( $root . '/wp-load.php' ) ) {
    require_once( $root . '/wp-load.php' );
} else {
    die( 'Error: Could not locate wp-load.php at ' . $root );
}

echo "<h2>Setup Pages Report</h2>";

$pages_to_create = [
    'thank-you' => [
        'title'    => 'Спасибо',
        'template' => 'page-thank-you.php'
    ],
    'privacy-policy' => [
        'title'    => 'Политика конфиденциальности',
        'template' => 'page-privacy-policy.php'
    ],
    'cookie-policy' => [
        'title'    => 'Политика обработки cookie',
        'template' => 'page-cookie-policy.php'
    ],
];

foreach ( $pages_to_create as $slug => $data ) {
    $existing_page = get_page_by_path( $slug );

    if ( $existing_page ) {
        echo "✅ Page <strong>{$data['title']}</strong> (slug: $slug) already exists. Updating template...<br>";
        update_post_meta( $existing_page->ID, '_wp_page_template', $data['template'] );
    } else {
        $page_id = wp_insert_post( array(
            'post_title'    => $data['title'],
            'post_name'     => $slug,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_content'  => '', // Content is in the template
            'page_template' => $data['template']
        ) );

        if ( is_wp_error( $page_id ) ) {
            echo "❌ Error creating {$slug}: " . $page_id->get_error_message() . "<br>";
        } else {
            update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            echo "✨ Created page <strong>{$data['title']}</strong> (ID: $page_id)<br>";
        }
    }
}

// Flush Permalinks
global $wp_rewrite;
if ( $wp_rewrite->permalink_structure != '/%postname%/' ) {
    $wp_rewrite->set_permalink_structure( '/%postname%/' );
    echo "🔄 Set permalink structure to /%postname%/<br>";
}
flush_rewrite_rules();
echo "✅ Rewrite rules flushed.<br>";

echo "<br><strong>🎉 Done! You can now check the pages.</strong>";
