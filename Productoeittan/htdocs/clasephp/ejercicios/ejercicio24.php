<?php

class persona{
    
    public $nombre; //propiedades
    private $edad;  
    protected $altura;  

    //crear metodos->
public function asignarnombre($nuevonombre){
     // acciones o metodos
            $this->nombre=$nuevonombre;

    }

    public function imprimirnomnre(){


        echo "hola soy ". $this->nombre;

    }

}

//crear un objeto
$objalumno= new persona();  //instancia o creacion de un objeto
//para asiganar el nombre del objeto
$objalumno->asignarnombre("joaq");

$objalumno2= new persona();
$objalumno2->asignarnombre("tumama");
$objalumno2->imprimirnomnre();
echo $objalumno2->nombre;

echo $objalumno->nombre //imprimir porpiedad
 
?>