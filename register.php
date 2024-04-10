<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventarios";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO empleados (idEmpleados, PassEmpleado, NombreEmpleado, APPEmpleado, APMEmpleado, telEmpleado, correoEmpleado, puestoEmpleado, Gerente_idGerente) VALUES ('$_POST[usuario]', '$_POST[pass]', '$_POST[names]', '$_POST[app]', '$_POST[apm]', '$_POST[tel]', '$_POST[correo]', '$_POST[puesto]', '153368')";

	if (mysqli_query($conn, $sql)) {
	  echo "Registro del Empleado con exito";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LISTO</title>
	
</head>
<body>
	<div>
		<form action="HomeAdmin.php" method="POST" class="boton" name="main">
			<div class="form-group">
				<input type="submit" value="Regresar" />
			</div>


<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>
	</div>
</body>
</html>