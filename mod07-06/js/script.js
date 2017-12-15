// var yourName = "Jeremy";
// var counter = 0;
// var markup = "";

// while(counter < 10) {
// 	markup = markup + "<h1>" + yourName +"</h1>";
// 	counter++;
// }
// console.log(markup);
// document.getElementById("yourMessage").innerHTML = markup;

var expression = "";

function updateDisplay(value){
	
	expression = expression + value;
	document.getElementById("display").innerHTML = expression;
	return expression;
}

function compute(){
	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
	expression = result;
}

function clearDisplay() {
	expression = "";
	document.getElementById("display").innerHTML = "0";
}