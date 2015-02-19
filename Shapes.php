<?php


require('classes/shapes.php');
require('classes/Rectangle.php');
//require ('classes/Cilinder.php');
require('classes/Circle.php');



$a = new Rectangle(3, 8);
$b = new Circle(4);
//$c = new Cilinder(3, 5);

var_dump($a->getArea());
var_dump($b->getArea());
//svar_dump($c->getArea());
