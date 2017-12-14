function identifyThis() {
	var number = parseInt(document.getElementById("numberInput").value);

	if (number % 2 == 0) {
		document.getElementById("theMessage").innerHTML = "It is an <strong><h2 class='animated infinite bounce'>even</h2></strong> number!";
		document.getElementsByClassName("wrapper")[0].style.backgroundColor = "red";
	} else {
		document.getElementsByClassName("wrapper")[0].style.backgroundColor = "darkgreen";
		document.getElementById("theMessage").innerHTML = "It is an <strong><h2 class='animated infinite fadeOut'>odd</h2></strong> number!";
	}

}