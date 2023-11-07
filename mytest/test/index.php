<?php

$ch = curl_init();
$target_url = 'https://dinbendon.kento520.tw/orders.php';
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


echo curl_exec($ch);
?>