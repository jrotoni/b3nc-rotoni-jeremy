// $("p").hide(); 
// $(".para-to-hide").hide();
// $("#parawithID").hide();

// function HideThisP() {
// 	$(this).hide();
// }

// $("p").click(HideThisP);

$("#parawithID").hover(function() {
	$(this).html("I am a CHANGED paragraph.");
});

$("p").click(function(){
	// $(this).attr("style", "color:red");
	$(this).attr("align", "center");
	$(this).css("color", "blue");
	$(this).html("I am in the CENTER paragraph.");
});

$(".para-to-hide").click(function(){
	$(this).attr("align", "right");
	$(this).html("I am a RIGHT paragraph.");
});
