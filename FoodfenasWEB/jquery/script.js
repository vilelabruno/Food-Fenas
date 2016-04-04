$(document).ready(function(){
	//Popup de acesso.
	$("#entrar").click(function(){
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
	//Trabalhando com menu responsivo.
	$("#menu_reponsivo").click(function(){
		$("#menuFixo").animate({
			width: "toggle",
		});
		$("#logo").css({"margin-left":"24%"});
	});


$(window).scroll(function(){
	if($(window).scrollTop() < 100)
	{

		$("#topo").fadeOut();
	}else
	{
		$("#topo").fadeIn();
	}
});
$("#topo").click(function(){
	$("html, body").animate({
		scrollTop: "0px"
	});
});


});