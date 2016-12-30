$("#save-profile").click(function(){
	var edited_firstname=$("#estudent-firstname").val()
	
	$("#student-firstname").attr("value",edited_firstname)
	var edited_lastname=$("#estudent-lastname").val()
	
	$("#student-lastname").attr("value",edited_lastname)
	var edited_username=$("#estudent-username").val()
	
	$("#student-username").attr("value",edited_username)
	var edited_email=$("#estudent-email").val()
	
	$("#student-email").attr("value",edited_email)
	var edited_password=$("#estudent-password").val()
	
	$("#student-password").attr("value",edited_password)

	var edited_address=$("textarea#estudent-address").val()
	
	$("textarea#student-address").val(edited_address)
	
	
	
})
$("#filo").change(function(){
	var path=$("#filo").val()

	$("#passport-img").attr("src",path)

})
