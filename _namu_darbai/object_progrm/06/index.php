<?php

require __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1 -> ipilti(200);
echo 'Stikline 1: '.$stikline1-> kiekIpilta().'<br><hr>';

$stikline2 -> ipilti($stikline1 ->ispilti());
echo 'Stikline 1: '. $stikline1-> kiekIpilta().'<br>'. ' Stikline 2: '. $stikline2-> kiekIpilta().'<br>' . ' Stikline 3: '. $stikline3-> kiekIpilta().'<br><hr>';

$stikline3 -> ipilti($stikline2 ->ispilti());
echo 'Stikline 1: '. $stikline1-> kiekIpilta().'<br>'. ' Stikline 2: '. $stikline2-> kiekIpilta().'<br>' . ' Stikline 3: '. $stikline3-> kiekIpilta().'<br>';


