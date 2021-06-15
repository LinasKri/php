<?php

$account = ['name' => $_POST['name'], 'surname' => $_POST['surname'], 'IDCode' => $_POST['IDCode'],'id' => 'LT '.rand(10000000, 999999999), 'funds' => 0];
if (!$account['IDCode'] == 'IDcode') {
    $accounts [] = $account;
    file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
    redirect();
}else{
    echo 'National Id Number has to be unique. Please try again';
}