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

	// sql to delete a record
	$sql = "DELETE FROM empleados WHERE idEmpleados = '$_POST[matricula]'";

	if (mysqli_query($conn, $sql)) {
	  echo "Empleado totalmente eliminado del sistema";
	} else {
	  echo "Error deleting record: " . mysqli_error($conn);
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