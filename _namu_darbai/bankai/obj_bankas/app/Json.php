<?php

use App\DB\DataBase;

class Jason implements DataBase {

    private $data;

    public function __construct()
    {
        if (!file_exists(DIR.'/accounts.json')) {
            file_put_contents(DIR.'/accounts.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR.'/accounts.json'), 1) ;
    }

    public function __destruct()
    {
        file_put_contents(DIR.'/accounts.json', json_encode($this->data));
    }



    public function create(array $userData) : void {

    }

    public function update(int $userId, array $userData) : void {

    }

    public function delete(int $userId) : void {

    }

    public function show(int $userId) : array {

    }

    public function showAll() : array {

    }
}