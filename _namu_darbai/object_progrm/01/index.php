<?php
require __DIR__ . '/Kibiras1.php';

$kibiras1 = new Kibiras1;

echo $kibiras1 -> kiekPririnktaAkmenu().'<br>';

$kibiras1 -> prideti1Akmeni();

echo $kibiras1 -> kiekPririnktaAkmenu().'<br>';

$kibiras1 -> pridetiDaugAkmenu(30);


echo $kibiras1 -> kiekPririnktaAkmenu().'<br>';

$kibiras1 -> pridetiDaugAkmenu(40);

echo $kibiras1 -> kiekPririnktaAkmenu().'<br>';