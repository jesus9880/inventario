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

	$sql = "UPDATE inv SET stock='$_POST[snuevo]' WHERE idINV='$_POST[id]'";

	if (mysqli_query($conn, $sql)) {
	  echo "Stock actualizado con éxito";
	} else {
	  echo "Error updating record: " . mysqli_error($conn);
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
		<form action="HomePro.php" method="POST" class="boton" name="main">
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