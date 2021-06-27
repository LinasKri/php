<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$krepsys = new Krepsys;
$kiekis = 0;


do {
    $grybas = new Grybas;
    if ($grybas -> valgomas && !$grybas -> sukirmijes) {
        $kiekis += $grybas -> svoris;
    }
    
} while (Krepsys::dydis >= $kiekis);