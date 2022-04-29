								
<?php 
//this is a main home page here you can browse freely



include 'config.php';


session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

if (isset($_POST['submit1'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Home</title>

		<link rel="icon" type="image/x-icon" href="images/log.png">


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="style.css">
	


	</head>


	<body class="slider-collapse">
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Spider Web</h1>
							<small class="site-description">Life is a game</small>
						</div>
					</a>

					<div class="right-section pull-right">
						<a href="cart.php" class="cart"><i class="icon-cart"></i><a href="#" class="login-button">Cart</a></a>
						<a href="#" class="login-button">Login/Register</a>
						<a href="#" class="login-button">Admin</a>
						<a href="#" class="login-button">Seller</a>
						<a href="#" class="login-button">Community</a>
					</div>

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.php"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="products.php">Accessories</a></li>
							<li class="menu-item"><a href="products.php">Promotions</a></li>
							<li class="menu-item"><a href="products.php">PC</a></li>
							<li class="menu-item"><a href="products.php">Playstation</a></li>
							<li class="menu-item"><a href="products.php">Xbox</a></li>
							<li class="menu-item"><a href="products.php">Wii</a></li>
						</ul>
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</div>

			<div class="home-slider">
				<ul class="slides">
					<li data-bg-image="dummy/slide-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Grand Theft Auto V</h2>
								<small class="slide-subtitle">1795.34৳</small>
								
								<p>When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other. Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond.</p>
								
								<a href="single.php" class="button">Add to cart</a>
							</div>

							<img src="dummy/game-cover-1.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="dummy/slide-2.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">CALL OF DUTY GHOSTS</h2>
								<small class="slide-subtitle">3004.43৳</small>
								
								<p>Call of Duty: Ghosts is an extraordinary step forward for one of the largest entertainment franchises of all-time. This new chapter in the Call of Duty franchise features a new dynamic where players are on the side of a crippled nation fighting not for freedom, or liberty, but simply to survive. Fueling this all new Call of Duty experience, the franchise’s new next-gen engine delivers stunning levels of immersion and performance, all while maintaining the speed and fluidity of 60 frames-per-second across all platforms.</p>
								
								<a href="single.php" class="button">Add to cart</a>
							</div>

							<img src="dummy/game-cover-2.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="dummy/slide-3.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Need for Speed™</h2>
								<small class="slide-subtitle">2612.43৳</small>
								
								<p>Feel the thrill of the chase and the rush of escape in Need for Speed Hot Pursuit Remastered on PC. Unleash a savage sense of speed both as an outlaw and a cop in the world's hottest high-performance cars. Outsmart the heat or take down lawbreakers with the tactical weaponry at your disposal in a heart-pumping, socially competitive racing experience. Updated with enhanced visuals, cross-platform multiplayer — including the asynchronous competition powered by Autolog — plus all additional main DLC.
</p>
								
								<a href="single.php" class="button">Add to cart</a>
							</div>

							<img src="dummy/game-cover-3.jpg" class="slide-image">
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">New Products</h2>
								<a href="#" class="all">Show All</a>
							</header>

							<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-1.jpg" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Alpha Protocol</a></h3>
										<small class="price">Free</small>
										<p>Loyalty carries a price and no one knows this more than agent Michael Thorton...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-2.jpg" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Grand Theft Auto V</a></h3>
										<small class="price">1795.34৳</small>
										<p>When a young street hustler, a retired bank robber and a terrifying psychopath...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-3.jpg" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Need for Speed Rivals</a></h3>
										<small class="price">1741.33৳</small>
										<p>Own the complete Need for Speed Rivals experience. Get the full game...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-4.jpg" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Big Game Hunter</a></h3>
										<small class="price">Free</small>
										<p>Big Game Hunter is a Hunter activity on Anachronia, with requirements starting at...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>

							</div> 

						</section>

						<section>
							<header>
								<h2 class="section-title">promotion</h2>
								<a href="#" class="all">Show All</a>
							</header>

							<div class="product-list">
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-5.jpg" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Watch Dogs</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> 
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-6.jpg" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Mortal Kombat X</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> 
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-7.jpg" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Metal Gear Solid V</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> 
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php"><img src="dummy/game-8.jpg" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="single.php">Nascar '14</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="single.php" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> 
								
							</div> 

						</section>
					</div>
				</div> 
			</main> 

			<div class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Information</h3>
								<ul class="no-bullet">
									<li><a href="#">Site map</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div> 
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Consumer Service</h3>
								<ul class="no-bullet">
									<li><a href="#">Secure</a></li>
									<li><a href="#">Shipping &amp; Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Orders &amp; Returns</a></li>
									<li><a href="#">Group Sales</a></li>
								</ul>
							</div> 
						</div> 
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">My Account</h3>
								<ul class="no-bullet">
									<li><a href="#">Login/Register</a></li>
									<li><a href="#">Settings</a></li>
									<li><a href="#">Cart</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</div> 
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Join our newsletter</h3>
								<form action="#" class="newsletter-form">
									<input type="text" placeholder="Enter your email...">
									<input type="submit" value="Subsribe">
								</form>
							</div> 
						</div> 
					</div>

					<div class="colophon">
						<div class="copy">Copyright 2022 Spider Web. Designed by Team pH. All rights reserved.</div>
						<div class="social-links square">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div> 
					</div> 
				</div>
			</div> 
		</div>

		<div class="overlay"></div>

		<div class="auth-popup popup">
			<a href="#" class="close"><i class="fa fa-times"></i></a>
			<div class="row">
				<div class="col-md-6">
					
					<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div> <br>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
				</div>

				<div class="col-md-6">

					<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit1" class="btn">Register</button>
			</div> <br>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
				</div>  
			</div> 
		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>