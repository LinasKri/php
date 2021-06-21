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

    public function __get($prop) {
        
        // if(!in_array($prop, ['age', 'color'])){
        //     return null;
        // }
        if ($prop == 'color') {
            return null;
        }
        if ($prop == 'rand') {
            return $this -> randomNumber();
        }
        return $this-> $prop;
    }

    public function __call($name, $arguments)
    {
        return $this ->{$name}(...$arguments);
    }

    public function randomNumber($time){
        return rand(10,99)*$time;
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