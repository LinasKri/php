<?php


class Kibiras1{
    protected $akmenuKiekis = 0;



    public function __set($prop, $value)
    {
        $this-> $prop = $value;
    }

    public function __get($akmenuKiekis)
    {
        return $this->$akmenuKiekis;
    }


    public function prideti1Akmeni(){
        $this -> akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis){
        $this -> akmenuKiekis += $kiekis;

    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }


}