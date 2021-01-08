//Check off

$("ul").on("click", "li", function() {
    //is the li gray
    $(this).toggleClass("completed");
});


// fade out the add list
// $(".fa-plus").click(function() {
//     $("input[type='text']").fadeToggle();
// });


$(".another").click(function(){
	$("input[type='text']").fadeToggle();
});


//click on X to delete

$("ul").on("click","span", function(e) {
    $(this).parent().fadeOut(500, function(){
        $(this).remove();
    });
    event.stopPropagation();
});

//adda toDo 

$("input[type='text']").keypress(function(event){
    if(event.which === 13) {
        var todoText = $(this).val();
        $(this).val("");
        $("ul").append("<li><span><i class='fas fa-trash-alt'></i></span> " + todoText + "</li>");
        console.log(todoText);
    }
});

