// Variables

var domainDOM = document.getElementById('domains');
var websiteDOM = document.getElementById('websites');
var pagesDOM = document.getElementById('pages');

/*------------Validation Function-----------------*/
var count = 0; // To count blank fields.
function validation(event) {
	var radio_check = document.getElementsByName('gender'); // Fetching radio button by name.
	var input_field = document.getElementsByClassName('text_field'); // Fetching all inputs with same class name text_field and an html tag textarea.
	var text_area = document.getElementsByTagName('textarea');
	// Validating radio button.
	if (radio_check[0].checked == false && radio_check[1].checked == false) {
		var y = 0;
	} else {
		var y = 1;
	}
	// For loop to count blank inputs.
	for (var i = input_field.length; i > count; i--) {
		if (input_field[i - 1].value == '' || text_area.value == '') {
			count = count + 1;
		} else {
			count = 0;
		}
	}
	if (count != 0 || y == 0) {
		alert("*All Fields are mandatory*"); // Notifying validation
		event.preventDefault();
	} else {
		return true;
	}
}
/*---------------------------------------------------------*/
// Functions for the previous and next buttons on the estimate form on plans.php
function next_step1() {
	document.getElementById("first").style.display = "none";
	document.getElementById("second").style.display = "block";
	document.getElementById("active1").style.color = "green";
	document.getElementById("active2").style.color = "red";
	document.getElementById("estimate").style.display = "block";
}

function prev_step1() {
	document.getElementById("first").style.display = "block";
	document.getElementById("second").style.display = "none";
	document.getElementById("active1").style.color = "green";
	document.getElementById("active2").style.color = "grey";
}

function next_step2() {
	if (domainDOM > websiteDOM) {
		document.getElementById("error").innerHTML = "30";
	} else {
		document.getElementById("second").style.display = "none";
		document.getElementById("third").style.display = "block";
		document.getElementById("active2").style.color = "green";
		document.getElementById("active3").style.color = "red";
	}
}

function prev_step2() {
	document.getElementById("third").style.display = "none";
	document.getElementById("second").style.display = "block";
	document.getElementById("active2").style.color = "red";
	document.getElementById("active3").style.color = "grey";
}

function next_step3() {
	document.getElementById("third").style.display = "none";
	document.getElementById("forth").style.display = "block";
	document.getElementById("active3").style.color = "green";
	document.getElementById("active4").style.color = "red";
	if (domainDOM > websiteDOM) {
		document.getElementById("error").innerHTML = "9";
	} else {

	}
}

function prev_step3() {
	document.getElementById("forth").style.display = "none";
	document.getElementById("third").style.display = "block";
	document.getElementById("active3").style.color = "red";
	document.getElementById("active4").style.color = "grey";
}

function rangeChange() {
	var rangeValue = document.getElementById("range").value;
	document.getElementById("range").classList.remove("black");
	if (rangeValue <= 12) {
		document.getElementById("range").classList.add("slider-red");
		document.getElementById("rangeValue").innerHTML = rangeValue + ": Good Design is Really not Necessary";
	} else {
		document.getElementById("range").classList.remove("slider-red");
	}

	if (rangeValue > 12 && rangeValue <= 45) {
		document.getElementById("range").classList.add("slider-yellow");
		document.getElementById("rangeValue").innerHTML = rangeValue + ": I don't want to look bad but it doesn't have to be great";
	}
	else {
		document.getElementById("range").classList.remove("slider-yellow");
	}

	if (rangeValue > 45 && rangeValue < 80) {
		document.getElementById("range").classList.add("slider-gold");
		document.getElementById("rangeValue").innerHTML = rangeValue + ": Let's have it looking nice. I want people to appreciate it.";
	}
	else {
		document.getElementById("range").classList.remove("slider-gold");
	}

	if (rangeValue >= 80) {
		document.getElementById("range").classList.add("slider-green");
		document.getElementById("rangeValue").innerHTML = rangeValue + ": This needs to look special. I want everyone to admire it.";
	} else {
		document.getElementById("range").classList.remove("slider-green");
	}
}
