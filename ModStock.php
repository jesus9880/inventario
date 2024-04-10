<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modificar Stock</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>
<body>
		
<center><div class="w3-container w3-green">
		<h1>Agregar Empleado</h1>
	  </div></center>

	<center><form action="modstk.php" method="POST" name="registrar">

	<p>
  <label class="w3-text-blue">Id</label>
  <input class="w3-input" type="text"name="id" size="30" ></p>
  <p>
  <label class="w3-text-blue">Nueva cantidad</label>
  <input class="w3-input" type="text"name="snuevo" size="30" ></p>
  <p>
		<div class="boton">
			<input type="submit" value="Modificar" class="w3-button w3-green"/>
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