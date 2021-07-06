<?php



class FundController {


    public function fundTest($whatToSay) {
        
        $labas = 'Hello, little One';
        return Bank\App::view('test', compact('whatToSay', 'labas'));
    }

    public function index() {
        return Bank\App::view('home');
    }    
}