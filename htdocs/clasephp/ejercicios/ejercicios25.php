<?php

$server="localhost"; // 127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg')";

    $conexion->exec($sql);

    echo "Conexion estabelcioda";

}catch(PDOException $error){
    echo "conexion erronea". $error;
}


?>