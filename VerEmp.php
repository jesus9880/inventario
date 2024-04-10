<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventarios";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<center><div class="w3-container w3-green">
		<h1>Lista de empleados</h1>
	  </div></center>

  <div class="w3-container">
    
      <table class="w3-table w3-striped">
	<div class="row">
		<div class="col-xs-12">
			
				<thead>
					<tr>
						<th width="0">Matrícula</th>
						<th width="300">Nombres</th>
						<th width="300">Apellido Paterno</th>
						<th width="300">Apellido Materno</th>
						<th width="300">Teléfono</th>
						<th width="300">Correo</th>
						<th width="300">Puesto</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT idEmpleados, NombreEmpleado, APPEmpleado, APMEmpleado, telEmpleado, correoEmpleado, puestoEmpleado FROM empleados ORDER BY idEmpleados";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0)
						{
	  						// output data of each row
	  						while($row = mysqli_fetch_assoc($result))
	  						{
	  						?>
	  							<tr>
	  								<td><?php echo $row['idEmpleados']; ?></td>
	  								<td><?php echo $row['NombreEmpleado']; ?></td>
	  								<td><?php echo $row['APPEmpleado']; ?></td>
	  								<td><?php echo $row['APMEmpleado']; ?></td>
	  								<td><?php echo $row['telEmpleado']; ?></td>
	  								<td><?php echo $row['correoEmpleado']; ?></td>
	  								<td><?php echo $row['puestoEmpleado']; ?></td>
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
	<form action="HomeAdmin.php" method="POST" class="w3-bar w3-teal">
		<a href="HomeAdmin.php"  class="w3-button w3-green">salir</a>
		</form>
	</div></center>
</body>
</html>