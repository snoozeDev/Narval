function sendData(vType) {
	var type = document.getElementById('type' + vType);
	var nom = document.getElementById('nom' + vType);
	var sonar = document.getElementById('sonar' + vType);

	xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xmlhttp.status == 200) {
			alert(xhr.responseText);
		}
	};

}
