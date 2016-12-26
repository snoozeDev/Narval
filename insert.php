<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>

<body>
	<form id="form">
	<label for="vType">Type de v&eacute;hicule</label>
	<select name="vType" id="vType">
		<option value="Bat">Bateau</option>
		<option value="Avi">Avion</option>
		<option value="Hel">Helicopter</option>
	</select>
	<br><br>
	<label for="type">Type</label>
	<select name="type" id="type">
	</select>
	<br><br>
	<label for="nomBat">Nom</label>
	<input name="nomBat" id="nomBat" type="text">
	<br><br>
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
