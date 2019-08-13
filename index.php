<?php

require 'Rectangle.php';
require 'Square.php';

/*$rectangle = new Rectangle();
$rectangle->width = 200;
$rectangle->height = 150;
$rectangle->color = "blue";

var_dump($rectangle);*/

/*$rectangle1 = new Rectangle();
$rectangle1->setWidth(-200);
$rectangle1->setHeight(150);
$rectangle1->setColor('blue');

var_dump($rectangle1);*/

$rectangle2 = new Rectangle(-200, 150);

echo($rectangle2);

$square = new Square(300);

var_dump($square);