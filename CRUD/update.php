<?php 
	
	
	$consulta=ConsultaCategoria($_GET['idcategoria']);
	
   function ConsultaCategoria($idcategoria){
      include 'conexion.php';
   	
      
   	$sentencia ="select * from categoria where idcategoria='".$idcategoria."'";
   	$resultado =mysqli_query($conn, $sentencia) or die(mysqli_error());
   	$filas =mysqli_fetch_assoc($resultado);
   	
   	return [
   			$filas['idcategoria'],
   			$filas['nombre'],
   			$filas['descripcion'],
   			$filas['condicion']
   	
   	];
   	
   	
   }

?>


<html>
<head>
<style type="text/css"></style>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
	<form action="update2.php" method="post" name="form">
	<div class="jumbotron" style="width: 50%;border-radius:8px; margin: auto;">
	  <div class="form-group">
	<input type="hidden" name="idcategoria" class="form-control" value="<?php echo $consulta[0]?>"><br>
   
   </div>
	
   <div class="form-group" style="width: 50%">
   	 <label>Nombre</label>
	<input type="text" name="nombre" class="form-control" value="<?php echo $consulta[1]?>"><br>
   
   </div>
   
      <div class="form-group" style="width: 50%">
   		 <label>Descripcion</label>
	<input type="text" name="descripcion" class="form-control" value="<?php  echo $consulta[2]?>"><br>
   
   
   
   </div>
      <div class="form-group" style="width: 50%">
   
   		 <label>Condicion</label>
	  <input type="text" name="condicion" class="form-control" value="<?php echo $consulta[3]?>"><br>
   </div>
   
	<div class="form-group">
	 <button type="submit" class="btn btn-info" name="enviando">Guardar</button>
	</div>
	


</div>
	
	
	</form>

</body>

</html>