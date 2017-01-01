$(document).ready(function() {
  $('#tabs').find('h4').click(function() {
    $('#tabs').find('.tab').removeClass('active');
    $(this).parent().addClass('active');
  });

  $('form.form-submit').submit(function() {
  	var email = $.trim($("input[name='email']").val());;
  	var password = $.trim($("input[name='password']").val());;
  	var e_error = $('#emailerror');
  	var p_error = $('#passworderror')
  	if (email === "") {
  		e_error.html("Please type your email address");
  		return false;
  	} 
  	else {
  		e_error.hide();
  	};

  	if (password === "") {
  		p_error.html("Please type your password");
  		return false;
  	}

  	else {
  		p_error.hide();
  	};

    return true;

  });

	// var trigger = $('.hamburger'),
	//    	isClosed = false;

 //  	trigger.click(function () {
 //    	hamburger_cross();      
 //  	});

 //  	function hamburger_cross() {

 //    	if (isClosed == true) {

 //      		trigger.removeClass('is-open');

 //      		trigger.addClass('is-closed');

 //      		isClosed = false;
 //    	} 
 //    	else {
 //      		trigger.removeClass('is-closed');

 //      		trigger.addClass('is-open');

 //      		isClosed = true;
 //    	}
	// }

	// $('#myTopnav li').hide();
	// $('.hamburger').click(function() {
	// 	$('#myTopnav li').toggle(500);
	// });
	

	// var howMany = 1;
	// $('#more').click(function(){
	//     howMany += 1;
	//     $("#info").text(howMany);
	// });
	// $('#less').click(function(){
	//     howMany -= 1;
	//     $("#info").text(howMany);
	// });
	// $("#info").text(howMany);
});