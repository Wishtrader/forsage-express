<?php
$src = 'htaccess.txt';
$dest = '.htaccess';

if (file_exists($src)) {
    if (rename($src, $dest)) {
        echo "Success: Renamed $src to $dest";
    } else {
        echo "Error: Could not rename $src to $dest. Check permissions.";
    }
} else {
    echo "Error: $src not found.";
}
unlink(__FILE__); // Self-destruct
?>
