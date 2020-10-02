<html>
<body>

	<div class="w3-container w3-black w3-center">
		<h1>SISTEMA ACCESO INFORMACION VETERINARIA</h1>
	</div>

<p>Ingreso cliente nuevo</p>

<form action="visualizar.php">
	<input type="submit" value="Consultar Rut" name="consultarrut">
</form>
<p>----------------------------------------------------------------------------------------------</p>

<form action="guardarclientenuevo.php" method="POST">
<p>Rut responsable<input type="text" name="ingresorut" placeholder="Ingrese RUT"></p>
<p>Nombre responsable: <input type="text" name="ingresonombre" placeholder="ingrese nombre"></p>
<p>Apellido responsable: <input type="text" name="ingresoapellido" placeholder="ingrese apellido"></p>
<p>Direccion responsable: <input type="text" name="ingresodireccion" placeholder="ingrese direccion"></p>
<p>email responsable: <input type="text" name="ingresoemail" placeholder="ingrese email"></p>
<p>Celular responsable: <input type="text" name="ingresocelular" placeholder="ingrese numero celular"></p>
<p>Nombre mascota: <input type="text" name="ingresonombremas" placeholder="ingrese nombre mascota"></p>
<p>Tipo mascota: <input type="text" name="ingresotipomas" placeholder="ingrese tipo mascota"></p>
<p>Especie mascota: <input type="text" name="ingresoespeciemas" placeholder="ingrese especie mascota"></p>
<p>Raza mascota: <input type="text" name="ingresorazamas" placeholder="ingrese raza mascota"></p>
<p>Numero chip mascota: <input type="text" name="ingresonumchipmas" placeholder="ingrese numero chip mascota"></p>
<p>Edad mascota: <input type="text" name="ingresoedadmas" placeholder="ingrese edad mascota"></p>
<p>Color mascota: <input type="text" name="ingresocolormas" placeholder="ingrese color mascota"></p>

	<input type="submit" value="guardar cliente nuevo" name="guardarclientenuevo" />
</form>
<p>----------------------------------------------------------------------------------------------</p>

<form action="eliminarclientenuevo.php" method="POST">
	Rut: <input type="text" name="ingresorut">
	<p></p>
	<input type="submit" value="eliminar registro" name="eliminarregistro">
</form>
<p>----------------------------------------------------------------------------------------------</p>

<form action="actualizarclientenuevo.php" method="POST">
<p>Rut responsable<input type="text" name="ingresorut" placeholder="Ingrese RUT"></p>
<p>Nombre responsable: <input type="text" name="ingresonombre" placeholder="ingrese nombre"></p>
<p>Apellido responsable: <input type="text" name="ingresoapellido" placeholder="ingrese apellido"></p>
<p>Direccion responsable: <input type="text" name="ingresodireccion" placeholder="ingrese direccion"></p>
<p>email responsable: <input type="text" name="ingresoemail" placeholder="ingrese email"></p>
<p>Celular responsable: <input type="text" name="ingresocelular" placeholder="ingrese numero celular"></p>
<p>Nombre mascota: <input type="text" name="ingresonombremas" placeholder="ingrese nombre mascota"></p>
<p>Tipo mascota: <input type="text" name="ingresotipomas" placeholder="ingrese tipo mascota"></p>
<p>Especie mascota: <input type="text" name="ingresoespeciemas" placeholder="ingrese especie mascota"></p>
<p>Raza mascota: <input type="text" name="ingresorazamas" placeholder="ingrese raza mascota"></p>
<p>Numero chip mascota: <input type="text" name="ingresonumchipmas" placeholder="ingrese numero chip mascota"></p>
<p>Edad mascota: <input type="text" name="ingresoedadmas" placeholder="ingrese edad mascota"></p>
<p>Color mascota: <input type="text" name="ingresocolormas" placeholder="ingrese color mascota"></p>
	<input type="submit" value="actualizar registro" name="actualizarregistro">
</form>
<p>----------------------------------------------------------------------------------------------</p>

<button onclick="location.href='agendamiento.php'">Agendar</button>
<button onclick="location.href='cuenta.php'">Volver</button>

</body>
</html>
