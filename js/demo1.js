(function () {

	var button = document.getElementById('cn-button'),
		wrapper = document.getElementById('cn-wrapper'),
		overlay = document.getElementById('cn-overlay'),
		container = document.getElementById('control-container'),
		map = document.getElementById('map');

	//open and close menu when the button is clicked
	var open = false;
	map.addEventListener("mousedown", handler, false);
	wrapper.addEventListener("mouseup", cnhandle, false);

	function cnhandle(e) {
		e.stopPropagation();
	}

	function handler(e) {
		if (!e) var e = window.event;
		e.stopPropagation(); //so that it doesn't trigger click event on document
		if (!open) {
			openNav();
		} else {
			closeNav();
		}
	}

	function openNav() {
		open = true;
		button.innerHTML = "-";

//		container.style.left = event.clientX - 40 + "px";
//		container.style.top = event.clientY - 40 + "px";

		console.log("new pos : x = " + event.clientX + "& y = " + event.clientY);

		classie.add(overlay, 'on-overlay');
		classie.add(wrapper, 'opened-nav');
		classie.add(button, 'opened');
	}

	function closeNav() {
		open = false;
		button.innerHTML = "+";
		classie.remove(overlay, 'on-overlay');
		classie.remove(wrapper, 'opened-nav');
		classie.remove(button, 'opened');
	}
	document.addEventListener('mousedown', closeNav);

})();
