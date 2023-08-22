<?php
declare(strict_types=1);

require "Products/products.php";
require "Testing/testing.php";

class Fruit
{
// Properties
public $name;
public $color;

// Methods
function set_name($name)
{
$this->name = $name;
}

function get_name()
{
return $this->name;
}

function set_color($color)
{
$this->color = $color;
}

function get_color()
{
return $this->color;
}
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

echo "Name: " . $apple->get_name() . "<br/>";
echo "Color: " . $apple->get_color() . "<br/>";

class TestP
{
public $name, $color;
const line = "This is a line <br/>";

public function __construct($name, $color)
{
$this->name = $name;
$this->color = $color;
}

public function intro()
{
echo "This fruit is {$this->name} and color is {$this->color} <br/>";
}

protected function introProtected()
{
echo "This fruit is {$this->name} and color is {$this->color} <br/>";
}
}

class TestC extends TestP
{
public function message()
{
echo "Am I a fruit or a berry <br/>";
}
}

$strawberry = new TestC("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
//$strawberry->introProtected(); // ERROR. introProtected is protected.

echo TestP::line;

abstract class ParentClass {
abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
public function prefixName($name): string
{
if($name == "John Doe"){
$prefix = "Mr. ";
} elseif ($name == "Jane Doe"){
$prefix = "Mrs. ";
} else {
$prefix = "";
}

return "{$prefix} {$name}";
}
}

$class = new ChildClass();

echo $class->prefixName("John Doe") . "<br/>";


// --------------------
interface C {
public function insideC();
}

interface B {
public function insideB();
}

class Multiple implements B, C {

// Function of the interface B
function insideB() {
echo "I am in interface B <br/>";
}

// Function of the interface C
function insideC() {
echo "I am in interface C";
}

public function insideMultiple()
{
echo "I am in inherited class <br/>";
}
}

$geeks = new multiple();
$geeks->insideC();
$geeks->insideB();
$geeks->insideMultiple();

trait message1 {
public function msg1(){
echo "OOP is fun! <br/>";
}
}

trait message2 {
public function msg2() {
echo "OOP reduces code duplication! <br/>";
}
}

class Welcome {
use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
$obj->msg2();

function wow(){
echo "This is index wow!";
}

use products\v1\command as cmdP;
use testing\v1\command as cmdT;

$namespacing = new cmdP\product();
$namespacing1 = new cmdT\product();

products\wow();