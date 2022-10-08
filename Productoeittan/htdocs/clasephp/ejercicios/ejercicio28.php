<?php

$txtNombre="";
if ($_POST ){

    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <?php
    if($_POST){
   ?>
 <strong>NOMBRE  <strong>:
    <?php echo $txtNombre;} ?>

    <form action="ejercicio28.php" method="post">

    <input type="button" value="EDITAR INFORMACIÓN"><br>

    <br> <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id=""><br>

   <br> Estas segura de tu información?:<br>
    <br>SI <input type="radio" name="lenguaje" value="SI" id=""><br>
    <br>NO  <input type="radio" name="lenguaje" value="NO" id=""><br>
    

    <input type="submit" value="ENVIAR INFORMACIÓN">

    

    </form>    
    


</body>
</html>