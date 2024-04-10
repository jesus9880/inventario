<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventarios";

	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stock Restante</title>
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
					<th width="0">Id</th>
						<th width="300">Nombre </th>
						<th width="300">Stock Restante</th>
						<th width="300">fECHA DE LLEGADA</th>

					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT idINV, nombreProd, stock, fechaCompra FROM inv ORDER BY idINV";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0)
						{
	  						
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
	<form action="HomePro.php" method="POST" class="w3-bar w3-teal">
		<a href="HomePro.php"  class="w3-button w3-green">salir</a>
		</form>
	</div></center>
</html>