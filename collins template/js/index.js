$("#features1").mouseover(function(){
	$("#p_f1").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("slow")
	})
	});
 
 $("#features").mouseover(function(){
	$("#p_f").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("slow")
	})
	});

	$("#features2").mouseover(function(){
	$("#p_f2").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("slow")
	})
	});

	$("#features3").mouseover(function(){
	$("#p_f3").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("slow")
	})
	});

	$("#features4").mouseover(function(){
	$("#p_f4").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("slow")
	})
	});	


	$("#features5").mouseover(function(){
	$("#p_f5").slideDown("slow")
	.mouseout(function(){
		$(this).slideUp("fast")
	})
	});

$(document).ready(function(){
	$("#row1").fadeOut(15000);
	$("#row2").fadeOut(30000);
	$("#row3").fadeOut(45000);

	$("#row1").fadeIn(45000)
	$("#row2").fadeIn(60000)
	$("#row3").fadeIn(75000)

});

	$('.terms').click(function(){
		$('#terms').slideDown();
	});
	$('#t_c').click(function(){
		$('#terms').slideUp();
	})