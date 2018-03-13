

<?php 

include 'conexion.php';
 if (isset($_POST['enviando'])){
 	$nombre=$_POST['nombre'];
 	$descripcion=$_POST['descripcion'];
 	$condicion=$_POST['condicion'];
 	
 	$sql="insert into categoria(nombre,descripcion,condicion)values('$nombre','$descripcion','$condicion')";
 	
 	$resultado = mysqli_query($conn, $sql);
 	 
 	if ($resultado){
 		echo "se registro corectmanete";
 		header ( 'location:index.php' );
 	
 	
 	}
 	else {
 		echo "no se pudo registrar";
 	}
 	
 }

?>

<html>
<head>
<style type="text/css"></style>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
	<form action="nuevo.php" method="post" name="form">
	<div class="jumbotron" style="width: 50%;border-radius:8px; margin: auto;">

   <div class="form-group" style="width: 50%">
   	 <label>Nombre</label>
	<input type="text" name="nombre" class="form-control" ><br>
   
   </div>
   
      <div class="form-group" style="width: 50%">
   		 <label>Descripcion</label>
	<input type="text" name="descripcion" class="form-control" ><br>
   
   
   
   </div>
      <div class="form-group" style="width: 50%">
   
   		 <label>Condicion</label>
	  <input type="text" name="condicion" class="form-control" ><br>
   </div>
   
	<div class="form-group">
	 <button type="submit" class="btn btn-info" name="enviando">Guardar</button>
	</div>
	


</div>
	
	
	</form>

</body>

</html>