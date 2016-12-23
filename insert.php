<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>

<body>
	<form action="" id="form" method="get">
	<?php

		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'root';
		$db = 'marinedb';
		$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

		function sendData(){

			$vType = $_GET['vType'];
			$type = $_GET['typeBat'];
			$nom = $_GET['nomBat'];
			$sonar = $_GET['sonarBat'];

			if ($vType == "Bat"){
				$database = 'BATEAUX';
			}

			$sql = "INSERT INTO ".$database." (nom, TYPES_BATEAUX_ID, SONARS_ID) VALUES ('".$nom."', ".$type.", ".$sonar.")";

			if ($con->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

	?>
		<label for="vType">Type de v&eacute;hicule</label>
		<select name="vType" id="vType">
			<option value="Bat">Bateau</option>
			<option value="Avi">Avion</option>
			<option value="Hel">Helicopter</option>
		</select>
		<br><br>
		<label for="typeBat">Type</label>
		<select name="typeBat" id="typeBat">
			<option value="1">BPC</option>
			<option value="2">Frégate</option>
		</select>
		<br><br>
		<label for="nomBat">Nom</label>
		<input name="nomBat" id="nomBat" type="text">
		<br><br>
		<!--
		<label for="vitesseBat">Vitesse Max (en noeuds)</label>
		<input id="vitesseBat" type="number">
		<br>
		-->
		<label for="sonarBat">Sonar</label>
		<select name="sonarBat" id="sonarBat">
			<option value="1">10km</option>
			<option value="2">20km</option>
		</select>
		<br><br>
		<input type="submit">
	</form>

	<p id="result"></p>

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/sendData.js"></script>

</body>

</html>
