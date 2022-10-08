<?php

//crear archivos
$nombrearchivo="archivo.txt";
$contenidoArchivo=" Hola, Saludos";

$archivoAcrear= fopen($nombrearchivo, "w");

fwrite($archivoAcrear, $contenidoArchivo);
fclose($archivoAcrear);

?>