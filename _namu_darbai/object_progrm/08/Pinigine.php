<?php

class Pinigine{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti(float $kiekis){
        if ($kiekis <= 0) {
            echo '<br>Negalimas neigiamas kiekis! <br>';
            return;
        }
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        }
        $this->popieriniaiPinigai += $kiekis;
    }

    public function monetos(){
        
    }
    public function banknotai(){

    }
    
    public function skaiciuoti(){
        echo 'Suma: '. $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    }

}