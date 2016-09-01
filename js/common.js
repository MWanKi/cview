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
	$('.cover').fadeIn(400);
	return false;
});


$(document).on("click", ".btn-close-ai", function(){
	$('.wrap-ai').removeClass('on');
	$('.cover').fadeOut(400);
	return false;
});

$(document).on("click", ".li-task-delete", function(){

	var toDelete = $('.wrap-ai input[type=checkbox]:checked');
	var deletedTaskCount = toDelete.length;

	if (deletedTaskCount) {
		$('.wrap-ai .deleted-task').remove();
		
		var toDelete = $('.wrap-ai input[type=checkbox]:checked');
		var deletedTaskCount = toDelete.length;
		var deletedTask = toDelete.closest('.li-taskdata');

		deletedTask.removeClass('easing').slideUp(300).addClass('deleted-task');
		$('.wrap-ai .txt-notice .count').text(deletedTaskCount);
		$('.wrap-ai .box-notice').addClass('on');

		$('.wrap-ai .btn-rollback').click(function(){
			deletedTask.slideDown(300).removeClass('deleted-task');
			setTimeout(function(){
				deletedTask.addClass('easing');
			},300);
			$('.wrap-ai .box-notice').removeClass('on');
			return false;
		});	
	}
	
	return false;
});


$(document).on("click", ".li-task-confirm", function(){
	$('.wrap-ai .deleted-task').remove();
	$('.wrap-ai .box-notice').removeClass('on');

	var toConfirm = $('.wrap-ai input[type=checkbox]:checked');
	var confirmedTaskCount = toConfirm.length;
	var confirmedTask = toConfirm.closest('.li-taskdata');

	if (confirmedTaskCount) { 
		confirmedTask.addClass('on');
		setTimeout(function(){
			confirmedTask.removeClass('easing').slideUp(300,function(){
				confirmedTask.remove();
			});
		}, 300);
		
	}

	return false;
});





