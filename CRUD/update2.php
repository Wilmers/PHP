<?php 

ModificarCategoria($_POST['nombre'],$_POST['descripcion'],$_POST['condicion'],$_POST['idcategoria']);

 function ModificarCategoria($nombre,$descripcion,$condicion,$idcategoria){
 	 include 'conexion.php';
 	
 	   $sentencia=" update categoria set nombre='".$nombre."',descripcion='".$descripcion."',condicion='".$condicion."'where idcategoria='".$idcategoria."'";
 	  $resultado =mysqli_query($conn, $sentencia);
      if ($resultado){
      	
     echo '<html>
     	<head>
        <link  rel="stylesheet" href="bootstrap/bootstrap.min.css">
        </head>
     		<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Registro Exitoso!</h4>
        </div>
     		
     		</html>';
 // header ( 'location:index.php' );
     
 
      	
      }
 	else {
 		echo 'Error';
 	}
 	
 }



?>