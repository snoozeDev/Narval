<?php

if ($_GET['func'] == 'sendData'){
	echo 'sending<br>';
	sendData();
} else if ($_GET['func'] == 'askType'){
	askType();
}

function askType() {
	include 'db.php';
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

	$vType = $_GET['vType'];

	if ($vType == "Bat"){
		$table = 'BATEAUX';
	} else if ($vType == "Avi"){
		$table = 'AVIONS';
	} else if ($vType == 'Hel'){ //TODO helicopter
		$table = 'HELICOS';
	}

	$sql = "SELECT * FROM TYPES_".$table;
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["nom"].";";
		}
	} else {
		echo "0 results";
	}
}

function sendData() {
	include 'db.php';
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

//		echo 'DOING THE SENDING<br>';

	$vType = $_GET['vType'];
	$type = $_GET['type_bateau'];
	$nom = $_GET['nom'];
	$sonar = $_GET['radar'];
	$faction = $_GET['color_bateau'];

	if ($vType == "Bat"){
		$table = 'BATEAUX';
	} else if ($vType == "Avi"){
		$table = 'AVIONS';
	} else if ($vType == 'Hel'){ //TODO helicopter
		$table = 'HELICOS';
	}

	$sql = "INSERT INTO ".$table." (nom, TYPES_".$table."_ID, SONARS_ID, FACTIONS_color) VALUES ('".$nom."', ".$type.", ".$sonar.", '".$faction."')";

//		echo $sql;

	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//function getVehicules() {
//	include 'db.php';
//	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//
//	$sql = "SELECT * FROM VEHICULES"
//
//}

?>
