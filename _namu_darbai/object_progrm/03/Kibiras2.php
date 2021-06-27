<?php


class Kibiras2{
    protected $akmenuKiekis = 0;

    static private $akmenuKiekisVisuoseKibiruose;


    public function prideti1Akmeni(){
        $this -> akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++; 
    }

    public function pridetiDaugAkmenu($kiekis){
        
        if(!is_integer($kiekis)){
            return;
        }
        $this -> akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis; 

    }

    public function kiekPririnktaAkmenu(){
        echo $this->akmenuKiekis.'<br>';
    }

    public static function  kiekVisoAkmenu(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}