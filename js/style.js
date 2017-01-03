$(document).ready(function() {
  $('#tabs').find('h4').click(function() {

    $('#tabs').find('.tab').removeClass('active');
    $(this).parent().addClass('active');

  });

  $('form.form-submit').submit(function() {
  	var email = $.trim($("input[name='email']").val());;
  	    password = $.trim($("input[name='password']").val());;
  	    e_error = $('#emailerror');
  	    p_error = $('#passworderror')

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

  $('div.post, .read span:last-child').hide();
  $('p.read').click(function() {

    $(this).siblings('div.post').slideToggle('400');
    $(this).children('span:first-child, span:last-child').toggle();

  });

  $("#spelling").typed({

    strings: [
              "smart <span class='fa fa-times' style='color:#0099FF'></span>",
              "Smart <span class='fa fa-check' style='color:#0099FF'></span>"
              ],
    typeSpeed: 400,
    backDelay: 2000,
    loop: true

  });

  $(window).scroll(function () {

    var windowScrollTop = $(window).scrollTop();
        navBar = $("nav#press-nav");

    if (windowScrollTop <= 1270) {
      navBar.stop().animate({

        marginTop: windowScrollTop

      }, 300);
      
    };
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

	});