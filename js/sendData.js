/*---Save Vehicule on form submit---*/

$('#drawTrajet').on('click', function () {
	event.preventDefault();
	console.log('Submitted');
	data = 'func=sendData&' + $("#form").serialize(); //Use sendData() and serialize form

	//console.log(data);

	$.ajax({
		type: 'GET',
		url: 'database.php',
		data: data
	}).done(function (msg) {
		console.log('RESULT : ' + msg);
	});
});

/*---Get vehicules types on vehicule change---*/

$('#vType').change(function () {
	$('#type_bateau').empty();
	type = $(this).val();
	data = 'func=askType&vType=' + type;
	$.ajax({
		type: 'GET',
		url: 'database.php',
		data: data
	}).done(function (msg) { //msg = php response
		result = msg.split(';');
		console.log(result);
		var option = document.createElement("option");

		for (i = 0; i < result.length - 1; i++) {
			value = result[i].toLowerCase();
			spaces = 0;
			for (j = 0; j < value.length; j++){
				if (value[j] == ' '){
					spaces++;
				}
			}
			while (spaces > 0) {
				value = value.replace(' ', '_');
				spaces--;
			}
			console.log(value);
			$('#type_bateau').append($('<option>', {
				value: i + 1,
				text: result[i]
			}));
		}
	});
});
