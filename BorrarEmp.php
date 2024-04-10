<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Borrar Empleado</title>

</head>
<body>
<center><div class="w3-container w3-green">
		<h1>Borrar Empleado</h1>
	  </div></center>

	<center><form action="delete.php" method="POST" name="eliminar">


	<p>
  <label class="w3-text-blue">Matricula para borrar</label>
  <input class="w3-input" type="text"name="matricula" size="30" ></p>
  <p>

		<div class="boton">
			<input type="submit" value="Borrar" class="w3-button w3-green"/>
		</div><br><br>
	</center></form>

	<center><div class="boton">
	<form action="HomeAdmin.php" method="POST" class="w3-bar w3-teal">
		<a href="HomeAdmin.php"  class="w3-button w3-green">salir</a>
		</form>
	</div></center>
</body>
</html>