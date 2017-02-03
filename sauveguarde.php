
<?php

if (isset($_GET['update'])) {
	updateMap();
} else if (isset($_GET['save'])) {
	saveMap();
}

function saveMap() {
	include 'db.php';
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);

	$name = $_GET['mapName'];
	$description = $_GET['mapDescription'];
	$cercles = $_GET['cercles'];
	$polygs = $_GET['polygs'];
	$texts = $_GET['texts'];
	$polyls = $_GET['polyls'];
	$batis = $_GET['batis'];
	$bateaux = $_GET['bateau_save'];
	$idUpdate = $_GET['idUpdate'];

	$sql = "INSERT INTO save_marine_table (mapName, mapDescription, cercles, polygs, texts, polyls, batis, bateaux) VALUES ('$name','$description','$cercles','$polygs', '$texts', '$polyls', '$batis', '$bateaux')";

	if ($con->query($sql) == TRUE) {
		$last_id = mysqli_insert_id($con);
		echo "Sauvegarde Réussie !/$last_id";
	} else {
		echo "Erreur: " . $sql . "<br>" . $con->error;
	}
}

function updateMap() {
	include 'db.php';
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);

	$name = $_GET['mapName'];
	$description = $_GET['mapDescription'];
	$cercles = $_GET['cercles'];
	$polygs = $_GET['polygs'];
	$texts = $_GET['texts'];
	$polyls = $_GET['polyls'];
	$batis = $_GET['batis'];
	$bateaux = $_GET['bateau_save'];
	$idUpdate = $_GET['idUpdate'];

	$sql = "UPDATE save_marine_table SET cercles='$cercles', polygs='$polygs', texts='$texts', polyls='$polyls', batis='$batis', bateaux='$bateaux' WHERE id='$idUpdate'";

	if ($con->query($sql) == TRUE) {
		echo "Carte mise à jour !";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}

if (isset($_GET['update'])) {
	$last_id = $idUpdate;
} else if (isset($_GET['save'])) {
	$last_id = mysqli_insert_id($con);
}



?>
