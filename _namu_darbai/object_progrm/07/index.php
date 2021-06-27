<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$krepsys = new Krepsys;
$kiekis = 0;
$grybas1 = 1;

do {
    $grybas = new Grybas;
    if ($grybas -> valgomas && !$grybas -> sukirmijes && !$grybas-> svoris == 0) {
        $kiekis += $grybas -> svoris;
        echo 'Grybo '.$grybas1++. ' svoris: ' . $grybas -> svoris .'g.<br>';
    }
    
} while (Krepsys::dydis >= $kiekis);

echo "<br>Viso: $kiekis g.";