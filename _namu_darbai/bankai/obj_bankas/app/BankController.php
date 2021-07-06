<?php
namespace Bank;

class BankController {


    public function fundTest($whatToSay) {
        
        $labas = 'Hello, little One';
        return App::view('test', compact('whatToSay', 'labas'));
    }

    public function index() {
        return App::view('home');
    }   
    
    public function create() {
        return App::view('create_acc');
    }    

    public function save() {

        $account = ['name' => $_POST['name'],
			'surname' => $_POST['surname'], 
			'IDCode' => $_POST['IDCode'],
			'id' => $_POST['id'], 
			'funds' => 0];

        Json::getJson() -> create($account);
        App::redirect();
    }    
}