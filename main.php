<?php
include_once ('Shape.php');
include_once ('Square.php');
$newShape=new Shape();  // creamos el objeto $newShape
$newShape->calcularArea();
echo $newShape->calcularArea();
$newSquare=new Square(15); // creamos el objeto $newSquare
echo $newSquare->calcularArea();
?>