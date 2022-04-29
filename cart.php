<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Cart</title>
				<link rel="icon" type="image/x-icon" href="images/logo.png">


		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700|" rel="stylesheet" type="text/css">
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
                        <a href="profile.php" class=""> <?php echo " Welcome " . $_SESSION['username']; ?> </a>
                        <a href="logout.php" class="">Logout</a>

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
							     <input type="text" name="search_text" id="search_text" placeholder="Search..." class="search-form" />




						</div> 

						<div class="mobile-navigation"></div> 
					</div> 

					<div class="breadcrumbs">
						<div class="container">
							<a href="index.php">Home</a>
							<span>Cart</span>
						</div>
					</div>
				</div> 
			</div> 
			<main class="main-content">
				<div class="container">
					<div class="page">
						








 <head>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
   <br />
   
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon"><h1>Files</h1></span>

    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>



<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>










<hr>














<?php include 'filesLogic.php';?>


    <div class="container">
      <div class="row">
        <form action="cart.php" method="post" enctype="multipart/form-data" >
          <h1>Upload File</h1>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">Upload</button>
        </form>
      </div>

      <table>
<thead>
    <th>ID &nbsp  &nbsp</th>
    <th>File Name &nbsp  &nbsp</th>
    <th>Size (in mb) &nbsp  &nbsp</th>
    <th>Downloads &nbsp  &nbsp</th>
    <th>Action &nbsp  &nbsp</th>
</thead>

<br>
<hr>
<br>

<h1>Uploaded File</h1>

<br>


<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?> &nbsp  &nbsp</td>
      <td><?php echo $file['name']; ?> &nbsp  &nbsp</td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?> &nbsp  &nbsp</td>
      <td><?php echo $file['downloads']; ?> &nbsp  &nbsp</td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
    </div>






























						
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
						<div class="copy">Copyright 2022 Spider web. Designed by Team ph. All rights reserved..</div>
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
					<h2 class="section-title">Login</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="password" placeholder="Password...">
						<input type="submit" value="Login">
					</form>
				</div> 
				<div class="col-md-6">
					<h2 class="section-title">Create an account</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="text" placeholder="Email address...">
						<input type="submit" value="register">
					</form>
				</div> 
			</div> 
		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>


