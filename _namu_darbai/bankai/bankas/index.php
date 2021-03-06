<?php
session_start();

function redirect(){
    header('Location: http://localhost/_php_/_namu_darbai/bankas/');
    die;
}

function redirectToAction($action, $id = 0){
    if ($id) {
        header('Location: http://localhost/_php_/_namu_darbai/bankas/?action='.$action.'&id='.$id);
    } else {
        header('Location: http://localhost/_php_/_namu_darbai/bankas/?action='.$action);
    }
    die;
}


function getMessage(){
    if(!isset($_SESSION['msg'])){
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setMessage(string $msg){
    $_SESSION['msg'] = $msg;
}

// acc ['id' => x, 'funds' => n ]

// jei nera .json failo, kuris laikytu saskaitas - sukurk
if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1) ;


// 1. Saskaitu saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/home.php';
}

// 2. Pinigu pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/addFunds.php';
}

// 3. Pinigu pridejimo vykdymas POST
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    require __DIR__.'/doAddFunds.php';
}

// 4. Pinigu atemimo atvaizdavimas GET
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/removeFunds.php';
}

// 5. Pinigu atemimo vykdymas POST
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    require __DIR__.'/doRemoveFunds.php';
}

// 6. Naujos saskaitos pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    require __DIR__.'/addAcc.php';
}

// 7. Naujos saskaitos pridejimo vykdymas POST
elseif ($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    require __DIR__.'/doAddAcc.php';
}

// 8. Saskaitos istrynimo vykdymas POST
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    require __DIR__.'/doRemoveAcc.php';
}


