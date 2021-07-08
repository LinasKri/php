<?php
namespace Bank;

class BankController {


    public function fundTest($whatToSay) {
        
        $labas = 'Hello, little One';
        return App::view('test', compact('whatToSay', 'labas'));
    }

    public function index() {
        return App::view('index', ['accounts' => Json::getJson() -> showAll()]);
    } 
    
    public function add($id) {
        return App::view('add', ['id' => $id]);
    }   

    public function doAdd($id) {

        $id = (int) $id;
        $account = Json::getJson()->show($id);
        $account['amount'] += (int) $_POST['amount'];
        Json::getJson()->update($id, $account);
        App::redirect();
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