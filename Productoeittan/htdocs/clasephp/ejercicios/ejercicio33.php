<?php 
//abriendo un archivo para leer su contenido
$archivo="archivo.txt";

$archivoabierto=fopen($archivo, "r");

$contenido=fread($archivoabierto, filesize($archivo));

echo $contenido;

 ?>