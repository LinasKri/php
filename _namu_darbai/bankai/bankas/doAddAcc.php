<?php

$account = ['name' => $_POST['name'],
			'surname' => $_POST['surname'], 
			'IDCode' => $_POST['IDCode'],
			'id' => $_POST['id'], 
			'funds' => 0];

if (!$_POST['name']== null && !$_POST['surname'] == null && !$_POST['IDCode'] == null) {

	if(strlen($_POST['name']) >= 3 && strlen($_POST['surname']) >= 3){

		if(strlen($_POST['IDCode']) == 11){

			$accounts [] = $account;
			file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
			setMessage('Nauja saskaita paruosta');
			redirect();
		} else {
			setMessage('Neteisingas AK');
			redirectToAction('add-acc');
		}
	} else {
		setMessage('Vardas ir pavarde negali buti trumpesni kaip 3 simboliai');
        redirectToAction('add-acc');
	}
} else {
        setMessage('All fields has to be filled');
        redirectToAction('add-acc');
}
