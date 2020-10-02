<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bitacora</title>
</head>
<body>

<?php
$link = new PDO('mysql:host=localhost;dbname=baselogin', 'root', '');
?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>DIRECCION</th>
			<th>EMAIL</th>
			<th>CELULAR</th>
			<th>USUARIO</th>
			<th>FECHA_REGISTRO</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from bitacora') as $row){ ?> 
<tr>
	<td><?php echo $row['DIRECCION'] ?></td>
    <td><?php echo $row['EMAIL'] ?></td>
    <td><?php echo $row['CELULAR'] ?></td>
    <td><?php echo $row['USUARIO'] ?></td>
    <td><?php echo $row['FECHA_REGISTRO'] ?></td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>