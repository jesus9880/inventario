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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stock Restante</title>
	
</head>
<body>
	<div class="row">
		<div class="col-xs-12">
			<center><h1 class="titulo">Listado de Ingredientes</h1></center>
			<center><table class="table table-striped">
				<thead>
					<tr>
						<th width="0">ID INV&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th width="300">Nombre del Ingrediente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th width="300">Stock Restante&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th width="300">Fecha de compra&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT idINV, nombreProd, stock, fechaCompra FROM inv ORDER BY idINV";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0)
						{
	  						// output data of each row
	  						while($row = mysqli_fetch_assoc($result))
	  						{
	  						?>
	  							<tr>
	  								<td><?php echo $row['idINV']; ?></td>
	  								<td><?php echo $row['nombreProd']; ?></td>
	  								<td><?php echo $row['stock']; ?></td>
	  								<td><?php echo $row['fechaCompra']; ?></td>
	  							</tr>
	  						<?php
	  						}
						}
						?>
				</tbody>
			</table></center>
<!--Mensaje de error -->
		<?php if(!empty($errores)): ?>
			<div>
				<ul>
					<?php echo $errores; ?>
				</ul>
			</div>
		<?php endif; ?>
		</div>
	</div>

	<center><div class="boton">
		<form action="HomeEmp.php" method="POST" class="linea">
			<input type="submit" value="Regresar" />
		</form>
	</div></center>
</body>
</html>