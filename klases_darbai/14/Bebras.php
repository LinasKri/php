<?php 

//Prog Zita

class Bebras{
// savybes
    public $name = 'Sarikas';
    protected $color = 'brown';
    private $age = 14;


// ------------------
// metodai
    public function sayHello(){
        echo "<h2>Hello, $this->name!</h2>
        <h4>Age: $this->age</h4>";
    }

    public function addYear(){
        $this-> age++;
    }

    public function getAge(){
        return $this-> age;
    }
    public function setAge($age){
        if (!is_integer($age)) {
            echo 'Galimi tik skaiciai';
            // exception
            return;
        }
        if($age > 25){
            echo 'Tiek bebrai negyvena';
            // exception
            return;
        }
        $this-> age = $age;
    }
}