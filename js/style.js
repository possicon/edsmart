$(document).ready(function() {
  $('#tabs').find('h4').on('click', function() {
    $('#tabs').find('.tab').removeClass('active');
    $(this).parent(section).addClass('active');
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