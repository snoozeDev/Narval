var el, newPoint, newPlace, offset;

// Select all range inputs, watch for change
$(".speed").change(function () {

		// Cache this for efficiency
		el = $(this);

		var elValue = 0;

		var speed1 = el.val();
		if (speed1 == 1) {
			elValue = 1;
		} else if (speed1 == 2) {
			elValue = 3;
		} else if (speed1 == 3) {
			elValue = 5;
		} else if (speed1 == 4) {
			elValue = 10;
		} else if (speed1 == 5) {
			elValue = 50;
		} else if (speed1 == 6) {
			elValue = 100;
		}


		// Measure width of range input
		width = el.width();

		// Figure out placement percentage between left and right of input
		newPoint = (elValue - el.attr("min")) / (el.attr("max") - el.attr("min"));

		offset = -1;

		// Prevent bubble from going beyond left or right (unsupported browsers)
		if (newPoint < 0) {
			newPlace = 0;
		} else if (newPoint > 1) {
			newPlace = width;
		} else {
			newPlace = width * newPoint + offset;
			offset -= newPoint;
		}

		// Move bubble
		el
			.next("output")
			.css({
				left: newPlace,
				marginLeft: offset + "%"
			})
			.text(" x " + elValue);
	})
	// Fake a change to position bubble at page load
	.trigger('change');
