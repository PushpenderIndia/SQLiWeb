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
		<span class="tool" data-tip="Content-Type HTTP Header can be tampered ; )" tabindex="1"><b>💡 Hint </b></span>
	</div>
	<!-- Tip tool End -->	

	<!-- Login Form Start -->
	<div class="login-page">
		<div class="form">
		  <form class="register-form">
			<input type="text" placeholder="name"/>
			<input type="password" placeholder="password"/>
			<input type="text" placeholder="email address"/>
			<button>create</button>
			<p class="message">Already registered? <a href="#">Sign In</a></p>
		  </form>
		  <form class="login-form">
			<input type="text" placeholder="username"/>
			<input type="password" placeholder="password"/>
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
				<div class="card card-danger" onclick="location.href = 'challenge2.php';" >
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
				<div class="card card-danger" onclick="location.href = 'challenge3.php';" >
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
				<div class="card card-danger" onclick="location.href = 'challenge4.php';" >
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
				<div class="card card-danger" onclick="location.href = 'challenge5.php';" >
					<p class="card-title">SQL Auth Bypass-5</p>
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
