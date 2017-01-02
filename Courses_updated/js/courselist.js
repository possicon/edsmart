//$("#submit_button").click(function(){
//    if(!alert("You have successfully added a course")) document.location = 'file:///C:/Users/Onyinye/Desktop/SwitchSchool/viewCourses.html';
//});
//    alert('You have successfully added a course');
//    window.location = 'file:///C:/Users/Onyinye/Desktop/SwitchSchool/viewCourses.html


//btn btn-primary
//
//function deletePost() {
//    var undo = window.confirm("Are you sure you want to delete this course?");
//    if (undo) {
//        window.alert("This course was successfully deleted.");
//
//        document.location.href = "viewCourses.html";
//    }
//}


$("#success").hide();
$("#ok").hide();
$("#yes").click(function(){
   $("#success").show(); 
      $("#ok").show();
    $("#confirm").hide();
    $("#yes").hide();
    $("#no").hide();
    
});

$("#second").hide();
$("#okay").hide();
$("#yez").click(function(){
    $("#second").show();
    $("#okay").show();
    $("#first").hide();
    $("#yez").hide();
    $("#delete_no").hide();
})