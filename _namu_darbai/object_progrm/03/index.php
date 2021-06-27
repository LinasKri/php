<?php

require __DIR__ . '/Kibiras2.php';

$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;


$kibiras1 -> pridetiDaugAkmenu(20);
$kibiras2 -> pridetiDaugAkmenu(10);
$kibiras3 -> pridetiDaugAkmenu(30);


$kibiras1 -> kiekPririnktaAkmenu();
$kibiras2 -> kiekPririnktaAkmenu();
$kibiras3 -> kiekPririnktaAkmenu();

echo 'Viso akmenu: '.Kibiras2::kiekVisoAkmenu();