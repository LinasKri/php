<?php 
// Prog Linas

require __DIR__.'/Bebras.php';

$bebras1 =  new Bebras;
$bebras2 =  new Bebras;
$bebras3 = $bebras1;

echo'<pre>';

$bebras2->name = 'Bobikas';

$bebras2->addYear();

echo $bebras2->color;

// echo $bebras2->getAge();

$bebras2->setAge(20);


$bebras1->sayHello();
$bebras2->sayHello();