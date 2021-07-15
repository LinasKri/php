<?php
namespace Bank;

class LoginController {

    // private $dbType = 'json';
    private $dbType = 'maria';

    public static function getData(){

        if (self::$dbType = 'json') {
            return Json::getJson();
        }
        if (self::$dbType = 'maria') {
            return Maria::getMaria();
        }
    }
}