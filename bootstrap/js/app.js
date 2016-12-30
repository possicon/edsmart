$(".block1").mouseover(function(){
	$("#b1_hover").slideIn('slow');
});
$("#b1_hover").mouseout(function(){
	$("#b1_hover").slideUp('slow');

});
$("#active_link").mouseover(function(){
	$(".teachers_form").css('box-shadow', '6px 6px 6px 6px lightgray');
	$("#fname").focus();
	// $(".teachers_form").css('border', 'solid #0099CC');

	// setInterval("blink_teachers_form()",2000);
	});
$("#active_link").mouseout(function(){
	$(".teachers_form").css('box-shadow','0px 0px white');
	$("#fname").blur();
	// $(".teachers_form").css('border', 'none');


	});




