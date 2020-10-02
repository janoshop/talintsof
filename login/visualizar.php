<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visualizar</title>
</head>
<body>

<?php

$link = new PDO('mysql:host=localhost;dbname=baselogin', 'root',''); 

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>RUT</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>DIRECCION</th>
			<th>EMAIL</th>
			<th>CELULAR</th>
			<th>NOMBRE MASCOTA</th>
			<th>TIPO MASCOTA</th>
			<th>ESPECIE MASCOTA</th>
			<th>RAZA MASCOTA</th>
			<th>NUMERO CHIP MASCOTA</th>
			<th>EDAD MASCOTA</th>
			<th>COLOR MASCOTA</th>			
		</tr>
		</thead>

<?php foreach ($link->query('SELECT * from clientenuevo') as $row){ 

?> 
<tr>
	<td><?php echo $row['rut'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['celular'] ?></td>
    <td><?php echo $row['nombremas'] ?></td>
    <td><?php echo $row['tipomas'] ?></td>
    <td><?php echo $row['especiemas'] ?></td>
    <td><?php echo $row['razamas'] ?></td>
    <td><?php echo $row['numerochipmas'] ?></td>
    <td><?php echo $row['edadmas'] ?></td>
    <td><?php echo $row['colormas'] ?></td>
 </tr>
<?php
	}
?>
</table>

<button onclick="location.href='ingresoclientenuevo.php'">Volver</button>

</body>
</html>