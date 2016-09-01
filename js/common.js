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
