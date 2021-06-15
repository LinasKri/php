<?php
session_start();

// acc ['id' => x, 'funds' => n ]

// jei nera .json failo, kuris laikytu saskaitas- sukurk
if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1) ;

// 1. Saskaitu saraso atvaizdavimas GET
if(!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/home.php';
}


// 2. Pinigu pridejimo atvaizdavimas GET
elseif($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/add.php';
}

// 3. Pinigu pridejimo vykdymas POST

// 4. Pinigu atemimo atvaizdavimas GET

// 5. Pinigu atemimo vykdymas POST

// 6. Naujos saskaitos pridejimo atvaizdavimas GET
elseif($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/addAcc.php';
}

// 7. Naujos saskaitos pridejimo vykdymas POST

// 8. Saskaitos istrynimo vykdymas POST



