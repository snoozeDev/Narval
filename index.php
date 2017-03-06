<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css">
</head>

<body>
	<div class="menu" tabindex="0">
		<div class="smartphone-menu-trigger"></div>

		<ul>
			<span><img class="iconesMenu icon-dashboard" id="iconeNew" src="image/Btn_New.svg"></span>
			<span><a href="chargercarte.php"><img class="iconesMenu icon-customers" id="iconeLoad" src="image/Btn_Load.svg"></a></span>
			<span><a href="tutoriel.php"><img class="iconesMenu icon-users" id="iconeTuto" src="image/Btn_Tutoriel.svg"></a></span>
			<span><a href="infos.php"><img class="iconesMenu icon-customers" id="iconeInfos" src="image/Btn_Infos.svg"></a></span>
			<!--<img id ="iim" src="image/Logo_IIM.svg">-->

		</ul>
	</div>

	<main>
		<div style="z-index:1" class="helper">
			<div id="indexDiv">
				<h1>NARVAL</h1>
				<span>Prototype d'un simulateur de gestion de crises navales</span>
            </div>
        </div>

        <div class="logos">
            <img id ="iim" src="image/Logo_IIM.svg">
            <img id="marine" src="image/Logo_Marine_Nationale.svg">
            <!--<img id="cesm" src="image/Logo_CESM.svg">-->
        </div>

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
		<div id="loadDiv" style="z-index:100">
			<h4 style="padding-bottom: 5%">Charger une carte sauvegardée</h4>

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


      </ul>

       ';

    }
    ?>



!-->
		<script type="text/javascript" charset="utf-8" src="js/scriptIndex.js"></script>
	</main>
</body>
