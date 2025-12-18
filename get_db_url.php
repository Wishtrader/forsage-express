<?php require("wp-load.php"); global $wpdb; echo "URL_FROM_DB:" . $wpdb->get_var("SELECT option_value FROM {$wpdb->prefix}options WHERE option_name = "siteurl""); ?>
