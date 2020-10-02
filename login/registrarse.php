<!DOCTYPE html>
<html>
<head>
</head>
<body>
<header>
	<div class="w3-container w3-black">
		<h1>SISTEMA ACCESO INFORMACION VETERINARIA</h1>
	</div>
</header>
		<div class="w3-container w3-green">
			<h1>Registrarse</h1>
		</div>
		<div>
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<label class="w3-label">Nombre de usuario o correo electrónico</label>
					<input class="w3-input w3-border" type="text" name="usuario">
				</p>
				<p>
					<label class="w3-label">Password</label>
					<input class="w3-input w3-border" type="password" name="pas">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-green">Registrarse</button>
				</p>
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
</body>
</html>