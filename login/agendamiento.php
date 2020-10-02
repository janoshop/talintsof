<html>
<body>

  <div class="w3-container w3-black w3-center">
    <h1>SISTEMA ACCESO INFORMACION VETERINARIA</h1>
  </div>

<p>Agendamiento</p>


<p>Dia: <input type="text" name="texto" placeholder="ingrese dia"></p>
<p>Mes: <input type="text" name="texto" placeholder="ingrese mes"></p>
<p>Año: <input type="text" name="texto" placeholder="ingrese año"></p>
<p>Motivo atencion medica: <input type="text" name="texto" placeholder="ingrese motivo atencion medica"></p>

<input type="button" onclick="mensaje('Ha pulsado el botón Guardar')" value="Guardar">
<script>
  function mensaje(texto) {
    alert(texto);
  }
</script>

<input type="button" onclick="mensaje('Ha pulsado el botón Modificar')" value="Modificar">
<script>
  function mensaje(texto) {
    alert(texto);
  }
</script>

<input type="button" onclick="mensaje('Ha pulsado el botón Volver')" value="Volver">
<script>
  function mensaje(texto) {
    alert(texto);
  }
</script>

<input type="button" onclick="mensaje('Ha pulsado el botón Salir')" value="Salir">
<script>
  function mensaje(texto) {
    alert(texto);
  }
</script>

</body>
</html>