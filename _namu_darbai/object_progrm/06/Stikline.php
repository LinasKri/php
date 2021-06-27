<?php

class Stikline{
    private $turis;
    private $kiekis = 0;

    public function __construct($turis){
        $this -> turis = $turis;
    }

    public function ipilti($kiekis){
        if ($kiekis > $this->turis) {
            $this->kiekis = $this->turis;
            return $this -> kiekis;
        }
        $this -> kiekis += $kiekis;
        return $this -> kiekis;
    }
    public function ispilti(){
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }

    public function kiekIpilta(){
        return $this->kiekis;
    }

}