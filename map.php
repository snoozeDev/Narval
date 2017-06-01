<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/leaflet.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/component1.css" />
	<!--
	<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
-->
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<script src='http://code.interactjs.io/v1.2.6/interact.js'></script>


<!--    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />-->

<script type="text/javascript">
  function change_onglet(name) {
     document.getElementById('onglet_' + anc_onglet).className = 'onglet_0 onglet';
     document.getElementById('onglet_' + name).className = 'onglet_1 onglet';
     document.getElementById('contenu_onglet_' + anc_onglet).style.display = 'none';
     document.getElementById('contenu_onglet_' + name).style.display = 'block';
     anc_onglet = name;
 }

</script>

<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<!-- ON RAFFRAICHIT LE CHAT TOUTES LES SECONDES -->

<body onload="setInterval('chat.update()', 1000)"> 




	<!-- CE FICHIER CONTIENT LES FONCTIONS DU CHAT -->
	<?php include('chat.php') ?>
	<p id="name-area"></p>

	<div id="ajout_chatbox">
		<p id="closechat" onclick="closePopUp('chatbox')">Fermer le chat</p>
		<div id="chat-wrap">
			<div id="chat-area"></div>
		</div>
		<form id="send-message-area">
			<textarea id="sendie" maxlength='100'></textarea>

            <!--			AU CAS OU ON PEUT PAS ENVOYER AVEC UN BOUTOPN SUR LA TABLETTE-->
            <p id="send">Envoyer</p>
        </form>`

    </div>
    <!-- MARK: AJOUT BATIMENTS -->
    <div id="ajout_batiment" class="pop_up_inv hide">

      <div class="pop_up " id="ajout_batiment_inv">
         <p class="title">BÂTIMENTS</p>
         <label>Choisir un bâtiment</label>

         <div class="container push" style="display:flex; flex-flow: row wrap; justify-content: center ; align-items: center ;margin-top: 2%;">
            <div class="batibtn" name="port" >
                <a  href="#"  ><img src="image/port.svg" alt="" height=100px>
                    <br>Port
                </a>                            
            </div>

            <div class="batibtn" name="offshore" >
                <a href="#"  ><img src="image/offshore.svg" alt="" height=100px> 
                    <br>Plateforme Offshore
                </a>                               
            </div>
            <div class="batibtn" name="phare">
                <a href="#"  ><img src="image/phare.svg" alt="" height=100px; width="1000px">
                    <br>Phare
                </a>
            </div>
            <div class="batibtn" name="ville">
                <a href="#" ><img src="image/ville.svg" alt="" height=100px; width="1000px">
                    <br>Ville
                </a>
            </div>
            <div class="batibtn" name="village">
                <a href="#"  ><img src="image/village.svg" alt="" height=100px; width="1000px">
                    <br>Village
                </a>
            </div>
        </div>
        <label>Description (facutatif)</label><br>
        <br>

        <textarea class="formula" id="bati_describ" name="description"></textarea>

        <a href="#" class="btn" id="drawBatiment">Ajouter le bâtiment</a>
    </div>

</div>




<!-- CE QUI CREE LE CERCLE -->
<div class="grade_circle">

  <div class="value">1</div>
  <input id="grade" type="range" min="10" max="1500" step="10" value="50">

</div>

<!-- MARK: AJOUT FORMES -->

<div id="ajout_pins" class="pop_up_inv hide">
  <div class="pop_up" id="ajout_pins_inv">
   <form>

    <p class="title"> FORMES </p>

    <div id="selecteur">
     <a class="btn_text btn" id="btn_text"><img src="image/Ajout_Texte.svg" width="50px" height="50px"></a>
     <a class="btn_circle btn" id="btn_circle"><img src="image/Ajout_Cercle.svg" width="50px" height="50px"></a>
     <a class="btn_polygone btn" id="btn_polygone"><img src="image/Ajout_Polygone.svg" width="50px" height="50px"></a>
     <a class="btn_polyline btn" id="btn_polyline"><img src="image/Ajout_Ligne.svg" width="50px" height="50px"></a>
 </div>

 <div class="ligne">

     <div id="form_text" class="formulaire hide">
      <p class="title"> Écrire sur la carte </p>
      <input id="label_text" class="formula" placeholder="Votre texte">
      <br>
      <br>


      <a href="#" class="btn" id="drawText">Ajouter texte</a>
  </div>

  <div id="form_circle" class="formulaire hide">
      <p class="title">Créer un cercle</p>


      <p class="align">Couleur du cercle</p><br>

      <div class="row">

          <div class="circlebtn"  name="red"><a href="#"><img src="image/PastilleRouge.svg" alt=""></a></div>
          <div class="circlebtn"  name="green"><a href="#"><img src="image/PastilleVerte.svg" alt=""></a></div>
          <div class="circlebtn"  name="blue"><a href="#"><img src="image/PastilleBleue.svg" alt=""></a></div>
          <div class="circlebtn"  name="grey"><a href="#"><img src="image/PastilleGrise.svg" alt=""></a></div>
      </div>
      <br>


      <a href="#" class="btn" id="drawCircle">Ajouter un cercle</a>
  </div>

  <div id="form_polygone" class="formulaire hide">
      <p class="title">Créer un polygone</p>
      <p class="align">Couleur du polygone</p>
      <div class="row">

       <div class="circlebtn"  name="red"><a href="#"><img src="image/PastilleRouge.svg" alt=""></a></div>
       <div class="circlebtn"  name="green"><a href="#"><img src="image/PastilleVerte.svg" alt=""></a></div>
       <div class="circlebtn"  name="blue"><a href="#"><img src="image/PastilleBleue.svg" alt=""></a></div>
       <div class="circlebtn"  name="grey"><a href="#"><img src="image/PastilleGrise.svg" alt=""></a></div>
   </div>
   <br>
   <a href="#" class="btn" id="drawPolygon">Ajouter Polygone</a>
</div>

<div id="form_polyline" class="formulaire hide">
  <p class="title">Créer une ligne</p>
  <p>Couleur de la ligne</p>
  <div class="row">

   <div class="circlebtn"  name="red"><a href="#"><img src="image/PastilleRouge.svg" alt=""></a></div>
   <div class="circlebtn"  name="green"><a href="#"><img src="image/PastilleVerte.svg" alt=""></a></div>
   <div class="circlebtn"  name="blue"><a href="#"><img src="image/PastilleBleue.svg" alt=""></a></div>
   <div class="circlebtn"  name="grey"><a href="#"><img src="image/PastilleGrise.svg" alt=""></a></div>
</div>
<br>
<a href="#" class="btn" id="drawPolyline">Ajouter Ligne</a>
</div>

</div>
</form>
</div>
</div>
<div class="fin">
  <h1>Vous avez été détecté !</h1>
  <a href="#" class="btn" id="fin">Retourner sur la carte</a>

</div>




<!-- DEBUT UNITÉS -->

<!--MARK Formulaire ajout de bateaux-->
<div id="ajout_bateau" class="pop_up_inv hide">
  <div class="pop_up">
   <div class="formulaire_bat" id="ajout_bateau_inv">
    <p class="title">UNITÉS</p>

    <!--FORMULAIRE POUR DB-->

				<!--<form id="form">
						<label for="vType">Type de v&eacute;hicule</label>
						<select name="vType" id="vType">
							<option value="Bat">Bateau</option>
							<option value="Avi">Avion</option>
							<option value="Hel">Hélicoptère</option>
						</select>
						<br><br>
						<label for="type">Type</label>
						<select name="type_bateau" id="type_bateau">
						</select>
						<br><br>
						<label for="nom">Nom</label>
						<input name="nom" id="nomBat" type="text">
						<br><br>
						<label for="sonar">Sonar</label>
						<select name="radar" id="radar">
							<option value="1">10km</option>
							<option value="2">20km</option>
						</select>
						<br><br>
						<label for="align">Alignement</label>
						<select class="formula" id="color_bateau" name="color_bateau">
							<option value="blue">Allié</option>
							<option value="green">Neutre</option>
							<option value="red">Ennemi</option>
						</select>
						<a type="submit" class="btn" id="drawTrajet">LOL</a>
					</form>-->

                    <div id="contain" style="display:flex; flex-flow: row wrap; justify-content: center ; align-items: center ;margin-top: 10.5%;">
                        <div class="" style="text-align:center; width:33%; position:relative;">
                            <a href="#" onclick="openItem('helicoptere');"><img src="image/helico_2.svg" alt="" height=250px;>
                                <br>Hélicoptères
                            </a>                            
                        </div>

                        <div class="" style="text-align:center; width:33%;  position:relative;">
                            <a href="#" onclick="openItem('bateau');"><img src="image/bateau_2.svg" alt="" height=250px;> 
                                <br>Bateaux
                            </a>                               
                        </div>
                        <div class="" style="text-align:center; width:33%;  position:relative;">
                            <a href="#" onclick="openItem('avion');"><img src="image/avions.svg" alt="" height=250px; width="250px">
                                <br>Avions
                            </a>
                        </div>
                    </div>
                    
                    <div id="contain_avion" class="formulaire hide" >
                        <p class="align">Type d'unité</p><br>
                        <a href="#" onclick="previous('avion');"><img src="image/fleche.svg" alt="" height=50px; width="50px" style="   top: -80px;   position: absolute;    left: 20px;"></a>

                        <div class="choix" name="ATLII" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_ATLII.svg" alt="" class="tagbtn"><br>Atlantique</a>
                        </div>
                        <div class="choix" name="CAP10" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_CAP10.svg" alt="" class="tagbtn"><br>Cap</a>
                        </div>
                        <div class="choix" name="FALCON10" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_FALCON10.svg" alt="" class="tagbtn"><br>Falcon 10</a>
                        </div>
                        <div class="choix" name="FALCON50M" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_FALCON50M.svg" alt="" class="tagbtn"><br>Falcon 50</a>
                        </div>
                        <div class="choix" name="HAWKEYE" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_HAWKEYE.svg" alt="" class="tagbtn"><br>Hawkeye</a>
                        </div>
                        <div class="choix" name="RAFALE" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_RAFALE.svg" alt="" class="tagbtn"><br>Rafale</a>
                        </div>
                        <div class="choix" name="SEM" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_SEM.svg" alt="" class="tagbtn"><br>SEM</a>
                        </div>
                        <div class="choix" name="XINGU" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_XINGU.svg" alt="" class="tagbtn"><br>Xingu</a>
                        </div>
                        <br><br>
                        <div class="row" style="display: inline-flex;">
                            <p>Vitesse du trajet (en noeuds) <input type="text" name="vitesse">
                                Distance du radar (en km) <input type="text" name="presence">
                            </p>
                        </div>
                        <br><br>
                        <div class="row" style="display: inline-flex;">
                            Alignment : 
                            <div class="choixclr" name="blue">
                                <a href="#"><img src="image/alliés.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr" name="green">
                                <a href="#"><img class="choixclr reajust" src="image/neutre.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr" name="red">
                                <a href="#"><img class="choixclr" src="image/ennemi.svg" alt=""  class=tagbtn></a>
                            </div>

                            Description facultatif : <input type="text" name="description">

                        </div>
                        <br><br>
                        <a href="#" class="btn drawTrajet" id="">Ajouter l'unité sélectionnée</a>

                    </div>




                    <div id="contain_bateau" class="formulaire hide">
                        <p class="align">Type d'unité</p><br>
                        <a href="#" onclick="previous('bateau');"><img src="image/fleche.svg" alt="" height=50px; width="50px" style="    top: -80px;    position: absolute;        left: 20px;"></a>

                        <div class="choix" name="BCR" style="display: inline-flex;">
                            <a href="#"><img src="image/BCR.svg" alt="" class="tagbtn"><br>BCR</a>
                        </div>
                        <div class="choix" name="EDA-R" style="display: inline-flex;">
                            <a href="#"><img src="image/EDA-R.svg" alt="" class="tagbtn"><br>EDA-R</a>
                        </div>
                        <div class="choix" name="FDA" style="display: inline-flex;">
                            <a href="#"><img src="image/FDA.svg" alt="" class="tagbtn"><br>FDA</a>
                        </div>
                        <div class="choix" name="FEMM" style="display: inline-flex;">
                            <a href="#"><img src="image/FEMM.svg" alt="" class="tagbtn"><br>FEMM</a>
                        </div>
                        <div class="choix" name="MOYEN_PORTUAIRES" style="display: inline-flex;">
                            <a href="#"><img src="image/MOYEN_PORTUAIRES.svg" alt="" class="tagbtn"><br>Moyen Portuaires</a>
                        </div>
                        <div class="choix" name="P400" style="display: inline-flex;">
                            <a href="#"><img src="image/P400.svg" alt="" class="tagbtn"><br>P400</a>
                        </div>
                        <div class="choix" name="PORTE_AVIONS" style="display: inline-flex;">
                            <a href="#"><img src="image/PORTE_AVIONS.svg" alt="" class="tagbtn"><br>Porte-Avion</a>
                        </div>
                        <div class="choix" name="TCD" style="display: inline-flex;">
                            <a href="#"><img src="image/TCD.svg" alt="" class="tagbtn"><br>TCD</a>
                        </div>
                        <br>
                        <br>
                        <div class="row" style="display: inline-flex;">
                            <p>Vitesse du trajet (en noeuds) <input type="text" name="vitesse">
                                Distance du radar (en km) <input type="text" name="presence">
                            </p>
                        </div>
                        <br>
                        <br>
                        <div class="row" style="display: inline-flex;">
                            Alignment : 
                            <div class="choixclr" name="blue">
                                <a href="#"><img src="image/alliés.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr" name="green">
                                <a href="#"><img class="choixclr reajust" src="image/neutre.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr" name="red">
                                <a href="#"><img class="choixclr" src="image/ennemi.svg" alt=""  class=tagbtn></a>
                            </div>
                            

                            Description facultatif : <input type="text" name="description">

                        </div>
                        <br><br>
                        <a href="#" class="btn drawTrajet" id="">Ajouter l'unité sélectionnée</a>


                    </div>




                    <div id="contain_helicoptere" class="formulaire hide">
                        <p class="align">Type d'unité</p><br>
                        <a href="#" onclick="previous('helicoptere');"><img src="image/fleche.svg" alt=""  height=50px; width="50px" style="        left: 20px;    position: absolute;    top: -80px;"></a>

                        <div class="choix" name="ALOUETTEIII" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_ALOUETTEIII.svg" alt="" class="tagbtn"><br>Alouette III</a>
                        </div>
                        <div class="choix" name="CAIMAN" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_CAIMAN.svg" alt="" class="tagbtn"><br>Caiman</a>
                        </div>
                        <div class="choix" name="DAUPHIN_SP" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_DAUPHIN_SP.svg" alt="" class="tagbtn"><br>Dauphin SP</a>
                        </div>
                        <div class="choix" name="EC225" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_EC225.svg" alt="" class="tagbtn"><br>EC225</a>
                        </div>
                        <div class="choix" name="LYNX" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_LYNX.svg" alt="" class="tagbtn"><br>Lynx</a>
                        </div>
                        <div class="choix" name="PANTHER" style="display: inline-flex;">
                            <a href="#"><img src="image/BTN_PANTHER.svg" alt="" class="tagbtn"><br>Panther</a>
                        </div>
                        <br>
                        <div class="row" style="display: inline-flex;">
                            <p>Vitesse du trajet (en noeuds) <input type="text" name="vitesse">
                                Distance du radar (en km) <input type="text" name="presence">
                            </p>
                        </div>
                        <br>
                        <br>

                        <div class="row" style="display: inline-flex;">
                            Alignment : 
                            <div class="choixclr" name="blue">
                                <a href="#"><img src="image/alliés.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr " name="green">
                                <a href="#"><img class="choixclr reajust" src="image/neutre.svg" alt=""  class=tagbtn></a>
                            </div>
                            <div class="choixclr" name="red">
                                <a href="#"><img class="choixclr" src="image/ennemi.svg" alt=""  class=tagbtn></a>
                            </div>

                            Description facultatif : <input type="text" name="description">

                        </div>
                        <br>
                        <br>
                        <a href="#" class="btn drawTrajet" id="">Ajouter l'unité sélectionnée</a>

                    </div>
					<!-- <label>Type d'unité'</label>
					<select class="formula" id="type_bateau" name="type_bateau">
						<option value="porte-avion">Porte-avion</option>
						<option value="asm">FASM</option>
						<option value="bpc">BPC</option>
						<option value="fs">FS</option>
						<option value="phm">PHM</option>
						<option value="fda">FDA</option>
						<option value="bcr">BCR</option>
						<option value="puma">Helico Puma</option>
						<option value="tigre">Hélico Tigre</option>
						<option value="fennec">Hélico Fennec</option>
						<option value="avion">Mirage F1</option>
						<option value="paquebot">Paquebot Civil</option>
						<option value="cargo">Cargo Civil</option>
						<option value="peche">Bateau de pêche Civil</option>

					</select>
				<label>Vitesse du trajet (en noeud)</label>
				<input class="formula" type="text" id="vitesse_bateau" value="15">

				<label>Distance du radar (en km)</label>
				<input class="formula" type="text" id="radar" value="800">

				<label>Alignement</label>
				<select class="formula" id="color_bateau" name="color_bateau">
						<option value="blue">Allié</option>
						<option value="green">Neutre</option>
						<option value="red">Ennemi</option>
					</select>
					<label>Description (facutatif)</label>
					<textarea class="formula" id="description" name="description"></textarea>
					<a href="#" class="btn" id="drawTrajet">Ajouter Trajet</a> -->


                </div>
            </div>
        </div>

        <!-- FIN UNITÉS -->





        <div class="big_btn">
           <div id="cont">
            <div class="timer">
             <div id="timerbtn">
              <img src="image/play.png" style="position: relative;top: 0px;" id="play" class="btntime">
              <img src="image/pause.png" style="display:none;position: relative;top: 0px;" id="pause" class="btntime">
          </div>

          <div id="timer">


              <span id="days">J-00 / </span>
              <span id="hours">00 :</span>
              <span id="mins">00 :</span>
              <span id="secs">00</span>

          </div>

          <div id="timeSlider">
              <!--Slider Speed-->
              <input class="speed" name="speedSlider" id="slider" type="range" min="1" max="6" step="1" value="1" />
              <div id="timeMulti">x 1</div>
          </div>
      </div>
  </div>
</div>

<img id="boussole" src="image/boussole.png">

<!--MARK MAP DIV-->
<div id="map"></div>

<!--MARK CONSOLE PART1-->
<div id="console">
   <div class="black">
    <p class="reperer">Vous ne devez pas vous faire repérer</p>
    <ul>
    </ul>
</div>
<div id="close_console">
    <p id="notif"></p>
    <img id="close" src="image/close2.png">
    <img id="open" src="image/open.png" style="display: none;">
</div>
</div>

<div id="toolbar">
  <div class="forme"> <img src="image/bateau.png"></div>
  <div class="forme"> <img src="image/forme.png"></div>
  <div class="batiment" id="batiment"> <img src="image/anchor_btn.png"></div>
</div>
<div class="stop">
  <input class="hide" id="editVitesse" placeholder="Votre Vitesse">
  <br>
  <!--Remplacement des icônes de fin d'action-->
  <div class="hide btn_finish forme" id="stopDraw"> <img src="image/check.svg"></div>
  <div class="hide btn_finish forme" id="stopDrawPolyline"> <img src="image/check.svg"></div>
  <div class="hide btn_finish forme" id="stopDrawCircle"> <img src="image/check.svg"></div>
  <div class="hide btn_finish forme" id="stopEditPolyline"> <img src="image/check.svg"></div>
  <div class="hide btn_finish forme" id="stopDrawTrajet"> <img src="image/check.svg"></div>
</div>

<!--MARK: SIDEBAR BTN-->
<button id="sidebar-btn" class="sidebar-btn">
	<img id="menu-stripes1" src="image/menu.svg">
</button>

<section id="sidebar" class="sidebar">
  <div class="settings">

     <div class="btn_retourhome">
        <a href="index.php"> Retour au menu </a>
    </div>

    <h1 class="parametre">Paramètres</h1>

    <div class="onglets">

        <span class="onglet_0 onglet" id="onglet_options" onclick="javascript:change_onglet('options');">Options</span>
        <span class="onglet_0 onglet" id="onglet_suppression" onclick="javascript:change_onglet('suppression');">Suppression</span>
    </div>

			<!--<button id="onglet-btn" class="onglet1-btn onglet-btn active">
				<h2>Filtres</h2>
			</button>
			<button id="onglet-btn" class="onglet2-btn onglet-btn inactive">
				<h2>Suppression</h2>
			</button>-->
			<!--<div class="onglet1 is-open">-->

			<div class="contenu_onglet" id="contenu_onglet_options">
				<div class="options-cont">
					<h3 class="filtres_title">Filtres des éléments natifs</h3>
					<div class="bouton  filtres">
						<input class="checkbox" id="checkbox1" type="checkbox" checked="true">
						<label id="profondeur" for="checkbox1"></label>
						<span class="options">Profondeurs</span>
					</div>

					<div class="bouton">
						<input class="checkbox" id="checkbox2" type="checkbox" checked="true">
						<label id="riv" for="checkbox2"></label>
						<span class="options">Côtes & rivières</span>
					</div>

					<div class="bouton">
						<input class="checkbox" id="checkbox3" type="checkbox" checked="true">
						<label id="structures" for="checkbox3"></label>
						<span class="options">Bâtiments</span>
					</div>

				</div>
				<div>
					<form class="sauvegarde" action='sauveguarde.php' id='myform'>

						<?php
						if(isset($_GET['id']) && ($_GET['id'] !=null)){
							include 'db.php';

							$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
							$sql = "SELECT id, mapName, mapDescription, cercles, polygs, texts, polyls, batis, bateaux FROM save_marine_table";
							$result = $conn->query($sql);

							while($row = $result->fetch_assoc()) {
								if($row["id"] == $_GET["id"]){
									echo '<h3 class="sauvegarde_title" style="color:black">Carte actuelle :</h3>
									<p style="color:black;text-align:center">'.$row["mapName"].'</p>
									<input name="idUpdate" type="hidden" value="'.$row["id"].'">
									<button id="insert2" name="update" class="save2" >Ecraser la sauvegarde</button>';
								}
							}
						}
						?>

                     <h3 class="sauvegarde_title">Sauvegardez une nouvelle carte</h3>
                     `
                     <input class="formula" type="text" name="mapName" placeholder="Nom de la carte">
                     <textarea class="formula" name="mapDescription" placeholder="Description de la carte"></textarea>
                     <input type="hidden" id="cer" name="cercles">
                     <input type="hidden" id="polyg" name="polygs">
                     <input type="hidden" id="text" name="texts">
                     <input type="hidden" id="polyl" name="polyls">
                     <input type="hidden" id="bati" name="batis">
                     <input type="hidden" id="bateau_save" name="bateau_save">
                     <button class="save" name="save" id='insert'>Sauvegarder</button>

                 </form>
             </div>

             <div class="simulation">
               <a href="#" class="btn_simulation" id="simulation">Arreter la simulation</a>
               <a href="#" class="btn_admin" id="admin">Lancer la simulation</a>
           </div>
       </div>


       <!-- <div class="onglet2 is-closed" style="background-color: #2C3E50;"> -->
       <div class="contenu_onglet" id="contenu_onglet_suppression">

        <div class="delete" style="position: relative;">

           <div class="delete_batiment" style="color: white;">
              <div class="share-wrap">
                 <div class="main-bar5 main-bar" style="color: #2C3E50;">Bâtiment(s)<span><img src="image/dropdown-bas%20suppression.png"/></span></div>

                 <ul class="batiments">


                    <p class="delete_batiment_p"></p>
                </ul>
            </div>
        </div>

        <div class="delete_polyline" style="color: white;">
          <div class="share-wrap">
             <div class="main-bar1 main-bar" style="color: #2C3E50;">Ligne(s)<span><img src="image/dropdown-bas%20suppression.png"/></span></div>

             <ul class="lignes">


                <p class="delete_polyline_p"></p>
            </ul>
        </div>
    </div>

    <div class="delete_cercle">
      <div class="share-wrap">
         <div class="main-bar2 main-bar" style="color: #2C3E50;">Cercle(s)<span><img src="image/dropdown-bas%20suppression.png"/></span></div>
         <ul class="cercle">

            <p class="delete_cercle_p"></p>
        </ul>
    </div>
</div>


<div class="delete_texte">
  <div class="share-wrap">
     <div class="main-bar3 main-bar" style="color: #2C3E50;">Texte(s)<span><img src="image/dropdown-bas%20suppression.png"/></span></div>
     <ul class="texte">

        <p class="delete_texte_p"></p>
    </ul>
</div>
</div>


<div class="delete_polygone">
  <div class="share-wrap">
     <div class="main-bar4 main-bar" style="color: #2C3E50;">Polygone(s)<span><img src="image/dropdown-bas%20suppression.png"/></span></div>
     <ul class="polygone">

        <p class="delete_polygone_p"></p>
    </ul>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    var anc_onglet = 'options';
    change_onglet(anc_onglet);

</script>

</div>



</section>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/leaflet-src.js"></script>
<script type="text/javascript" src="js/icone.js"></script>
<script type="text/javascript" src="js/map.js" charset="UTF-8"></script>
<script src='js/coord.js'></script>
<script type="text/javascript" src="js/function.js"></script>

<script type="text/javascript" src="js/onglet.js"></script>

	<!--
	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
-->

<script src="js/slider.js"></script>

<script src='js/sauveguarde.js'></script>
<!--	<script src="js/sendData.js"></script>-->

<?php include 'load.php' ?>

<!-- Script rotation menu -->
<script>
    var angle = 0;

    interact('#control-container').gesturable({
       onmove: function (event) {
           var menu = document.getElementById('control-container');

           angle += event.da;

           menu.style.webkitTransform =
           menu.style.transform =
           'rotate(' + angle + 'deg)';
       }
   });
</script>

<!-- Script drag menu -->
<script>
// target elements with the "draggable" class
interact('.control-container')
.draggable({
// enable inertial throwing
inertia: {
	resistance: 4,
	minSpeed: 500,
	endSpeed: 200,
},
	// keep the element within the area of it's parent
	restrict: {

       restriction: "parent",
       endOnly: true,
       elementRect: { top: 0, left: 0, bottom: 1, right: 1 }},

// enable autoScroll
autoScroll: true,

// call this function on every dragmove event
onmove: dragMoveListener,
// call this function on every dragend event
});

function dragMoveListener (event) {
    var target = event.target,
// keep the dragged position in the data-x/data-y attributes
x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

// translate the element
target.style.webkitTransform =
target.style.transform =
'translate(' + x + 'px, ' + y + 'px)';

// update the posiion attributes
target.setAttribute('data-x', x);
target.setAttribute('data-y', y);
}

// this is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener;
</script>

<!-- MENU RADIAL -->

<div id="control-container" class="container control-container hideadmin">
  <!-- Top Navigation -->
  <div class="component" id="component">
     <!-- Start Nav Structure -->
     <button class="cn-button" id="cn-button">+</button>
     <div class="cn-wrapper" id="cn-wrapper">
        <ul>
           <li><a href="#" onclick="openPopUp('bateau');"><span class="icon-beateaux"> <img src="image/Aj_bateaux.png"></span></a></li>
           <li id="forme"><a href="#" onclick="openPopUp('pins');"><span class="icon-formes"><img src="image/Aj_formes.png"></span></a></li>
           <li><a href="#" onclick="openPopUp('batiment');"><span class="icon-batiments"></span><img src="image/Aj_batiments.png" id="imgbat"></a></li>
           <li><a href="#" onclick="openPopUp('chatbox')"><span ><img src="image/chatbox.png"></span></a></li>
           <li><a href="index.php"><span class="icon-exit"><img src="image/exit.png"></span></a></li>
           <li><a href="#"><span class="icon-parametres"><img src="image/parametres.png"></span></a></li>
       </ul>
   </div>

   <div id="cn-overlay" class="cn-overlay"></div>
   <!-- End Nav Structure -->
</div>
</div>

<!-- /container -->
<script src="js/polyfills.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/demo1.js"></script>

<!-- CHAT -->
<script src="js/chat.js"></script>
<script>

	<div id="control-container" class="container control-container hideadmin" data-x="1500" data-y="795" style="transform: translate(1500px, 900px);">
		<!-- Top Navigation -->
		<div class="component" id="component">
			<!-- Start Nav Structure -->
			<button class="cn-button opened" id="cn-button">+</button>
			<div class="cn-wrapper" id="cn-wrapper">
				<ul>
					<li><a href="#" onclick="openPopUp('bateau');"><span class="icon-beateaux"> <img src="image/Aj_bateaux.png"></span></a></li>
					<li id="forme"><a href="#" onclick="openPopUp('pins');"><span class="icon-formes"><img src="image/Aj_formes.png"></span></a></li>
					<li><a href="#" onclick="openPopUp('batiment');"><span class="icon-batiments"></span><img src="image/Aj_batiments.png" id="imgbat"></a></li>
					<li><a href="#" onclick="openPopUp('chatbox')"><span ><img src="image/chatbox.png"></span></a></li>
					<li><a href="index.php"><span class="icon-exit"><img src="image/exit.png"></span></a></li>
					<li><a href="#"><span class="icon-parametres"><img src="image/parametres.png"></span></a></li>
				</ul>
			</div>
			<div id="cn-overlay" class="on-overlay cn-overlay"></div>
			<!-- End Nav Structure -->
		</div>
	</div>

	<!-- /container -->
	<script src="js/polyfills.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/demo1.js"></script>

	<!-- CHAT -->
	<script src="js/chat.js"></script>
	<script>

		// ask user for name with popup prompt
		var name = prompt("Veuillez entrer un pseudonyme :", "Formateur");
		if(name != "Formateur"){
            $(".hideadmin").css("display","none");
            $(".leaflet-control-zoom").css("left","910px");
        }
		// default name is 'Guest'
		if (!name || name === ' ') {
			name = "Soldat";
		}

		// strip tags
		name = name.replace(/(<([^>]+)>)/ig, "");

		// display name on page
		$("#name-area").html("Vous êtes : <span>" + name + "</span>");

		// kick off chat
		var chat = new Chat();

		$(function() {

			chat.getState();

			// watch textarea for key presses
			$("#sendie").keydown(function(event) {

				var key = event.which;

				//all keys including return.
				if (key >= 33) {

					var maxLength = $(this).attr("maxlength");
					var length = this.value.length;

					// don't allow new content if length is maxed out
					if (length >= maxLength) {
						event.preventDefault();
					}
				}
			});

			$("#send").click(function(e) {
				var text = $("#sendie").val();
				var maxLength = $("#sendie").attr("maxlength");
				var length = text.length;

				// send
				if (length <= maxLength + 1) {
					chat.send(text, name);
					$("#sendie").val("");
				} else {
					$("#sendie").val(text.substring(0, maxLength));
				}
			});

			// watch textarea for release of key press
			$('#sendie').keyup(function(e) {

				if (e.keyCode == 13) {

					var text = $(this).val();
					var maxLength = $(this).attr("maxlength");
					var length = text.length;

					// send
					if (length <= maxLength + 1) {

						chat.send(text, name);
						$(this).val("");

					} else {

						$(this).val(text.substring(0, maxLength));

					}


				}
			});

		});


      $('.batibtn').on('click',function(){
        $('.batibtn').removeClass('selected2');
        $(this).addClass('selected2');
    });
      $('.circlebtn').on('click',function(){
        $('.circlebtn').removeClass('selected3');
        $(this).addClass('selected3');
    });
      $('.choix').on('click',function(){
        $('.choix').removeClass('selected2');
        $(this).addClass('selected2');
    });
      $('.choixclr').on('click',function(){
        $('.choixclr').removeClass('selected4');
        $(this).addClass('selected4');
    });
</script>

</body>

</html>
