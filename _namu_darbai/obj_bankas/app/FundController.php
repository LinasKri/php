<?php

class FundController {


    public function fundTest($say = '') {
        echo 'FundController<br>';
        echo $say;
    }

    public function index() {
        require DIR.'views/home.php';
    }    
}