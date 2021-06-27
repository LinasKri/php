<?php


class Kibiras3{
    protected $akmenuKiekis = 0;
    static private $akmenuKiekisVisuoseKibiruose;


    public function prideti1Akmeni(){
        $this -> akmenuKiekis++;
        
    }

    public function pridetiDaugAkmenu($kiekis){
        
        if(!is_integer($kiekis)){
            return;
        }
        $this -> akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        echo $this->akmenuKiekis.'<br>';
    }
}