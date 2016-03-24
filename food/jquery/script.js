$(document).ready(function(){
	//Popup de acesso.
	$("#menu #acesso").click(function(){
		$(".black").fadeIn();
		$(".acesso").fadeIn();
	});
	$(".black").click(function(){
		$(".black").fadeOut();
		$(".acesso").fadeOut();
	});


	var touch = Modernizr.touch;
	$('.img-holder').imageScroll({
	  imageAttribute: (touch === true) ? 'image-mobile' : 'image',
	  touch: touch
	});

});