<!DOCTYPE>
<html>
<head>
	<title>actualizarclientenuevo</title>
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
	$nombre = $_POST['ingresonombre'];
	$apellido = $_POST['ingresoapellido'];
	$direccion = $_POST['ingresodireccion'];
	$email = $_POST['ingresoemail'];
	$celular = $_POST['ingresocelular'];
	$nombremas = $_POST['ingresonombremas'];
	$tipomas = $_POST['ingresotipomas'];
	$especiemas = $_POST['ingresoespeciemas'];
	$razamas = $_POST['ingresorazamas'];
	$numerochipmas = $_POST['ingresonumchipmas'];
	$edadmas = $_POST['ingresoedadmas'];
	$colormas = $_POST['ingresocolormas'];

	mysqli_query($conexion, "UPDATE clientenuevo set nombre='$nombre', apellido='$apellido', direccion='$direccion', email='$email', celular='$celular', nombremas='$nombremas', tipomas='$tipomas', especiemas='$especiemas', razamas='$razamas', numerochipmas='$numerochipmas', edadmas='$edadmas', colormas='$colormas' where rut='$rut'")
		or die ("error al eliminar los datos");

	mysqli_close($conexion);
	echo "datos actualizados correctamente";
	?>
</body>
</html>