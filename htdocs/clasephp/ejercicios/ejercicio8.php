<?php
 if($_POST){
     $valorA=$_POST['valorA'];
     $valorB=$_POST['valorB'];

     if($valorA > $valorB){

        echo "El valor de A es mayor de B";
     }

      if($valorA < $valorB){

        echo "El valor de B es mayor de A";
     }
     
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        valor A:
        <input type="number" name="valorA" id="">
        valor B:
         <input type="number" name="valorB" id="">
        <input type="submit" value="Calcular">

    </form>

</body>
</html>