<?php require("wp-load.php"); $f = fopen("site_url.txt", "w"); fwrite($f, get_option("siteurl")); fclose($f); ?>
