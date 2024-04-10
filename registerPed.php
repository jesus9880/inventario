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

	$sql = "INSERT INTO inv (idINV,nombreProd,stock,fechaCompra,fechaVencimiento,Gestiona_GestionaGerente, Gerente_idGerente) VALUES ('$_POST[id]', '$_POST[nombre]', '$_POST[stock]', '$_POST[fechaV]', '$_POST[fecha]','$_POST[costo]','153368')";

	if (mysqli_query($conn, $sql)) {
	  echo "Registro del Pedido con exito";
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