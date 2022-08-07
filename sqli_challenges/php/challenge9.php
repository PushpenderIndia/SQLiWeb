<?php 

include 'db/connection.php';

// Checking Secret Code
if (isset($_GET["code"])) {
	$sql = "select * from $secret_table where code_name = 'code_9'";
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
		
		$sql = "select * from users where username = ((\"$username\")) and user_passwd = ((\"$password\")) LIMIT 0,1";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1) {  
			$sql = "select * from $secret_table where code_name = 'code_10'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
        		while($row = $result->fetch_assoc()) {
					$code = $row["code"];
				}
			}
            echo "<script>alert('Login Successful! Please Save This Challenge Unlock Code: $code'); window.location.href = 'challenge10.php?code=$code';</script>";   
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
		<title>GET - Error Based SQLi-1</title>
		<!-- Header & Cake Menu/Buy CSS -->
		<link rel="stylesheet" href="../static/css/style.css">
		<link rel="stylesheet" href="../static/css/cake_cards.css">
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
		<span class="tool" data-tip='Find All GET Parameter' tabindex="1"><b>💡 Hint </b></span>
	</div>
	<!-- Tip tool End -->	

	<h2 style="text-align:center; padding-top: 20px; padding-bottom: 20px;">Challenge 9</h2>

	<!-- Buy Menu Start -->
	<!-- Buy Menu Ends -->

	<!-- Cake Menu Start -->
	<div itemscope="true" itemtype="https://schema.org/Product" style="background-color: white;">	
		<div class="carousel-container">
			<div class="product-cake-header">You may also like</div>
			<div class="webProductSlider">
				<div style="position: relative;">
					<div id="productSliderWeb346luf" class="product-all-card-slider">
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/exotic-n-freshfruit-cake-cake2470Fruit" style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/sq-exotic-n-freshfruit-cake-cake2470Fruit-A_2.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/sq-exotic-n-freshfruit-cake-cake2470Fruit-A_2.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/sq-exotic-n-freshfruit-cake-cake2470Fruit-A_2.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/sq-exotic-n-freshfruit-cake-cake2470Fruit-A_2.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-0"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Exotic N Freshfruit
										Cake</span><span class="card2-description">Enriched with the nutrients of fruits,
										this freshly baked mixed fruit cake is all set to soothe the taste...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>699</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/real-mangoes-squished-into-a-delicious-cake-cake2474Mang"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/sq-real-mangoes-squished-into-a-delicious-cake-cake2474Mang-A_1.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/sq-real-mangoes-squished-into-a-delicious-cake-cake2474Mang-A_1.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/sq-real-mangoes-squished-into-a-delicious-cake-cake2474Mang-A_1.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/sq-real-mangoes-squished-into-a-delicious-cake-cake2474Mang-A_1.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-1"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Real Mangoes Squished Into A
										Delicious Cake</span><span class="card2-description">Dive into the tropical vibes
										with every bite of this intensely flavourful mango cake . With a cherry on
										the...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>599</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/delightful-n-scrumptious-pineapple-cake-cake2475pine"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/sq-delightful-n-scrumptious-pineapple-cake-cake2475pine-A_1.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/sq-delightful-n-scrumptious-pineapple-cake-cake2475pine-A_1.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/sq-delightful-n-scrumptious-pineapple-cake-cake2475pine-A_1.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/sq-delightful-n-scrumptious-pineapple-cake-cake2475pine-A_1.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-2"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Delightful N Scrumptious
										Pineapple Cake</span><span class="card2-description">Binge eat this super moist cake
										with a punch of pineapple flavour bursting in your mouth, topped with fine
										and...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>499</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/delicious-n-creamy-rasmalai-cake-cake2476rasm"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/sq-delicious-n-creamy-rasmalai-cake-cake2476rasm-A_0.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/sq-delicious-n-creamy-rasmalai-cake-cake2476rasm-A_0.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/sq-delicious-n-creamy-rasmalai-cake-cake2476rasm-A_0.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/sq-delicious-n-creamy-rasmalai-cake-cake2476rasm-A_0.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-3"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Delicious N Creamy Rasmalai
										Cake</span><span class="card2-description">An eggless Rasmalai cake with a creamy
										white frosting layer and a satisfying pistachio sprinkle, white...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>675</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/yummy-n-romantic-red-velvet-cake-cake2477redv"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/sq-yummy-n-romantic-red-velvet-cake-cake2477redv-A_0.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/sq-yummy-n-romantic-red-velvet-cake-cake2477redv-A_0.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/sq-yummy-n-romantic-red-velvet-cake-cake2477redv-A_0.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/sq-yummy-n-romantic-red-velvet-cake-cake2477redv-A_0.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-4"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Yummy N Romantic Red Velvet
										Cake</span><span class="card2-description">A romantic red velvet cake with an
										eggless treat! Encrusted with a white creamy layer topped with red velvet...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>699</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/death-by-chocolate-half-cake-cake2715choc"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/death-by-chocolate-half-cake-cake2715choc-A.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/death-by-chocolate-half-cake-cake2715choc-A.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/death-by-chocolate-half-cake-cake2715choc-A.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/death-by-chocolate-half-cake-cake2715choc-A.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-5"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Enticing Death By Chocolate
										Half Cake</span><span class="card2-description">Make lasting impressions and
										surprise the sweet tooth birthday girl/boy with this enticing death by
										chocolate...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>699</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/half-heavenly-black-forest-cake2717blac" style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/half-heavenly-black-forest-cake2717blac-A.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/half-heavenly-black-forest-cake2717blac-A.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/half-heavenly-black-forest-cake2717blac-A.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/half-heavenly-black-forest-cake2717blac-A.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-6"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Black Forest Half
										Cake</span><span class="card2-description">Celebrating half-yearly milestones is a
										new trend these days. For any occasion, the sixth monthly celebration...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>599</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/explosion-birthday-bomb-photo-cake-bomb2718vani"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/explosion-birthday-bomb-photo-cake-bomb2718vani-A.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/explosion-birthday-bomb-photo-cake-bomb2718vani-A.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/explosion-birthday-bomb-photo-cake-bomb2718vani-A.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/explosion-birthday-bomb-photo-cake-bomb2718vani-A.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-7"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Vanilla Photo Bomb
										Cake</span><span class="card2-description">Liven up the womb escape celebrations for
										your darling angel with this alluring explosion birthday bomb with a...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>1499</span>
									</div>
								</div>
							</a></div>
						<div class="product-card-slider"><a class="card3 card3-mobile" target="_blank"
								href="/p/cake/six-months-together-half-photo-cake-cake2722flav"
								style="text-decoration-line: none;">
								<div class="card2-image card3-mobile-image">
									<div class="commonImageContainer" style="width: 100%; height: 100%;"><img width="0"
											height="0"
											src="https://media.bakingo.com/six-months-together-half-photo-cake-cake2722flav-A.jpg"
											data-sizes="auto" alt="" title=""
											srcset="https://media.bakingo.com/six-months-together-half-photo-cake-cake2722flav-A.jpg?tr=w-266,q-70 1x,https://media.bakingo.com/six-months-together-half-photo-cake-cake2722flav-A.jpg?tr=w-266,dpr-1.5,q-70 1.5x,https://media.bakingo.com/six-months-together-half-photo-cake-cake2722flav-A.jpg?tr=w-266,dpr-2,q-70 2x"
											loading="lazy" id="card3-cake-img-undefined-8"
											style="display: inline; border-radius: 5px;"></div>
								</div>
								<div class="card2-content-container"><span class="card2-title">Half Anniversary Pistachio
										Photo Cake</span><span class="card2-description">Celebrate your love with your
										partner during your first six months together with this lip-smacking and...</span>
									<div><span class="card2-price"><span class=""
												style="display: inline-block; margin-right: 3px; width: 7.5px; height: 11.2px;"></span>799</span>
									</div>
								</div>
							</a></div>
					</div>
					<div class="slider-arrow-right-icon"><span class=""
							style="display: inline-block; width: 100%; height: 100%;"></span></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Cake Menu Ends -->
	
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

			<div class="col">
				<div class="card card-danger" onclick="var code=prompt('Enter Challenge Code');  if (code != null){ location.href = 'challenge8.php?code='+code};" >
					<p class="card-title">GET Error Based-1</p>
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
