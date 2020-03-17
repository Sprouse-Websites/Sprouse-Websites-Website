<?php
$page_title = "Sprouse Websites Redesign | Sprouse Websites Blog";
$url = "blog/tag/sprouse-websites-redesign.php";
include '../../includes/header.php';
?>
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/blog.css">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

	<!-- Header -->
	<header class="w3-container w3-center w3-padding-32" style="background-color:#ABF;">
		<h1 style="margin:0pt!important;"><b><?php echo $blog; ?> <i>Tagged: Sprouse Websites Redesign</i></b></h1>
	</header>

	<!-- Grid -->
	<div class="w3-row">

		<!-- Blog entries -->
		<div class="w3-col l8 s12">
			<!-- New Post -->
			<div class="w3-card-4 w3-margin blog-post">
				<!-- <img src="/media/.jpg" alt="" style="width:100%"> -->
				<div class="w3-container">
					<post-title><b>New Website</b></post-title>
					<table style="width: 100%;">
						<tbody><tr>
							<td style="text-align: left;">
								<subtitle>
									<i class="fas fa-thumbtack" aria-hidden="true"></i> This post is pinned to the top <span class="w3-opacity">5th March 2020</span>
								</subtitle>
							</td>
							<td style="text-align: right;">
								<subtitle>
									<img src="http://www.sprousewebsites.co.uk/media/joel-icon.png" height="27pt">
									&nbsp;&nbsp;
									Posted By Joel Sprouse
								</subtitle>
							</td>
						</tr>
					</tbody></table>
				</div>


				<div class="post-content">
					<p>Look at this. We have got a new website! Woop woop!</p>
					<p>OK on a serious note, it's been a long time in the making but it's here. As time goes on, each project that is completed will be on this site. We're working on a load of projects at the moment so expect new things here soon.</p>
					<p>Talking of working hard, we're still working on this site even now so please bear with us. Please feel free to <a href="http://sprousewebsites.co.uk/contact.php">contact us</a> anytime if you want a website like this. We're always happy to help.</p>
				</div>
				<div class="w3-row">
					<div class="w3-col m4 w3-hide-small">
						<span class="w3-padding-large w3-right"><b>Tags  </b> <a href="http://www.sprousewebsites.co.uk/blog/tag/sprouse-websites-redesign.php" class="blog-tag">Sprouse Websites Redesign</a></span>
					</div>
					<div class="read-more-cont">
						<a href="http://sprousewebsites.co.uk/blog/post/2020/03/new-website.php" class="read-more-link"><b>SEE FULL POST »</b></a>
					</div>
				</div>

				<hr>
			</div>

			<!-- New Post -->
			<div class="w3-card-4 w3-margin blog-post">
				<!-- <img src="/media/.jpg" alt="" style="width:100%"> -->
				<div class="w3-container">
					<post-title><b>New Terms and Privacy Policy</b></post-title>
					<table style="width: 100%;">
						<tbody><tr>
							<td style="text-align: left;">
								<subtitle>
									<span class="w3-opacity">10th March 2020</span>
								</subtitle>
							</td>
							<td style="text-align: right;">
								<subtitle>
									<img src="http://www.sprousewebsites.co.uk/media/joel-icon.png" height="27pt">
									&nbsp;&nbsp;
									Posted By Joel Sprouse
								</subtitle>
							</td>
						</tr>
					</tbody></table>
				</div>


				<div class="post-content">
					<p>Our privacy Policy and Terms of Service are now online.</p>
					<p>
						You can see our Privacy Policy at <a href="http://www.sprousewebsites.co.uk/privacy.php" class="hover-u">http://www.sprousewebsites.co.uk/privacy.php</a> and our Terms of Service at <a href="http://www.sprousewebsites.co.uk/terms.php" class="hover-u">http://www.sprousewebsites.co.uk/terms.php</a>. Please look at both of them. Thanks.
						<br>
						Joel Sprouse
					</p>
				</div>
				<div class="w3-row">
					<div class="w3-col m4 w3-hide-small">
						<span class="w3-padding-large w3-right"><b>Tags  </b> <a href="http://www.sprousewebsites.co.uk/blog/tag/sprouse-websites-redesign.php" class="blog-tag">Sprouse Websites Redesign</a></span>
					</div>
					<div class="read-more-cont">
						<a href="http://sprousewebsites.co.uk/blog/post/2020/03/new-terms-privacy.php" class="read-more-link"><b>SEE FULL POST »</b></a>
					</div>
				</div>

				<hr>
			</div>
			<!-- END BLOG ENTRIES -->
		</div>

		<?php
		include '../../includes/blog-sidebar.php';
		?>


		<!-- END GRID -->
	</div><br>

	<!-- END w3-content -->
</div>

</main>

<?php
include '../../includes/footer.php';
?>
