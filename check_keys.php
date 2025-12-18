<?php
require_once('../../../wp-load.php');
echo "Yandex Keys Check:\n";
$options = [
    'yandex_api_key',
    'yandex_maps_api_key',
    'yandex_key',
    'maps_api_key',
    'acf_yandex_maps_api_key'
];
foreach ($options as $opt) {
    $val = get_option($opt);
    echo "{$opt}: " . ($val ? 'EXISTS' : 'MISSING') . "\n";
}
