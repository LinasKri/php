<?php

$account = ['name' => $_POST['name'],
            'surname' => $_POST['surname'], 
            'IDCode' => $_POST['IDCode'],
            'id' => 'LT '.rand(100000000000000000, 999999999999999999), 
            'funds' => 0];

    $accounts [] = $account;
    file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
    setMessage('Nauja saskaita paruosta');
    redirect();
