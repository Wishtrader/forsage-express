<?php
require( dirname( __FILE__ ) . '/wp-load.php' );
flush_rewrite_rules(true);
echo "Rewrite rules flushed!";
unlink(__FILE__);
?>
