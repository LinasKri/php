<?php

class FundController {


    public function fundTest($say) {
        
        return App::view('test', ['whatToSay' => $say ]);
    }

    public function index() {
        return App::view('home');
    }    
}