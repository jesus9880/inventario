<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar stock</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Agregar stock</title>
</head>
<body>
	
<center><div class="w3-container w3-green">
		<h1>Agregar Empleado</h1>
	  </div></center>

	<center><form action="registerPed.php" method="POST" name="registrar">
	<p>
  <label class="w3-text-blue">ID</label>
  <input class="w3-input" type="text"name="id" size="30" ></p>
  <p>
  <label class="w3-text-blue">MONBRE DEL PRODUCTO</label>
  <input class="w3-input" type="text"name="nombre" size="30" ></p>
  <p>
  <label class="w3-text-blue">CANTIDAD</label>
  <input class="w3-input" type="text"name="stock" size="30" ></p>
  <p>
  <label class="w3-text-blue">FECHA DE LLEGADA</label>
  <input class="w3-input" type="text"name="fechaV" size="30" ></p>
  <p>
  <label class="w3-text-blue">TAMAÑO</label>
  <input class="w3-input" type="text"name="fecha" size="30" ></p>
  <p>
  <label class="w3-text-blue">PRECIO</label>
  <input class="w3-input" type="text"name="costo" size="30" ></p>
  <p>


		<div class="boton">
			<input type="submit" value="Crear"class="w3-button w3-green" />
		</div></form>
		<br><br>
		<div class="boton">
		<form action="HomePro.php" method="POST" class="w3-bar w3-teal">
		<a href="HomePro.php"  class="w3-button w3-green">salir</a>
			</form>
		</div>
	</center><br>
</body>
</html>