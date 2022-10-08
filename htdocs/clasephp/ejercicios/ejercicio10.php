<?php
 if($_POST){
     $valorA=$_POST['valorA'];
     $valorB=$_POST['valorB'];

     $suma=$valorA+$valorB;
     $resta=$valorA-$valorB;
     $division=$valorA/$valorB;
     $multiplicacion=$valorA*$valorB;

     echo "<br>".$suma;
      echo "<br>".$resta;
       echo "<br>".$division;
        echo "<br>".$multiplicacion;

    if($valorA == $valorB){
        echo "<br> El valor de A es igual a B <br>";

        if($valorA == 4){
            echo "El valor A es 4 <br>";

        }
        if($valorA == 5){
             echo "El valor A es 5 <br>";
        }
    }
    if (($valorA==$valorB) && ($valorA==4))
    echo "El valor de A es igual a B y es un numero 4";
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
    
    <form action="ejercicio10.php" method="post">
        valor A:
        <input type="number" name="valorA" id="">
        valor B:
         <input type="number" name="valorB" id="">
        <input type="submit" value="Calcular">

    </form>

</body>
</html>