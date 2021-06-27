<?php

class Stikline{
    private $turis;
    private $kiekis;

    public function __construct($turis){
        $this -> turis = $turis;
    }

    public function ipilti($kiekis){
        if ($kiekis > $this->turis) {
            $this->kiekis = $this->turis;
        }
        $this -> kiekis += $kiekis;
    }
    public function ispilti($kiekis){
        if ($kiekis > $this -> turis) {
            $this -> kiekis = 0;
        }
        $this -> kiekis -= $kiekis;
    }
}