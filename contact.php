<?php
$page_title = "Contact Us";
$url = "contact.php";
include 'includes/header.php';
include 'hidden/details.php';
?>
<!-- <h1>Are you a</h1>
<a href="service.php" class="w3-bar-item w3-button" style="font-size:16pt;">Exsisting Customer</a>
<vr style="font-size:18pt;"></vr>
<a href="buy.php" class="w3-bar-item w3-button" style="font-size:16pt;">New Customer</a> -->


<br>
<h3>If you have an enquiry</h3>
<br>
Contact Joel Sprouse
<div class="">
	<a href="mailto:joel@sprousewebsites.co.uk">
		<i class="fas fa-envelope"></i> joel@sprousewebsites.co.uk
	</a>
	<br>
	<a href="tel:07767153212">
		<i class="fas fa-mobile"></i> 07767 153212
	</a>
</div>
OR Use This Form

<form id="contactform" class="" action="comment.php" method="post">
	<label for="name">Name: </label>
	<input name="fname" id="fname" placeholder="First Name" required autocomplete="given-name">
	<input name="lname" id="lname" placeholder="Last Name" required autocomplete="family-name">
	<br>
	<label for="number">Phone Number</label>
	<input type="tel" name="phone" required autocomplete="tel">
	<br>
	<label for="email">Email</label>
	<input type="email" name="email" required autocomplete="email">
	<br>
	<label for="comment">Message</label>
	<br>
	<textarea name="comment" rows="8" cols="80" required></textarea>
	<br>
	<label for="AntiSpam">To help protect us against spam, please answer this question: Using only numbers, what is 12 + 13?</label>
	<br>
	<input name="AntiSpam" id="AntiSpam" maxlength="10" style="width:30px" required oninput="antispam()">
	<br>
	<div id="sub">
		<input type="submit" name="" id="sumbit" value="Submit">
	</div>
</form>

<script type="text/javascript">
function antispam() {
	var q = document.getElementById("AntiSpam");
	var s = document.getElementById("submit");
	if (document.getElementById("AntiSpam") == 25) {
		document.getElementById("submit").disabled = false;
	};
	if (document.getElementById("AntiSpam") !== 25) {
		document.getElementById("submit").disabled = true;
	}
}
</script>

<?php include 'includes/footer.php'; ?>
