<?php
$page_title = "Plans and Pricing";
$url = "plans.php";
include 'includes/header.php';
?>
<style media="screen">
/* This CSS file deals with the pricing table (plans.php) */

td {
	text-align: center;
}

li{
	margin-right:52px;
	display:inline;
	color:#c1c5cc;
	font-family:'Droid Serif',serif;
}


</style>
<br>

<table style="width:99%;">
	<thead>
		<tr>
			<th></th>
			<th style="background-color:white;">Basic</th>
			<th style="background-color:silver;">Silver</th>
			<th style="background-color:gold;">Gold</th>
			<th style="background-color:#B9F2FF;">Diamond</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Domains</td>
			<td>1</td>
			<td style="background-color:#e6e6e6;">1</td>
			<td style="background-color:#fff882;">1</td>
			<td style="background-color:#ccf5ff;">2</td>
		</tr>
		<tr>
			<td>Websites</td>
			<td>1</td>
			<td style="background-color:#e6e6e6;">1</td>
			<td style="background-color:#fff882;">3</td>
			<td style="background-color:#ccf5ff;">5</td>
		</tr>
		<tr>
			<td>Pages per website</td>
			<td>6</td>
			<td style="background-color:#e6e6e6;">10</td>
			<td style="background-color:#fff882;">15</td>
			<td style="background-color:#ccf5ff;">20</td>
		</tr>
		<tr>
			<td>Design</td>
			<td><span class="fas fa-star"></span></td>
			<td style="background-color:#e6e6e6;"><span class="fas fa-star"></span><span class="fas fa-star"></span></td>
			<td style="background-color:#fff882;"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></td>
			<td style="background-color:#ccf5ff;"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td>Price</td>
			<td></td>
			<td style="background-color:#e6e6e6;"></td>
			<td style="background-color:#fff882;"></td>
			<td style="background-color:#ccf5ff;"></td>
		</tr>
	</tfoot>
</table>
<br>
<div style="background-color:navy; color:yellow;"><span class="fas fa-star"></span>Need Something Special <span class="fas fa-star"></span>
	<br>
	<span style="font-size:1.9em; font-family: 'Arial Rounded MT Bold'; cursor:pointer;"><a href="contact.php" style="cursor:pointer;">Contact Us</a></span>
</div>

<img src="http://www.sprousewebsites.co.uk/media/OR-with-hr.jpg" width="100%" alt="">

<style media="screen">
fieldset{
	display:none;
	padding:20px;
	margin:85px;
	border-radius:5px;
}
#first{
	display:block;
	padding:20px;
	margin-top:50px;
	border-radius:5px;
	margin-left:85px;
	margin-right:85px;
}

#second{
	display:none;
	padding:20px;
	margin-top:50px;
	border-radius:5px;
	margin-left:85px;
	margin-right:85px;
}

#third{
	display:none;
	padding:20px;
	margin-top:50px;
	border-radius:5px;
	margin-left:85px;
	margin-right:85px;
}

</style>

<form class="regForm" action="hidden/insert.php" method="post">
	<h1>Get an estimate</h1>
	<!-- Progressbar -->
	<ul id="progressbar">
		<li id="active1" style="color:red">Start</li>
		<li id="active2">Features</li>
		<li id="active3">Design</li>
	</ul>
	<!-- Fieldsets -->
	<div style="text-align:center;">

		<fieldset id="first">
			<p>We're going to ask you a few questions about how you want your website to look. When you've answered all of them, we'll generate an estimate for you.</p>

			<p>Make sure you fill out all fields</p>
			<input id="next_btn1" onclick="next_step1()" type="button" value="Start">
		</fieldset>

		<fieldset id="second">
			<h2 class="title">Features</h2>
			<p class="subtitle">Step 1</p>
			<label for="domains">Number of Domains</label>
			<input class="text_field" name="domains" placeholder="" type="number" value="1" style="width:24pt">
			<br>
			<label for="websites">Number of Websites</label>
			<input class="text_field" name="websites" placeholder="" type="number" value="1" style="width:24pt">
			<br>
			<input class="text_field" name="univ" placeholder="University" type="text">
			<br>
			Need help? <a href="contact.php" class="blue"> Contact Us</a>
			<input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
			<input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next">
		</fieldset>

		<fieldset id="third">
			<h2 class="title">Personal Details</h2>
			<p class="subtitle">Step 2</p>
			<input class="text_field" name="fname" placeholder="First Name" type="text">
			<input class="text_field" name="lname" placeholder="Last Name" type="text">
			<input class="text_field" name="cont" placeholder="Contact" type="text">
			<label>Gender</label>
			<input name="gender" type="radio" value="Male">Male
			<input name="gender" type="radio" value="Female">Female
			<textarea name="address" placeholder="Address">
			</textarea>
			<input id="pre_btn2" onclick="prev_step2()" type="button" value="Previous">
			<input class="submit_btn" onclick="validation(event)" type="submit" value="Submit">
		</fieldset>
	</div>
</form>
<br><br>

<!-- <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(87923)</script>

<script src="https://cdn.cai.tools.sap/webchat/webchat.js"
channelId="bedba58f-0b5a-4146-896b-604172ab4aa6"
token="23f05e0073db0cad807a8f5f2e197260"
id="cai-webchat"
></script> -->


<script>
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
// Function that executes on click of first next button.
function next_step1() {
	document.getElementById("first").style.display = "none";
	document.getElementById("second").style.display = "block";
	document.getElementById("active1").style.color = "green";
	document.getElementById("active2").style.color = "red";
}
// Function that executes on click of first previous button.
function prev_step1() {
	document.getElementById("first").style.display = "block";
	document.getElementById("second").style.display = "none";
	document.getElementById("active1").style.color = "green";
	document.getElementById("active2").style.color = "gray";
}
// Function that executes on click of second next button.
function next_step2() {
	document.getElementById("second").style.display = "none";
	document.getElementById("third").style.display = "block";
	document.getElementById("active2").style.color = "green";
	document.getElementById("active3").style.color = "red";
}
// Function that executes on click of second previous button.
function prev_step2() {
	document.getElementById("third").style.display = "none";
	document.getElementById("second").style.display = "block";
	document.getElementById("active2").style.color = "red";
	document.getElementById("active3").style.color = "grey";
}
</script>

<?php
include 'includes/footer.php';
?>
