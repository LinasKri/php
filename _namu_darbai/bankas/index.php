<?php
session_start();

// acc ['id' => x, 'funds' => n ]

// jei nera .json failo, kuris laikytu saskaitas- sukurk
if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1) ;

// Saskaitu saraso atvaizdavimas GET

// Pinigu pridejimo atvaizdavimas GET
if($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/add.php';
}

// Pinigu pridejimo vykdymas POST

// Pinigu atemimo atvaizdavimas GET

// Pinigu atemimo vykdymas POST

// Naujos saskaitos pridejimo atvaizdavimas GET
if($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/addAcc.php';
}

// Naujos saskaitos pridejimo vykdymas POST

// Saskaitos istrynimo vykdymas POST



