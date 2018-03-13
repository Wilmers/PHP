<?php 
	
	
	$consulta=EliminarCategoria($_GET['idcategoria']);
	
   function EliminarCategoria($idcategoria){
      include 'conexion.php';
   	
      
   	$sentencia ="delete from categoria where idcategoria='".$idcategoria."'";
   	$resultado =mysqli_query($conn, $sentencia) or die(mysqli_error());
    header('location:index.php');
   }

?>