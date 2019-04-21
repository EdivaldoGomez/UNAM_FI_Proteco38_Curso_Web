$(function(){
	$(document).keyup(function(tecla){
		if(tecla.keyCode==39){
			$(".mario").animate({
				left: "+=50"},
				function(){$(".mario").stop()
			});
		}

		if(tecla.keyCode==37){
			$(".mario").animate({
				left: "+=50"},
				function(){$(".mario").stop()
			});
		}

		if (tecla.keyCode==90){
			$(".estrella").animate({top:"-=500"});
			$(".estrella").animate({top:"+=500"});
		}
	});
});