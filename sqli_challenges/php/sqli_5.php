<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Image Upload Stats</title>
		<!-- Header & Upload form CSS -->
		<link rel="stylesheet" href="../static/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

		<!-- Footer CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
	</head>
<body>
	<!-- Header Start -->
	<header class="brand-navigation">
		<div class="content">
		  <a href="https://www.youtube.com/channel/UCRv-wp0CWtW2J33NkTId62w"><img class="logo-nav" src="../static/img/logo.png"></a>
		  <nav>
			<ul class="navigation">
			  <li><a href="#">Home</a></li>
			  <li><a href="https://www.youtube.com/c/CyberAcademyHindi/about" target="_blank">About</a></li>
			  <li><a href="https://twitter.com/pushpenderindia" target="_blank">Twitter</a></li>
			  <li><a href="https://github.com/PushpenderIndia" target="_blank">GitHub</a></li>
			  <li><a href="https://youtube.com/CyberAcademyHindi" target="_blank">YouTube</a></li>
			</ul>
		  </nav>
		  <button class="button-dark" onclick="cyberacademy()">Hack To Learn</button>
		</div>
	  </header>

	<script>
	function cyberacademy() {
		window.open("https://www.youtube.com/channel/UCRv-wp0CWtW2J33NkTId62w");
	}
	</script>
	<!-- Header End -->

<?php

	if($_FILES["file"]["error"]) {
		header("Location: index.html");
		die();	
	}

	$allowedExtension = array('png', 'jpg', 'jpeg', 'gif');
	$splitFileName = explode(".", $_FILES["file"]["name"]);
	$fileExtension = end($splitFileName);

	if (in_array($fileExtension, $allowedExtension)) {
		echo "<br><br>Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		echo "<br>Type: ".$_FILES["file"]["type"];

		move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/".$_FILES["file"]["name"]);
	}
	else {
		echo "<br><br>Please upload a Image file!";
	}

?>

</body>
</html>


