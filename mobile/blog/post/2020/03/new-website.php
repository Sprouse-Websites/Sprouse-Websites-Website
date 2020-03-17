<?php
$post_title = "New Website";
$page_title = $post_title." | Sprouse Websites Blog";
$url = "blog/post/2020/03/new-website.php";
include '../../../../includes/header.php';
?>

<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/blog.css">

<style type="text/css">
.main-text {
	padding: 5pt;
	text-align: center;
}

body {
	background-color: #2196F3;
}

.blog-post {
	background-color: #DBE5FF;
}

post-title {
	font-family: "Segoe UI",Arial,sans-serif;
	font-weight: bold;
	margin: 10px 0;
	text-transform: uppercase;
	display: block;
	font-size: 1.37em;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}

.read-more-link {
	display: inline-block;
	vertical-align: middle;
	overflow: hidden;
	text-decoration: none;
	color: inherit;
	text-align: center;
	cursor: pointer;
	white-space: nowrap;
	box-shadow: 1px 0px 3px 0px;
	padding: 12px 24px;
	background-color: inherit;
}

.read-more-link:hover {
	color: #000!important;
	background-color: #ccc!important;
}
</style>

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

	<!-- Header -->
	<header class="w3-container w3-center w3-padding-32" style="background-color:#BBF;">
		<h1 style="margin:0pt!important;"><b><?php echo $blog; ?></b></h1>
	</header>

	<!-- Grid -->
	<div class="w3-row">

		<!-- Blog entries -->
		<div class="w3-col l8 s12">
			<!-- Blog entry -->
			<div class="w3-card-4 w3-margin blog-post">
				<!-- <img src="/media/.jpg" alt="" style="width:100%"> -->
				<div class="w3-container">

					<!-- Breadcrumb Start -->
					<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/breadcrumb.css">
					<div id="breadcrumb" style="text-align:left;">
						<ul class="collapsed">
							<li class="breadcrumb"><a href="http://www.sprousewebsites.co.uk/" class="breadcrumb">Home</a></li>
							<li class="breadcrumb"><a href="http://www.sprousewebsites.co.uk/blog" class="breadcrumb">Blog</a></li>
							<li class="breadcrumb"><a href="http://www.sprousewebsites.co.uk/blog/post/2020" class="breadcrumb">2020</a></li>
							<li class="breadcrumb"><a href="http://www.sprousewebsites.co.uk/blog/post/2020/03" class="breadcrumb">March</a></li>
							<li class="breadcrumb">Current page</li>
						</ul>
					</div>
					<!-- Breadcrumb End -->
					
					<post-title><b><?php echo $post_title; ?></b></post-title>
					<subtitle><i class="fas fa-thumbtack"></i> This post is pinned to the top <span class="w3-opacity">5th March 2020</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://www.sprousewebsites.co.uk/media/joel-icon.png" height="27pt">Posted By Joel Sprouse</subtitle>
				</div>

				<div class="post-content">
					<p>Look at this. We have got a new website! Woop woop!</p>
					<p>OK on a serious note, it's been a long time in the making but it's here. As time goes on, each project that is completed will be on this site. We're working on a load of projects at the moment so expect new things here soon.</p>
					<p>Talking of working hard, we're still working on this site even now so please bear with us. Please feel free to <a href="http://sprousewebsites.co.uk/contact.php">contact us</a> anytime if you want a website like this. We're always happy to help.</p>
					<div class="w3-row">
						<div class="w3-col m4 w3-hide-small">
							<span class="w3-padding-large w3-right"><b>Tags  </b> <a href="http://www.sprousewebsites.co.uk/blog/tag/sprouse-websites-redesign.php" class="blog-tag">Sprouse Websites Redesign</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		include '../../../../includes/blog-sidebar.php';
		?>

		<!-- END GRID -->
	</div><br>

	<!-- END w3-content -->
</div>

</main>

<?php
include '../../../../includes/footer.php';
?>
