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
        return App::view('add', ['id' => $id, 'accounts' => Json::getJson()->showAll()]);
    }   

    public function doAdd($id) {
        $id = (int) $id;
        $account = Json::getJson()->show($id);
        $account['amount'] += (float) $_POST['amount'];
        Json::getJson()->update($id, $account);
        App::redirect();
    }   

    public function remove($id) {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id) {
        $id = (int) $id;
        $account = Json::getJson()->show($id);
        if ($account['amount'] > (float) $_POST['amount']) {
            $account['amount'] -= (float) $_POST['amount'];
            Json::getJson()->update($id, $account);
        }
        App::redirect();
    }

    public function delete($id) {
        if ($account['amount'] = 0) {
            Json::getJson()->delete($id);
        }
        App::redirect();
    }

    public function create() {
        return App::view('create_acc');
    }    

    public function save() {

        if ($_POST['name'] != null ||$_POST['surname'] != null ||$_POST['idCode'] != null) {
            $account = ['id' => rand(10000000, 99999999), 
            'name' => $_POST['name'], 
            'surname' => $_POST['surname'], 
            'idCode' => $_POST['idCode'],
            'iban' => $_POST['iban'], 
            'amount' => 0]; // be garantiju unikalumui
            Json::getJson()->create($account);
        }
        App::redirect();
    }    
}