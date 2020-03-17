<?php
$page_title = "April 2020 | Sprouse Websites Blog";
$url = "blog/post/2020/04.php";
include '../../../../includes/header.php';
?>
<link rel="stylesheet" href="http://www.sprousewebsites.co.uk/css/blog.css">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

	<!-- Header -->
	<header class="w3-container w3-center w3-padding-32" style="background-color:#ABF;">
		<h1 style="margin:0pt!important;"><b><?php echo $blog; ?>: April 2020 Posts</b></h1>
	</header>

	<!-- Grid -->
	<div class="w3-row">

		<!-- Blog entries -->
		<div class="w3-col l8 s12">

			<!-- END BLOG ENTRIES -->
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
