$("#structures").click(function (){
	if (stru == 0) {
		stru = 1;
	} else {
		stru = 0;
	}
});

if(stru == 1){
	if (map.getZoom() >= 8) {
		$(".phare").css("display", "block");
	} else if (map.getZoom() <= 8) {
		$(".phare").css("display", "none");
		if (map.getZoom() < 2) {
			$(".port").css("display", "none");
		}
	}
}
