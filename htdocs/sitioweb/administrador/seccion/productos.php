<?php  include("../template/cabecera.php");?>

<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){

    case "Agregar":
        $sentenciaSQL= $conexion ->prepare("INSERT INTO libros (nombre, imagen ) VALUES (:nombre,:imagen);");
         $sentenciaSQL->bindParam(':nombre',$txtNombre);
        
         $fecha= new DateTime();
         $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

         $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
         $sentenciaSQL->execute();

        header("Location:productos.php");
    break;

     case "Modificar":
    $sentenciaSQL= $conexion ->prepare("UPDATE libros SET nombre=:nombre WHERE id=:id");
         $sentenciaSQL->bindParam(':nombre',$txtNombre);
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();
        
         if($txtImagen!=""){

            $fecha= new DateTime();
         $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        
             $sentenciaSQL= $conexion ->prepare("SELECT imagen FROM  libros WHERE id=:id");
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();
         $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

         if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg")) {

            if (file_exists("../../img/" .$libro["imagen"])){

                unlink("../../img/".$libro["imagen"]);
            }

         }

           $sentenciaSQL= $conexion ->prepare("UPDATE libros SET imagen=:imagen WHERE id=:id");
         $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();
         }
          header("Location:productos.php");
      
    break;

     case "Cancelar":
        header("Location:productos.php");
    break;

        case "Seleccionar":
         $sentenciaSQL= $conexion ->prepare("SELECT * FROM  libros WHERE id=:id");
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();
         $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        
         $txtNombre=$libro['nombre'];
         $txtImagen=$libro['imagen'];
    break;
        case "Borrar":

            $sentenciaSQL= $conexion ->prepare("SELECT imagen FROM  libros WHERE id=:id");
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();
         $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

         if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg")) {

            if (file_exists("../../img/" .$libro["imagen"])){

                unlink("../../img/".$libro["imagen"]);
            }

         }

            $sentenciaSQL= $conexion->prepare("DELETE FROM libros WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            header("Location:productos.php");
    break;
}

 $sentenciaSQL= $conexion ->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
           datos de libro
        </div>

        <div class="card-body">

             <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" required readonly class="form-control" value="<?php  echo $txtID;  ?>" name="txtID" id="txtID" placeholder="ID">
    </div>

     <div class = "form-group">
    <label for="txtNombre">nombre:</label>
    <input type="text" required class="form-control"  value="<?php  echo $txtNombre;  ?>"  name="txtNombre" id="txtNombre" placeholder="Nombre">
    </div>

      <div class = "form-group">
        <label for="txtImagen">Imagen:</label>

        <br>


    <?php
        if($txtImagen!=""){ ?>

            <img class="img-thumbnail rounded"  src="../../img/<?php echo $txtImagen;?>" width="100" alt="" srcset>

    <?php
        }
    ?>
    <input type="file" class="form-control"  value="<?php  echo $txtID;  ?>"  name="txtImagen" id="txtImagen" placeholder="Imagen">
    </div>

    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":"";?> value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";?> value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";?> value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>

    </form>
        </div>
        

    </div>

   
    
    

</div>
<div class="col-md-7">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($listaLibros as $libros) {?>
            <tr>
                <td><?php echo $libros['id']; ?></td>
                <td><?php echo $libros['nombre']; ?></td>
                <td>

                <img class="img-thumbnail rounded" src="../../img/<?php echo $libros['imagen']; ?>" width="100" alt="" srcset>

                
            
            </td>
                <td>
          
                <form method="post">

                <input type="hidden" name="txtID" id="txtID" value="<?php echo $libros['id']; ?>">

                <input type="submit" name="accion" value="Borrar" class="btn btn-danger">

                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>


                </form>
            
            </td>
            </tr>
              <?php  } ?>
        </tbody>
    </table>

</div>

<?php  include("../template/pie.php")  ?>