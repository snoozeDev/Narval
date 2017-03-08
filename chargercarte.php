<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css">
	<link rel="stylesheet" type="text/css" href="css/chargeEtTuto.css">
</head>


<!-- LOADING BAR -->

<!--
<div id="newDiv" style="color:red">
			<div class='container'>
				<div class='loading'>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
</div>
-->

<!--END LOADING BAR-->

<div id="loadDiv" style="z-index:100">
	<a  id='backIcon-Charge' href="index.php">
		<img src="image/backArrow.svg" alt="">
		<!--'backIcon' properties in 'changerCarte.css'-->
	</a>
	<h4 id='loadTitle'>Charger une carte sauvegardée</h4>

<?php
	include 'db.php';

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

	if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, mapName, mapDescription, cercles, polygs, texts, polyls, batis, bateaux FROM save_marine_table";
	$result = $conn->query($sql);



	while($row = $result->fetch_assoc()) {
		echo '
		<ul class="" style="position:relative;z-index:1000">
			<li class="resource--article ">
				<h10 class="resource__title" style="color:black">'.$row["mapName"].'</h10>
				<p class="resource__summary">'.$row["mapDescription"].'</p>
				<a href="map.php?id='.$row["id"].'" style="cursor: pointer;" class="btn"  id="Load">Charger la carte</a>
				<a href="delete.php?id='.$row["id"].'" style="background:red;cursor: pointer;" class="btn"  id="Load">Supprimer la carte</a>
			</li>
		</ul>
	';
	}
?>
