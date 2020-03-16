<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

	<?php
	$servername = "mysql5.clusterdb.net";
	$username = "joel-p9v-u-259910";
	$password = "AtlAs45678";
	$dbname = "joel-p9v-u-259910";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO `comments` (`First Name`, `Last Name`, `Email`, `Phone Number`, `Message`) VALUES ('{$_POST["fname"]}','{$_POST["lname"]}', '{$_POST["email"]}', '{$_POST["phone"]}','{$_POST["comment"]}')";


	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>

	<?php

	if(isset($_POST["email"])) {

		$email_to = "joel@sprousewebsites.co.uk"; // your email address
		$email_subject = "Existing Customer Issue"; // email subject line
		$done = "done.php"; // thank you page

		// If you update the question on the form -
		// you need to update the questions answer below
		$antispam_answer = "25";

		// Do not change this line
		$base = "CgpGb3JtIHBvd2VyZWQgYnkgaHR0cHM6Ly93d3cuZnJlZWNvbnRhY3Rmb3JtLmNvbQ==";


		function died($error) {
			echo "Sorry, but there were error(s) found with the form you submitted. ";
			echo "These errors appear below.<br /><br />";
			echo $error."<br /><br />";
			echo "Please go back and fix these errors.<br /><br />";
			die();
		}

		if(!isset($_POST['fname']) ||
		!isset($_POST['lname']) ||
		!isset($_POST['email']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['comment']) ||
		!isset($_POST['AntiSpam'])
	) {
		died('Sorry, there appears to be a problem with your form submission.');
	}

	$email_from = $_POST["email"];
	$error_message = "";
	$antispam = $_POST['AntiSpam'];

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(preg_match($email_exp,$email_from)==0) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	};
	if(strlen($_POST["fname"]) < 2) {
		$error_message .= 'Your First Name does not appear to be valid.<br />';
	};
	if(strlen($_POST["lname"]) < 2) {
		$error_message .= 'Your Last Name does not appear to be valid.<br />';
	};
	if(strlen($_POST["comment"]) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	};

	if($antispam <> $antispam_answer) {
		$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
	};

	if(strlen($error_message) > 0) {
		died($error_message);
	};
	$email_message = "Form details below.\r\n";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:");
		return str_replace($bad,"",$string);
	}
	$email_message .= "Date Message Left: ".date("l dS F Y, g:i:sv (T)")."\r\n";
	$email_message .= "First Name: ".clean_string($_POST["fname"])."\r\n";
	$email_message .= "Last Name: ".clean_string($_POST["lname"])."\r\n";
	$email_message .= "Email: ".$email_from."\r\n";
	$email_message .= "Telephone: ".$_POST["phone"]."\r\n";
	$email_message .= "Message: ".clean_string($_POST["comment"])."\r\n\r\n".base64_decode($base)."\r\n";

	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($email_to, $email_subject, $email_message, $headers);
	header("Location: $done");
	echo "<script>location.replace('$done')</script>";
};
die();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: done.php");
?>

<script>

</script>
</body>
</html>
