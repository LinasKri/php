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
    
    public function skaiciuoti(){

        // echo 'Popieriniu yra: ' . $this->popieriniaiPinigai . ' € <br>';
        // echo 'Metaliniu yra: ' . $this->metaliniaiPinigai .' € <br>';
        echo 'Suma: '. $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    }

}