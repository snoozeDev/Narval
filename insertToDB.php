<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$db = 'marinedb';
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

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

?>
