function changeBKColor() {
	var newColor = document.getElementById("newBKColor").value;
	// console.log(newColor);

	switch (newColor) {
		case "red":
			document.getElementById("mainWrapper").style.backgroundColor = "red";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Red!</h2>"
			break;
		case "orange":
			document.getElementById("mainWrapper").style.backgroundColor = "orange";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Orange!</h2>"
			break;
		case "yellow":
			document.getElementById("mainWrapper").style.backgroundColor = "yellow";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Yellow!</h2>"
			break;
		case "green":
			document.getElementById("mainWrapper").style.backgroundColor = "green";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Green!</h2>"
			break;
		case "blue":
			document.getElementById("mainWrapper").style.backgroundColor = "blue";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Blue!</h2>"
			break;
		case "indigo":
			document.getElementById("mainWrapper").style.backgroundColor = "indigo";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Indigo!</h2>"
			break;
		case "violet":
			document.getElementById("mainWrapper").style.backgroundColor = "violet";
			document.getElementById("theMessage").innerHTML = "Your background color is <h2 class='animated infinite flash'>Violet!</h2>"
			break;
		default:
			document.getElementById("mainWrapper").style.backgroundColor = "#222";
			document.getElementById("theMessage").innerHTML = "Please select a color <br>:'(";
			break;
	}

}