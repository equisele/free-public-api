<?php

// https://stackoverflow.com/questions/12553160/getting-visitors-country-from-their-ip

require __DIR__ . '/ip.php';

$url = 'http://api.hostip.info/country.php?ip=' . $result;
$result = @file_get_contents($url);
