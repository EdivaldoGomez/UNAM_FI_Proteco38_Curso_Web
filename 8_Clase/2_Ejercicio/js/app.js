$(document).ready(function(){
    $('.sidenav').sidenav();
  });
$("#fadeOut").click(function(){
	$("#circle").fadeOut(1000);
});

$("#slide").click(function(){
	$("#contenido").slideDown();
});

$("#slide2").click(function(){
	$("#contenido2").slideUp(1500);
});

$("#circulo").click(function(){
	$(".circle").animate({
		right: "50px";
	})
});
