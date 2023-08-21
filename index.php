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

//echo var_dump($x);

print "This is print";
echo "This is echo " . "Rafsan<br/>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(): string
    {
        return "My car is a $this->color $this->model !";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message() . "<br/>";

$myCar2 = new Car("red", "Toyota");
echo $myCar2->message() . "<br/>";


$time = date("H");
echo "Time is $time" . "<br/>";

$favColor= "blue";

switch ($favColor){
    case "red":
        echo "This is red" . "<br/>";
        break;
    case "blue":
        echo "This is blue" . "<br/>";
        break;
    case "green":
        echo "This is green" . "<br/>";
        break;
    default:
        echo "Nothing" . "<br/>";
}

for($x=0; $x<10; $x++){
    echo "The number is $x" . "<br/>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color) {
    echo "$color <br>";
}

function addNumbers(int $a, int $b): int
{
    return $a + $b;
}

//echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

echo "I like $colors[0]";

$country = array("Africa"=>1, "Bangladesh"=>2, "Pakistan"=>3);
echo "I am in " . $country['Africa']. "<br/>";

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2)
);

echo $cars[0][1];