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
	} else if ($vType == ''){ //TODO helicopter
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
	$type = $_GET['type'];
	$nom = $_GET['nomBat'];
	$sonar = $_GET['sonarBat'];

	if ($vType == "Bat"){
		$table = 'BATEAUX';
	} else if ($vType == "Avi"){
		$table = 'AVIONS';
	} else if ($vType == ''){ //TODO helicopter
		$table = 'HELICOS';
	}

	$sql = "INSERT INTO ".$table." (nom, TYPES_BATEAUX_ID, SONARS_ID) VALUES ('".$nom."', ".$type.", ".$sonar.")";

//		echo $sql;

	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>
