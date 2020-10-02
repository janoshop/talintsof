<!DOCTYPE>
<html>
<head>
	<title>eliminarclientenuevo</title>
</head>
<body>

<?php
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "baselogin";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die ("error en la conexion");

	$rut = $_POST['ingresorut'];

	mysqli_query($conexion, "DELETE from clientenuevo where rut='$rut'")
		or die ("error al eliminar los datos");

	mysqli_close($conexion);
	echo "datos eliminados correctamente";
	?>
</body>
</html>