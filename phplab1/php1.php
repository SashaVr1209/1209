<?php

$note = $_POST['note'];
$calendar = $_POST['calendar'];
echo 'Виконано';
echo "  ";

$item = [$note => $calendar];

$file = '1209.txt';
$current = file_get_contents($file);
if ($current) {
    $current = substr($current, 5);
    $current = json_decode($current, true);
} else
    $current = [];

array_unshift($current, $item);
$current .= json_encode($current, true);
echo $current ;

file_put_contents($file, $current);
?>