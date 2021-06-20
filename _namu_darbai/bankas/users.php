<?php 

$users = [
    ['name' => 'Linas', 'pass' => md5('321')],
    ['name' => 'Jolanta', 'pass' => md5('321')],
    ['name' => 'Rokas', 'pass' => md5('321')],
];
file_put_contents(__DIR__.'/users.json',json_encode($users));