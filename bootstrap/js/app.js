// $("#nav_head").css('color','orange');
$("#all_teacher").mouseover(function(){
	$(".thumbnail").css('box-shadow', '6px 6px 6px 6px lightgray');
	// $(".thumbnail").css('background-color', '#0099CC');
	// alert('hi');
});
$("#all_teacher").mouseout(function(){
	$(".thumbnail").css('box-shadow', '0px 0px 0px 0px white');
	$(".thumbnail").css('background-color', 'white');
	// alert('hi');
});

$(".aside").css('background-color', '#0099CC');
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
$("#edit_link").mouseover(function(){
	// alert('sure toedit ?')
	$(".teachers_form").css('box-shadow', '6px 6px 6px 6px lightgray');
	$("#fname").focus();
	// $(".teachers_form").css('border', 'solid #0099CC');

	// setInterval("blink_teachers_form()",2000);
	});
$("#edit_link").mouseout(function(){
	$(".teachers_form").css('box-shadow','0px 0px white');
	$("#fname").blur();
	// $(".teachers_form").css('border', 'none');


	});
$("#send_message").click(function(){
	$("#send_message").text('Message Sent!');
	$("#send_message").css('cursor', 'pointer');
	// alert('hi');
})




