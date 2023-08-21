<?php

function myDisplay(){
$test = "ronaldo";
echo "I love " . $test . "!";
}

myDisplay();

$x = 6;
echo "Hi, I have $x apples";

function myTest() {
    $y = $GLOBALS['x'];
    echo "<h1>Variable x inside function is $y</h1>";
}

echo "<h1>Variable x outside function is $x</h1>";

myTest();

echo var_dump($x);

print "This is print";
echo "This is echo " . "Rafsan<br/>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a $this->color $this->model !";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message() . "<br/>";

$myCar2 = new Car("red", "Toyota");
echo $myCar2->message() . "<br/>";
