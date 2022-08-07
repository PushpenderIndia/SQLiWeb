<?php 

include 'db/connection.php';

// Checking Secret Code
if (isset($_GET["code"])) {
	$sql = "select * from $secret_table where code_name = 'code_2'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$code = $row["code"];
		}
	}
	
	if ($code != $_GET["code"]) {
		header("Location: ../index.php");
		die();
	}
}

else {
	header("Location: ../index.php");
	die();	
}


// Checking Whether POST Request or not
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["email_address"])) {
		// Register Request
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email_address = $_POST["email_address"];
	}
	
	else {
		// Login Request
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$sql = "select * from users where username = \"$username\" and user_passwd = \"$password\" LIMIT 0,1";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1) {  
			$sql = "select * from $secret_table where code_name = 'code_3'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
        		while($row = $result->fetch_assoc()) {
					$code = $row["code"];
				}
			}
            echo "<script>alert('Login Successful! Please Save This Challenge Unlock Code: $code'); window.location.href = 'challenge3.php?code=$code';</script>";  
        }  
        else {  
            echo "<script>alert('Login failed. Invalid username or password.')</script>";  
        }       
	}
}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SQL Auth Bypass-2</title>
		<!-- Header & Login form CSS -->
		<link rel="stylesheet" href="../static/css/style.css">
		<link rel="stylesheet" href="../static/css/login.css">
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
	<!-- Header End -->

	<!-- Tip tool Start -->
	<div class="tiptool">
		<span class="tool" data-tip='select * from users where username = "$username" and user_passwd = "$password"' tabindex="1"><b>💡 Hint </b></span>
	</div>
	<!-- Tip tool End -->	

	<h2 style="text-align:center; padding-top: 20px; padding-bottom: 20px;">Challenge 2</h2>

	<!-- Login Form Start -->
	<div class="login-page">
		<div class="form">
		  <form class="register-form" method="post">
			<input type="text" placeholder="name" name="username" />
			<input type="password" placeholder="password" name="password" />
			<input type="text" placeholder="email address" name="email_address" />
			<button>create</button>
			<p class="message">Already registered? <a href="#">Sign In</a></p>
		  </form>
		  <form class="login-form" method="post">
			<input type="text" placeholder="username" name="username" />
			<input type="password" placeholder="password" name="password" />
			<button>login</button>
			<p class="message">Not registered? <a href="#">Create an account</a></p>
		  </form>
		</div>
	</div>
	<!-- Login Form End -->
	
	<!-- JS for Header Start -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../static/js/script.js"></script>
	<script>
		$(document).ready(function(){
			var showHeaderAt = 150;
			var win = $(window),
					body = $('body');
	
			if(win.width() > 400) {
				win.on('scroll', function(e){
					if(win.scrollTop() > showHeaderAt) {
						body.addClass('fixed');
					}
					else {
						body.removeClass('fixed');
					}
				});
			}
		});
	</script>
	<!-- JS for Header End -->

	<!-- Choose Challenge Start -->
	<div class="choose_challenge">
		<h1>Challenges</h1>
		<div class="row">
			<div class="col">
				<div class="card card-danger" onclick="location.href = '../index.php';" >
					<p class="card-title">SQL Auth Bypass-1</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge2.php?code='+code};" >
					<p class="card-title">SQL Auth Bypass-2</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge3.php?code='+code};"  >
					<p class="card-title">SQL Auth Bypass-3</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge4.php?code='+code};"  >
					<p class="card-title">SQL Auth Bypass-4</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge5.php?code='+code};"  >
					<p class="card-title">SQL Auth Bypass-5</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>			

			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge6.php?code='+code};" >
					<p class="card-title">SQL Auth Bypass-6</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge7.php?code='+code};" >
					<p class="card-title">SQL Auth Bypass-7</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge8.php?code='+code};" >
					<p class="card-title">SQL Auth Bypass-8</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- Choose Challenge End -->

	<!-- Footer Start -->
	<footer>
		<div class="footer">
			<div class="row">
				<a href="https://github.com/PushpenderIndia"><i class="fa fa-github"></i></a>
				<a href="https://medium.com/@PushpenderIndia"><i class="fa fa-medium"></i></a>
				<a href="https://t.me/CyberAcademyHindi"><i class="fa fa-telegram"></i></a>
				<a href="https://youtube.com/CyberAcademyHindi"><i class="fa fa-youtube"></i></a>
				<a href="https://twitter.com/pushpenderindia"><i class="fa fa-twitter"></i></a>
			</div>
		
			<div class="row">
				Cyber Academy - Copyright © 2022 - Present - All rights reserved
			</div>
		</div>
	</footer>
	<!-- Footer End -->
</body>
</html> 
