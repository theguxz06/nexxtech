<?php

    if($_POST){

    
    //resivir y poner info del formulario

    $nombre=$_POST['txtNombre'];

    echo "Hola " .$nombre;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
       
    </p>

     <form action="ejercicios1y2.php" method="post">
         Nombre:
        <input type="text" name="txtNombre" id="">
            <br>
        <input type="submit" value="Enviar">

     </form>
</body>
</html>

