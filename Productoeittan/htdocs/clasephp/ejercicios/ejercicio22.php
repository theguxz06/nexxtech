<?php

$frutas=array("s"=>"sandia", "m"=>"Manzana", "u"=>"uwu");

    print_r($frutas);

 echo $frutas["s"]."<br>";

 foreach($frutas as $indice=>&$valor){
     
  echo $valor. " tiene el indice:". $indice. "<br>";

 }

?>