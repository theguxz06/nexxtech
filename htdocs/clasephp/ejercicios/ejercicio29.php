<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAmine="";
$txtComentario="";

if ($_POST ){

    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";


    $chkphp= ( isset($_POST['chkphp'])=="si")?"cheched":"";
    $chkhtml= ( isset($_POST['chkhtml'])=="si" )?"checked":"";
    $chkcss= ( isset($_POST['chkcss'])=="si" )?"checked":"";
  
    $lsAmine=(isset($_POST['lsAmine']))?$_POST['lsAnime']:"";

     $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    print_r($_POST);

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

    <form action="ejercicio29.php" method="post">

    <input type="button" value="EDITAR INFORMACIÓN"><br>

    <br> <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id=""><br>

    <?php //para seleccionar solo una opcion ?>
   <br> Estas segura de tu información?:<br>
    <br>SI <input type="radio" <?php echo ($rdgLenguaje=="SI")?"checked":""; ?> name="lenguaje" value="SI" id=""><br>
    <br>NO  <input type="radio"  <?php echo ($rdgLenguaje=="NO")?"checked":""; ?> name="lenguaje" value="NO" id=""><br>


    
  
    estas aprendiendo... 

      <?php //para seleccionar muchas opciones ?>
 <br>   php: <input type="checkbox" name="chkphp" value="si" id="">
 <br>   html: <input type="checkbox" name="chkhtml" value="si" id="">
  <br>   css: <input type="checkbox" name="chkcss" value="si" id="">

    <input type="submit" value="ENVIAR INFORMACIÓN">


    <?php //para opciones selecionadas en cuadrito ?>
   <br> ¿que perosnaje de baki te gusta?
    <select name="lsAnime" id="">
        <option value="">[Niguno]</option>
           <option value="">[Baki]</option>
              <option value="">[Yujiro]</option>
                 <option value="">[Jack]</option>


    </select>
    <br>

<?php //para comentarios  ?>
 tienes dudas? <br>

 <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
 <?php echo "tu mensaje es $txtComentario" ?>

    </form>    
    


</body>
</html>