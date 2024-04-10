<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inventario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Agregar Empleado</title>
	
</head>
<body>
	
<center><div class="w3-container w3-green">
		<h1>Agregar Empleado</h1>
	  </div></center>
	

	<center><form action="register.php" method="POST" name="registrar">
	<p>
	<form class="w3-container">

  <label class="w3-text-blue">ID</label>
  <input class="w3-input" type="text"name="usuario" size="30" ></p>

  <p>
  <label class="w3-text-blue">Matricula</label>
  <input class="w3-input" type="text"name="pass" size="30" ></p>
  <p>
  <label class="w3-text-blue">Nombres</label>
  <input class="w3-input" type="text"name="names" size="30" ></p>
  <p>
  <label class="w3-text-blue">APELLIDO PATERNO</label>
  <input class="w3-input" type="text"name="app" size="30" ></p>
  <p>
  <label class="w3-text-blue">APELLIDO MATERNO</label>
  <input class="w3-input" type="text"name="apm" size="30" ></p>
  <p>
  <label class="w3-text-blue">TELÉFONO</label>
  <input class="w3-input" type="text"name="tel" size="30" ></p>
  <p>
  <label class="w3-text-blue">CORREO</label>
  <input class="w3-input" type="text"name="correo" size="30" ></p>
  <p>
  <p>
  <label class="w3-text-blue">PUESTO</label>
  <input class="w3-input" type="text"name="puesto" size="30" ></p>
  <p>
		
			<input type="submit" value="Crear"class="w3-button w3-green" />
		</div></form>
		<br><br>
		<div class="boton">
			<form action="HomeAdmin.php" method="POST" class="w3-bar w3-teal">
		<a href="HomeAdmin.php"  class="w3-button w3-green">salir</a>
			 
		</form>
		</div>
	</center><br>
</body>
</html>