/*var bateaux = []; //tableau de tous les bateaux
 //edit de bateaux
 function editbateau(bat){
 addEventListener('click', function(){
 console.log("bien jouÃƒÆ’Ã‚Â©"+bat);
 $('#stopEditPolyline').css('display','block');

 bateau[bat]=moveTo([3,3], 20000);
 console.log(bateau[bat]);
 //currentPolyline = new L.polyline([]).addTo(map);
 //map.on('click', editLatLngToPolyline); //Listen for clicks on map.*/
/*
 });

 }

 function editLatLngToPolyline(clickEventData){
 //console.log(clickEventData);
 //console.log(clickEventData.latlng.lat)
 currentPolyline.addLatLng(clickEventData.latlng);

 }
 stopEditTrajet.addEventListener('click', function(){
 map.off('click', editLatLngToPolyline); //Stop listening for clicks on map.
 });
 */



var sidebar = (function () {
	"use strict";

	var $contnet = $('#content'),
		$sidebar = $('#sidebar'),
		$sidebarBtn = $('#parambtn'),
		$toggleCol = $('body').add($contnet).add($sidebarBtn),
		sidebarIsVisible = false;

	$sidebarBtn.on('click', function () {

		if (!sidebarIsVisible) {
			bindContent();
		} else {
			unbindContent();
		}

		toggleMenu();
	});


	function bindContent() {

		$contnet.on('click', function () {
			toggleMenu();
			unbindContent();
		});
	}

	function unbindContent() {
		$contnet.unbind();
	}

	function toggleMenu() {


		$toggleCol.toggleClass('sidebar-show');
		$sidebar.toggleClass('show');

		var image = document.getElementById('menu-stripes1');

		var timer = document.getElementById('timer');
		var layerControl = document.getElementsByClassName('leaflet-control-layers');

		if (!sidebarIsVisible) {
			console.log(layerControl);
			image.src = "image/cancel.svg";
			image.style = "width:50%";
			timer.style = "right:310px";
			layerControl[0].className += ' layerControl-right';
			//TODO [x]move Layer.Control when sidebar is open
			sidebarIsVisible = true;
		} else {
			image.src = "image/menu.svg";
			timer.style = "right:90px";
			image.style = "width:100%";
			layerControl[0].className = layerControl[0].className.replace( /(?:^|\s)layerControl-right(?!\S)/g , '' )
			sidebarIsVisible = false;
		}
	}


	var $menuToggle = $sidebar.find('.menu-toggle');

	$menuToggle.each(function () {

		var $this = $(this),
			$submenuBtn = $this.children('.menu-toggle-btns').find('.menu-btn'),
			$submenu = $this.children('.submenu');

		$submenuBtn.on('click', function (e) {
			e.preventDefault();
			$submenu.slideToggle();
			$(this).toggleClass('active');
		});
	});

})();

$(document).ready(function (e) {
	$('.main-bar1').on('click', function () {
		$('ul.lignes').slideToggle(120);
	});
})
$(document).ready(function (e) {
	$('.main-bar5').on('click', function () {
		$('ul.batiments').slideToggle(120);
	});
})
$(document).ready(function (e) {
	$('.main-bar2').on('click', function () {
		$('ul.cercle').slideToggle(120);
	});
})
$(document).ready(function (e) {
	$('.main-bar3').on('click', function () {
		$('ul.texte').slideToggle(120);
	});
})
$(document).ready(function (e) {
	$('.main-bar4').on('click', function () {
		$('ul.polygone').slideToggle(120);
	});
})



var doubleclique = 0;

function delete_obj(elem, form) {
	var typeOfForm = elem.replace(/[0-9]/g, '');
	var tableau = eval(typeOfForm);
	var increment = eval(elem.replace(/\D/g, ''));
	console.log(typeOfForm);

	if ($('.' + elem).css('display') == 'none') {
		$('.' + elem).css('display', 'block');
		$('.' + elem).css({
			'animation-name': '',
			'animation-duration': '',
			'animation-delay': '',
			'animation-iteration-count': ''
		});



		$('#' + elem).html('<div class="margepolyline">cacher ' + form + ' </div><div class="oeilvert"><div class=" yeux vert"></div></div>');
	} else {

		if (doubleclique == 0) {
			doubleclique = 1;
			$('.' + elem).css({
				'animation-name': 'animation',
				'animation-duration': '1s',
				'animation-delay': '2s',
				'animation-iteration-count': 'infinite'
			});

			$('#' + elem).html('<img src="image/validationsuppression.png"/> '); //mettre image valider
			$('#' + elem).append('<img src="image/supprsuppression.png" onclick="doubleclique=2;" />'); //mettre image suppression

		} else if (doubleclique == 1) {
			$('.' + elem).removeClass('anim');
			$('.' + elem).css('display', 'none');
			$('#' + elem).html('<div class="margepolyline">remettre ' + form + '</div><div class="oeilvert"><div class=" yeux rouge"></div></div>'); //mettre oeil rouge
			tableau[increment].visible = 0;
			doubleclique = 0;
		}


		if (doubleclique == 2) {
			$('.' + elem).css('display', 'block');
			$('.' + elem).css({
				'animation-name': '',
				'animation-duration': '',
				'animation-delay': '',
				'animation-iteration-count': ''
			});
			$('#' + elem).html('<div class="margepolyline">cacher ' + form + '</div><div class="oeilvert"><div class=" yeux vert"></div></div>');
			doubleclique = 0;
			tableau[increment].visible = 1;
		}
	}
}

$("#simulation").hide();
$('#console').hide();
$('#notif').hide();
$('#close_console').show();
/*    mode simulation ou non   */
$("#admin").click(function () { // on lance la simulation donc on montre la console, on cache les bateaux ennemis
	$("#simulation").show();
	$('.cercle-radar').show();
	$('#console').show();
	$('#console').css('z-index', "1000");
	$("#admin").hide();
	$('.red').css("display", "none");

	$('.rred2').hide();
});
$("#simulation").click(function () { // on repasse en mode admin
	$("#simulation").hide();
	$('.cercle-radar').hide();
	$("#admin").show();
	$('.red').css("display", "block");
	$('.rred2').show();
	$('#console').hide();
	$('#console').css('display', "none");

});

var console_message = 0;
$('#close_console').click(function () {
	if (console_message == 0) {
		notif = 0;
		$('.black').css('height', "0");
		$('#close_console').css('height', "61");
		$('#console').css('height', "70");
		$('#notif').show();
		$('#close').hide();
		$('#open').show();
		console_message = 1;

	} else {
		notif = 0;
		$('.black').css('height', "80%");
		$('#close_console').css('height', "61");
		$('#console').css('height', "33%");
		$('#notif').hide();
		$('#close').show();
		$('#open').hide();
		console_message = 0;

	}

});
// TODO: [x]CHANGER LES PNGs EN SVGs
/*  fonction changement image icone    */
$('#icone_select').change(function () {
	var ico = "image/" + $('#icone_select').val() + ".svg";
	$("#icone_img").attr("src", ico);
});
