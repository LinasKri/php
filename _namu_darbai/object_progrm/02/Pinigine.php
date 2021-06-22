<?php

class Pinigine{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti( $kiekis){
        if (is_int($kiekis) ||is_double($kiekis)) {
            if ($kiekis <= 0) {
                echo '<br>Negalimas neigiamas kiekis! <br>';
                return;
            }
            $liekana=0;
            if ($kiekis <= 2) {
                $this->metaliniaiPinigai += $kiekis;
            }elseif($kiekis > 2){
                $this->popieriniaiPinigai += $kiekis;
            }
            
        }else {
            echo 'Tinka tik skaiciai!';
        }
    }
    
    public function skaiciuoti(){

        // echo 'Popieriniu yra: ' . $this->popieriniaiPinigai . ' € <br>';
        // echo 'Metaliniu yra: ' . $this->metaliniaiPinigai .' € <br>';
        echo 'Suma yra: ' . $this->popieriniaiPinigai + $this->metaliniaiPinigai .' € <br>';
    }

}