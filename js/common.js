$(document).on("click", ".btn-menu", function(){
	$('.wrap-sidebar').addClass('on');
	$('.cover').fadeIn(400);
	return false;
});

$(document).on("click", ".cover", function(){
	$('.wrap-sidebar').removeClass('on');
	$('.cover').fadeOut(400);
	return false;
});



$(document).on("click", ".li-ai", function(){
	$('.wrap-ai').addClass('on');
	return false;
});


$(document).on("click", ".btn-close-ai", function(){
	$('.wrap-ai').removeClass('on');
	return false;
});

$(function(){
  	$('#calendar').bxSlider();
  	$('.date').pickmeup({
	  	format  : 'Y-m-d'
	});
});
 