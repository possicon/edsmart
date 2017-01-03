var full_day = new Date();
	var day = full_day.getDay();
	

		switch(day){
			case 0: store = 'Sunday';
				break;
			case 1: store = 'Monday';
				break;
			case 2: store = 'Tuesday';
				break;
			case 3: store = 'Wednesday';
				break;
			case 4: store = 'Thursday';
				break;
			case 5: store = 'Friday';
				break;
			case 6: store = 'Saturday';
				break;
			default: alert('Couldnt get todays date')
		}
$("#date").css('color', 'red')
$("#student_name").css('color', 'red')
$("#date").text(store)

// alert("date is :"+store);


// alert(day.getDay());
$("#onsave").hide();
$("#onok").hide();
$("#success").hide();
$("#label_content").hide();
$("#preview").click(function(){
	$("#preview").hide();
	$("#onsave").show();
	$("#label_content").show();
	$("#input_content").hide();
});

$("#onsave").click(function(){
	$("#preview").hide();
	$("#onsave").hide();
	$("#label_content").hide();
	$("#input_content").hide();
	$("#onok").show();
	$("#success").show();
	$("#c_name").hide();
	$("#c_code").hide();
});


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
	var teacher_mail = $("#input_mail").val();
	alert('Mail Successfully Sent to jjjj'+ teacher_mail);
	// alert('hi');
})




