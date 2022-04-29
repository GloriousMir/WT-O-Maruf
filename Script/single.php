
								
<?php 

include 'config.php';


session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: cart.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: cart.php");
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
		
		<title>Need for Speed Rivals</title>

		<link rel="icon" type="image/x-icon" href="images/logo.png">


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="style.css">
		


	</head>


	<body>
		
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
						<a href="cart.php" class="cart"><i class="icon-cart"></i>Cart</a>
						<a href="index.php" class="">Home</a>
						<a href="#" class="login-button">Admin</a>
						<a href="#" class="login-button">Seller</a>
						<a href="#" class="login-button">Blog</a>
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

					<div class="breadcrumbs">
						<div class="container">
							<a href="index.php">Home</a>
							<a href="products.php">Play Station Games</a>
							<span>Need for Speed Rivals</span>
						</div>
					</div>
				</div>
			</div>
			
			<main class="main-content">
				<div class="container">
					<div class="page">
						
						<div class="entry-content">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="product-images">
										<figure class="large-image">
											<a href="dummy/image-1.jpg"><img src="dummy/single-game-cover.jpg" alt=""></a>
										</figure>
										<div class="thumbnails">
											<a href="dummy/image-2.jpg"><img src="dummy/small-thumb-1.jpg" alt=""></a>
											<a href="dummy/image-3.jpg"><img src="dummy/small-thumb-2.jpg" alt=""></a>
											<a href="dummy/image-4.jpg"><img src="dummy/small-thumb-3.jpg" alt=""></a>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
									<h2 class="entry-title">Need for Speed Rivals</h2>
									<small class="price">1741.33৳</small>

									<p>6 additional packs — Get the Simply Jaguar Complete Pack, the Ferrari Edizioni Speciali Complete Pack, the Concept Lamborghini Complete Pack, the Koenigsegg Agera One, the Complete Movie Pack, and the Loaded Garage Pack.
</p>
									<p>Race with friends — Imagine your race and your friend’s pursuit colliding, creating a world where no 2 events feel the same. Don’t want to play with others? Simply choose to make Redview County yours alone and dominate the advanced Racer and Cop AI.</p>

									<p>High-stakes rivalry — Racers are lone wolves out for glory, driving agile cars built for high-speed racing and epic chases. Cops work in teams to hunt down and bust racers using the full power of the police force. Switch roles whenever you like, and watch the stakes grow through a new scoring system that puts your speed points on the line.</p>

									<p>Your car, your identity — Personalize your cars with performance and style modifications. Power up your car with the latest upgrades in pursuit technology and personalize your bodywork with fresh paint jobs, liveries, custom license plates, rims, and decals to show off your car to the world.</p>

									<p>Pursuit and evasion tech — Use the latest pursuit tech and modifications to change your pursuit or escape strategy on the fly. Racers evade Cops using turbo bursts, jammers, and electromagnetic pulses. Cops will be armed for aggressive busts, deploying shockwaves, spike strips, and calling in police roadblocks or helicopter support.</p>

									<div class="addtocart-bar">
										<form action="#">
											<label for="#">Quantity</label>
											<select name="#">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
											<a href="#" class="login-button">Add to cart</a>
										</form>

										<div class="social-links square">
											<strong>Share</strong>
											<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
											<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
											<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<section>
							<header>
								<h2 class="section-title">Similiar Product</h2>
							</header>
							<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<img src="dummy/game-1.jpg" alt="Game 1">
										</div>
										<h3 class="product-title"><a href="#">Alpha Protocol</a></h3>
										<small class="price">$20.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="#" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<img src="dummy/game-2.jpg" alt="Game 2">
										</div>
										<h3 class="product-title"><a href="#">Grand Theft Auto V</a></h3>
										<small class="price">$20.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="#" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<img src="dummy/game-3.jpg" alt="Game 3">
										</div>
										<h3 class="product-title"><a href="#">Need for Speed rivals</a></h3>
										<small class="price">$20.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="#" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> 
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<img src="dummy/game-4.jpg" alt="Game 4">
										</div>
										<h3 class="product-title"><a href="#">Big game hunter</a></h3>
										<small class="price">$20.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="#" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div>
								
							</div> </section>

						
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