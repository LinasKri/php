<?php

class FundController {


    public function fundTest($say = '') {
        echo 'FundController<br>';
        echo $say;
    }

    public function index() {
        return App::view('home');
    }    
}