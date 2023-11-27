<?php
include_once('Shape.php');
class Circle extends Shape{
    private $radio;
    public function __construct($r){
        $this->radio=$r;
    }
    public function calcularArea(){
        return 3.14*$this->radio*$this->radio;
    }
} 
?>