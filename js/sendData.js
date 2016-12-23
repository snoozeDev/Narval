$("formBat").submit(function(event){
	event.preventDefault();

	var $form = $(this);
	var type = document.getElementById('type' + vType).value;
	var nom = document.getElementById('nom' + vType).value;
	var sonar = document.getElementById('sonar' + vType).value;

	console.log('type : ' + type);
	console.log('nom : ' + nom);
	console.log('sonar : ' + sonar);

	xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xmlhttp.status == 200) {
			alert(xhr.responseText);
		}
	};
	xhr.open("GET", "insertToDB.php", $("#form").serialize());
});

//function sendData() {
//	var vType = $("#vType").val();
//	var typeVal = document.getElementById('type' + vType).value;
//	var nomVal = document.getElementById('nom' + vType).value;
//	var sonarVal = document.getElementById('sonar' + vType).value;
//
//	console.log('type : ' + typeVal);
//	console.log('nom : ' + nomVal);
//	console.log('sonar : ' + sonarVal);
//
//	xhr = new XMLHttpRequest();
//
//	xhr.onreadystatechange = function () {
//		if (xhr.readyState == 4 && xmlhttp.status == 200) {
//			alert(xhr.responseText);
//		}
//	};
//	xhr.open("GET", "insertToDB.php", $("#form").serialize());
//}
