// 사이드바 오픈
$(document).on("click", ".btn-menu", function(){
	$('.wrap-sidebar').addClass('on');
	$('.cover').fadeIn(400);
	return false;
});

// 사이드바 클로즈
$(document).on("click", ".cover", function(){
	$('.wrap-sidebar').removeClass('on');
	$('.cover').fadeOut(400);
	return false;
});


// AI함 오픈
$(document).on("click", ".li-ai", function(){
	$('.wrap-ai').addClass('on');
	$('.cover').fadeIn(400);
	return false;
});

// AI함 클로즈
$(document).on("click", ".btn-close-ai", function(){
	$('.wrap-ai').removeClass('on');
	$('.cover').fadeOut(400);
	return false;
});

// AI 삭제
$(document).on("click", ".li-task-delete", function(){

	var $this = $(this);
	var toDelete = $('.wrap-ai input[type=checkbox]:checked');
	var deletedTaskCount = toDelete.length;

	if (deletedTaskCount && !$this.hasClass('active')) {
		
		var toDelete = $('.wrap-ai input[type=checkbox]:checked');
		var newDeletedTaskCount = toDelete.length;
		var deletedTask = toDelete.closest('.li-taskdata');

		$this.addClass('active');

		if (newDeletedTaskCount != deletedTaskCount) {
			$('.wrap-ai .deleted-task').remove();	
		}

		setTimeout(function(){
			$this.removeClass('active');
		},400);

		deletedTask.removeClass('easing').slideUp(300).addClass('deleted-task');
		$('.wrap-ai .txt-notice .count').text(newDeletedTaskCount);
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

// AI 확정
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

$(function(){
	var i = 1;
	var j = 0;
	var i2 = 1;
	var j2 = 0;	
	var _date = new Date();
	var _year = _date.getFullYear();
	var _month = _date.getMonth()+1;

	function calendarSlider(start) {
		var slider = $('#calendar');

		slider.bxSlider({
			pager:false,
			startSlide:start,
			onSlideAfter: function(currentIndex, oldIndex, newIndex) {
				$('.wrap-header h2').text(currentIndex.data('month')+'월');
				
				var length = slider.find('li').length - 3;

				if (newIndex > oldIndex) {
					if (newIndex == length) {
						// 다음달 불러오기
						i++;

						$.ajax({
							type: 'get',
							url: '_calendar.php',
							data: {
								year: _year,
								month: _month+i
							}
						}).done(function (data){
							
							if ((_month+i-1)%12 == 0) j++;

							slider.append('<li class="new"></li>').find('.new').attr('data-month',(_month+i) - (12*j)).html(data).removeClass('new');
							slider.destroySlider();
							calendarSlider(length);
						});
					}
				} else {
					if (newIndex == 0) {
						// 지난달 불러오기	
						i2++;

						$.ajax({
							type: 'get',
							url: '_calendar.php',
							data: {
								year: _year,
								month: _month-i2
							}
						}).done(function (data){
							
							if ((_month-i2)%12 == 0) j2++;

							slider.prepend('<li class="new"></li>').find('.new').attr('data-month',(_month-i2)+(12*j2)).html(data).removeClass('new');
							slider.destroySlider();
							calendarSlider(1);
						});
					}
				}

			}
		});
	}
	
	calendarSlider(1);

	$.ajax({
		type: 'get',
		url: '_calendar.php',
		data: {
			year: _year,
			month: _month
		}
	}).done(function (data){
		$('#calendar .li-current').html(data).removeClass('li-current').attr('data-month',_month);
		$('.wrap-header h2').text(_month+'월');
	});

	$.ajax({
		type: 'get',
		url: '_calendar.php',
		data: {
			year: _year,
			month: _month-1
		}
	}).done(function (data){
		$('#calendar .li-prev').html(data).removeClass('li-prev').attr('data-month',_month-1);
	});

	$.ajax({
		type: 'get',
		url: '_calendar.php',
		data: {
			year: _year,
			month: _month+1
		}
	}).done(function (data){
		$('#calendar .li-next').html(data).removeClass('li-next').attr('data-month',_month+1);
	});


});



