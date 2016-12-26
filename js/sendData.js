$('#vType').change(function(){
	$('#type').empty();
	type = $(this).val();
	data = 'func=askType&vType='+type;
	$.ajax({
		type: 'GET',
		url: 'database.php',
		data : data
	}).done(function(msg){
		result = msg.split(';');
		console.log(result);
		var option = document.createElement("option");
		for (i=0;i<result.length-1;i++){
			$('#type').append($('<option>',{
				value: i+1,
				text: result[i]
			}));
		}
	});
});

$('#form').on('submit', function(){
	event.preventDefault();
	console.log('Submitted');
	data = 'func=sendData&'+$(this).serialize();
	console.log(data);
	$.ajax({
		type: 'GET',
		url: 'database.php',
		data: data
	}).done(function(msg){
		console.log('Data Saved : '+msg);
	});
});
