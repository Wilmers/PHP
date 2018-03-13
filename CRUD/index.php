<html>
<head>
<style type="text/css"></style>
<link  rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Condicion</th>
      <th>  &nbsp;</th>
      <th> <a href="nuevo.php"> <button type="button" class="btn btn-outline-success">Nuevo</button></a> </th>
      
    </tr>
  </thead>
  
  <tbody>
  <?php 
  include 'conexion.php';
  $senetecnia='select * from categoria';
  $resultado =mysqli_query($conn,$senetecnia);
  
  while ($filas=mysqli_fetch_assoc($resultado))
  {
  	echo '<tr>';
  	echo '<td>'.$filas['idcategoria'].'</td>';
  	echo '<td>'.$filas['nombre'].'</td>';
  	echo '<td>'.$filas['descripcion'].'</td>';
  	echo '<td>'.$filas['condicion'].'</td>';
  	 echo  "<td> <a href='update.php?idcategoria=".$filas['idcategoria']."'> <button type='button' class='btn btn-outline-danger'>Modificar</button> </a> </td>";
  	 echo  "<td> <a href='delete.php?idcategoria=".$filas['idcategoria']."'> <button type='button' class='btn btn-outline-info'>Eliminar</button> </a> </td>";
  	 
  	 echo '</tr>';
  	
  }
  
  
  ?>
  
  </tbody>
  
</table> 


</body>

</html>