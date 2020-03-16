<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Cookie Consent by https://www.PrivacyPolicies.com -->
	<script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/3.0.0/cookie-consent.js"></script>
	<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
	cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"light","language":"en","website_name":"www.sprousewebsites.co.uk"});
	});
	</script>

	<!-- Google Analytics -->
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145359620-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145359620-1', { 'optimize_id': 'GTM-5W3HGPF'});
</script>

	<noscript><a href="https://www.PrivacyPolicies.com/cookie-consent/">Cookie Consent by Privacy Policies Generator</a></noscript>
	<!-- End Cookie Consent -->


<?php $blog = "BLOG"; ?>
<title><?php echo $page_title; ?></title>
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
<meta name="keywords" content="Websites, London, Quality,<?php echo $page_keywords; ?>">
<meta name="description" content="Sprouse Websites is a small company based in Croydon to make quality websites for anyone, particularly for small businesses.">
<script src="http://www.sprousewebsites.co.uk/js/change-favicon.js" charset="utf-8"></script>
<script src="http://www.sprousewebsites.co.uk/js/typewriter.js" charset="utf-8"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101241262);</script>
<script async src="//static.getclicky.com/js"></script>

<?php

function isMobileDevice() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
	echo "Redirecting you to our mobile site";
	header("LOCATION: http://www.sprousewebsites.co.uk/mobile/$url");
}

?>

</head>

<body onload="typeWriter()">
	<header>
		<div class="w3-bar w3-blue">
			<h1 id="site-title" class="site-title"></h1><span class="blink site-title show">|</span><br>
			<tagline style="text-align:center">Quality websites for you</tagline>
			<br>
			<div id="socials" style="position: absolute; top: 96pt; right:30pt;">
				<a href="https://www.facebook.com/sprousewebsites/" target="_blank" title="Facebook">
					<span class="fab fa-facebook-square fa-2x"></span>
				</a>
				<a href="https://twitter.com/joel_sprouse" target="_blank" title="Twitter">
					<span class="fab fa-twitter fa-2x"></span>
				</a>
				<a href="https://github.com/Sprouse-Websites" target="_blank" title="GitHub">
					<span class="fab fa-github fa-2x"></span>
				</a>
				<a href="https://www.instagram.com/sproj003/" target="_blank" title="Instagram">
					<span class="fab fa-instagram fa-2x"></span>
				</a>
				<a href="https://www.linkedin.com/in/joel-sprouse-76447a187/" target="_blank" title="LinkedIn">
					<span class="fab fa-linkedin-square fa-2x"></span>
				</a>
			</div>
			<a href="http://www.sprousewebsites.co.uk" class="w3-bar-item w3-button w3-blue" style="font-size:16pt;">Home</a>
			<div class="w3-dropdown-hover">
				<button class="w3-button" style="font-size:16pt;">About Us</button>
				<div class="w3-dropdown-content w3-bar-block w3-card-4">
					<!-- <a href="portfolio.php" class="w3-bar-item w3-button" style="font-size:16pt;">My Portfolio</a> -->
					<a href="http://www.sprousewebsites.co.uk/blog" class="w3-bar-item w3-button" style="font-size:16pt;">Our Blog</a>
					<a href="http://www.sprousewebsites.co.uk/journey.php" class="w3-bar-item w3-button" style="font-size:16pt;">Our Journey</a>
					<a href="http://www.sprousewebsites.co.uk/info.php" class="w3-bar-item w3-button" style="font-size:16pt;">Company Info</a>
				</div>
			</div>
			<a class="w3-bar-item" style="font-size:16pt;">
				Plans and Pricing <sup>Coming Soon</sup>
			</a>
			<a href="http://www.sprousewebsites.co.uk/contact.php" class="w3-bar-item w3-button" style="font-size:16pt;">Contact Us</a>

		</header>

		<main>
