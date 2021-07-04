<?php
namespace Zoo;
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;

spl_autoload_register(function ($class_name) {
    echo "<h3>1. nerandu klases: $class_name</h3>";
});

require __DIR__ . '/Animal.php';
require __DIR__ . '/belgai/Animal.php';
require __DIR__ . '/australai/Animal.php';



echo Animal::$hello;
// new Animal;
echo B::$go;

echo AnimalA::$go;