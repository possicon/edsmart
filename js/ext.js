/**
 * Created by fucho on 26-Dec-16.
 */

var template = $('.section .question_row:first').clone();
var sectionsCount = 1;

$('body').on('click', '.add_question', function(){
   sectionsCount++; //increase count

   //loop through each input
    var section = template.clone().find(':input').each(function () {
        //set new var id number
        var newId = this.id + sectionsCount;

        //update for label
        $(this).prev().attr('for', newId);

        //update id
        this.id = newId;
    }).end()
        .appendTo('.section');
    return false;
});

//delete entire section
$('.section').on('click', 'a.remove_question', function () {
    //fade section out
    var confirm_delete = confirm("Sure to delete?");
    if(confirm_delete){
        $(this).parent().fadeOut(300, function () {
            $(this).parent().parent().empty();
            return false;
        });
    }
    return false;
});