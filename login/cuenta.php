<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
	<div class="w3-container w3-black w3-center">
		<h1>SISTEMA ACCESO INFORMACION VETERINARIA</h1>
	</div>
	<p></p><p></p>
	<form class="w3-container" action="ingresoclientenuevo.php" method="post">
		<input type="hidden" name="ingresoclientenuevo" value="ingresoclientenuevo">
		<button class="w3-btn w3-green">Ingreso cliente nuevo</button>
	</form>
	<p></p><p></p>
	<form class="w3-container" action="http://localhost/phpmyadmin/server_import.php" method="post">
		<input type="hidden" name="Restauracion" value="Restauracion">
		<button class="w3-btn w3-green">Restauracion</button>
	</form>
	<p></p><p></p>
	<form class="w3-container" action="http://localhost/phpmyadmin/db_export.php?db=baselogin" method="post">
		<input type="hidden" name="Respaldobd" value="Respaldobd">
		<button class="w3-btn w3-green">Respaldo base datos</button>
	</form>
	<p></p><p></p>


	<form action="bitacora.php">
	<input type="submit" value="Bitacora" name="Bitacora">
	</form>
	<p></p><p></p>
	</form>

    <div class="columns download">
        <p>
            <a href="ayuda.pdf" class="button"><i class="fa fa-download"></i>Manual Usuario</a>
          </p>
       </div>
	<p></p><p></p>

	<form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>

	<p></p><p></p>
</body>
</html>