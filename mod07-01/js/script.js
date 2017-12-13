function changeMeToNumber() {
	var x = 101;
	document.getElementById("firstVar").innerHTML = x;
	document.getElementById("firstVar").style.color = "red";
	document.getElementsByClassName("wrapper").style.backgroundColor = "blue";
}


var name = "Juan Dela Cruz";
var message = "Welcome to JavaScript programming!!!";


function add() {
	document.getElementById("result").innerHTML = parseInt(document.getElementById("var1").value)+ parseInt(document.getElementById("var2").value);
}

function subtract() {
	document.getElementById("result").innerHTML = parseInt(document.getElementById("var1").value) - parseInt(document.getElementById("var2").value);
}

function multiply() {
	document.getElementById("result").innerHTML = parseInt(document.getElementById("var1").value) * parseInt(document.getElementById("var2").value);
}

function divide() {
	document.getElementById("result").innerHTML = parseInt(document.getElementById("var1").value) / parseInt(document.getElementById("var2").value);
}

function modulo() {
	document.getElementById("result").innerHTML = parseInt(document.getElementById("var1").value) % parseInt(document.getElementById("var2").value);
}