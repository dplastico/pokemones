<?php
$url = 'lfi/maps/maps.json';
$data = file_get_contents($url);
$characters - json_decode($data);

echo $characters;
?>