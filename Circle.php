<?php
include_once('Shape.php');
class Circle extends Shape{
    private $radio;
    public function __construct($r){
        $this->radio=$r;
    }
    public function calcularArea(){
        return pi()*$this->radio*$this->radio;
    }
} 
?>