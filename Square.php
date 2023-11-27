<?php
include_once('Shape.php'); //para importar archivo
class Square extends Shape  // heredar la clase Shape
{
    private $sidelength;
    public function __construct($a)
    {  //para instanciar un objeto
        $this->sidelength = $a;
    }
    public function calcularArea(){
        return $this->sidelength* $this->sidelength;
    } 
    
}
?>