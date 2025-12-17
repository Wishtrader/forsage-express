<?php
require( dirname( __FILE__ ) . '/wp-load.php' );
global $wp_rewrite;
// Force permalink structure to post name
$wp_rewrite->set_permalink_structure( '/%postname%/' );
$wp_rewrite->flush_rules(true);
echo "Permalinks updated to Post Name structure and rules flushed.";
?>
