<!DOCTYPE>
<html>
<head>
	<title>guardarclientenuevo</title>
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

	$insertar = "INSERT into clientenuevo values ('$rut', '$nombre', '$apellido', '$direccion', '$email', '$celular', '$nombremas', '$tipomas', '$especiemas', '$razamas', '$numerochipmas', '$edadmas', '$colormas')";

	$resultado = mysqli_query($conexion, $insertar)
		or die("error al insertar los registros");

	mysqli_close($conexion);
	echo "datos insertados correctamente";
	?>
<p></p><p></p>
<button onclick="location.href='ingresoclientenuevo.php'">Volver</button>
</body>
</html>