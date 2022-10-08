<?php

$jsoncontenido='[  
    {"nombre":"Oscar", "apellido":"Uh"}
         {"nombre":"Joaquin", "apellido":"Uh"}
 ]';

 $resultado= json_decode($jsoncontenido);
 print_r($resultado);

?>