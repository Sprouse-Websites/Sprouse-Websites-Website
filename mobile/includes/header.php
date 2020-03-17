<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145359620-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145359620-1');
</script>

<title><?php echo $page_title;?></title>
<script src="https://kit.fontawesome.com/e8abc56752.js" crossorigin="anonymous"></script>
<link rel="icon" href="http://media.giphy.com/media/lqYIicTuQb7bD4DE32/200w_d.gif">
<link rel="Stylesheet" href="http://www.sprousewebsites.co.uk/css/style.css">
<link rel="Stylesheet" href="http://www.sprousewebsites.co.uk/css/blink.css">
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/fa.css">
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/footer.css">
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/pricing.css">
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/timeline.css">
<link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <meta http-equiv="refresh" content="7"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://www.sprousewebsites.co.uk/js/typewriter.js" charset="utf-8"></script>

<script type="text/javascript">
function load() {
	typeWriter();
	document.getElementById('nav').style.display = "none";
	document.getElementById('clsMenu').style.display = "none";
}

function openMenu() {
	document.getElementById('nav').style.display = "block";
	document.getElementById('clsMenu').style.display = "block";
	document.getElementById('opnMenu').style.display = "none";
}

function closeMenu() {
	document.getElementById('nav').style.display = "none";
	document.getElementById('clsMenu').style.display = "none";
	document.getElementById('opnMenu').style.display = "block";
}
</script>

<?php
function isMobileDevice() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
	include 'mobile.php';
}
else {
	echo "Redirecting you to our desktop site";
	header("LOCATION: http://www.sprousewebsites.co.uk/$url");
}

?>

<style media="screen">
.w3-bar .w3-bar-item {
	padding: 8px 16px;
	float: none;
}

.w3-bar .w3-dropdown-hover, .w3-bar .w3-dropdown-click {
	position: static;
	float: none;
}
</style>

</head>

<body onload="load()">
	<header>
		<div class="w3-bar w3-blue">
			<h1 id="site-title" class="site-title"></h1><span class="blink site-title show">|</span>
			<br>
			<div id="socials">
				<a href="https://www.facebook.com/sprousewebsites/" target="_blank" title="Facebook">
					<span class="fab fa-facebook-square fa-2x"></span>
				</a>
				<a href="http://twitter.com/joel_sprouse" target="_blank" title="Twitter">
					<span class="fab fa-twitter fa-2x"></span>
				</a>
				<a href="http://github.com/14sprouj" target="_blank" title="GitHub">
					<span class="fab fa-github fa-2x"></span>
				</a>
				<a href="http://www.instagram.com/sproj003/" target="_blank" title="Instagram">
					<span class="fab fa-instagram fa-2x"></span>
				</a>
				<a href="http://www.linkedin.com/in/joel-sprouse-76447a187/" target="_blank" title="LinkedIn">
					<span class="fab fa-linkedin-square fa-2x"></span>
				</a>
			</div>

			<br>

			<tagline style="text-align:center">Quality websites for you</tagline>

			<br>

			<i class="fas fa-bars fa-2x" onclick="openMenu();" style="font-size:20pt;" id="opnMenu"></i>
			<i class="fas fa-close fa-2x" onclick="closeMenu();" style="font-size:20pt;" id="clsMenu"></i>
			<div id="nav">
				<a href="http://www.sprousewebsites.co.uk" class="w3-bar-item w3-button w3-blue nav" style="font-size:16pt;">Home</a>
				<!-- <a href="portfolio.php" class="w3-bar-item w3-button w3-blue nav" style="font-size:16pt;">My Portfolio</a> -->
				<a href="http://www.sprousewebsites.co.uk/blog" class="w3-bar-item w3-button w3-blue nav" style="font-size:16pt;">Our Blog</a>
				<a href="http://www.sprousewebsites.co.uk/journey.php" class="w3-bar-item w3-button w3-blue nav" style="font-size:16pt;">Our Journey</a>
				<a href="http://www.sprousewebsites.co.uk/info.php" class="w3-bar-item w3-button w3-blue nav" style="font-size:16pt;">Company Info</a>
				<a class="w3-bar-item nav" style="font-size:16pt;">
					Plans and Pricing <sup>Coming Soon</sup>
				</a>
				<a href="http://www.sprousewebsites.co.uk/contact.php" class="w3-bar-item w3-button nav" style="font-size:16pt;">Contact Us</a>
			</div>
		</div>

	</header>

	<main>
