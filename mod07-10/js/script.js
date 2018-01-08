// alert("jQuery is working!");

// http://wesbos.com/animate-css-and-jquery/

$("ul").on("click", "li", function() {
// $("li").click(function() {
	// $(this).css("text-decoration", "line-through");
	// $(this).css("color", "grey");

	$(this).toggleClass("completed");
	// $(this).addClass("animated fadeOutRight")

});

$("ul").on("click", "span", function() {
// $("span").click(function(){
	$(this).parent().fadeOut(500, function(){
		$(this).remove();
	});
});

$("input[type='text']").keypress(function(event){
	
	// console.log(event.which);
	
	if(event.which === 13) { /*13==enter key*/
		var todoText = $(this).val();
		$("ul").append("<li><span><i class='fa fa-trash' aria-hidden='true'></i></span>" + todoText + "</li>");
		$(this).val("");
	}
});