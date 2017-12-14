function redFunc() {
	document.getElementById("red-box").style.backgroundColor = "red";
}

function orangeFunc() {
	document.getElementById("orange-box").style.backgroundColor = "orange";
}

function yellowFunc() {
	document.getElementById("yellow-box").style.backgroundColor = "yellow";
}

function greenFunc() {
	document.getElementById("green-box").style.backgroundColor = "green";
}

function blueFunc() {
	document.getElementById("blue-box").style.backgroundColor = "blue";
}

function indigoFunc() {
	document.getElementById("indigo-box").style.backgroundColor = "indigo";
}

function violetFunc() {
	document.getElementById("violet-box").style.backgroundColor = "violet";
}

/*
 * Dan P.'s Code
 *
 */

var navClass;

function changeColor(className, id=null) {
	if (id == null) {
		navClass = className.replace("nav-box ", ""); /* will get color select from navigation */
		
	} else {
		var boxClass = className.split(" "); /* will create array of class names  */ 
		alert(boxClass);
		var boxClassLength = boxClass.length; /* get size of array boxClass */
		var element = document.getElementById(id); /* target the container to change the background color */

		if (boxClassLength > 1) { /* update current bg color */
			element.classList.remove(boxClass[1]);
			element.className = boxClass[0] + " " + navClass;
		} else { /* assign initial bg color */
			element.className = boxClass + " " + navClass;
		}
	}
}