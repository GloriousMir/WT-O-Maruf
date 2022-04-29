<?php 

//user profile page when login proper format

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" type="image/x-icon" href="images/log.png">
</head>
<body>

    
</body>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        
        <title>Products</title>


        <link href="http://fonts.googleapis.com/css?family=Roboto:100,400,700|" rel="stylesheet" type="text/css">
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
                            <small class="site-description">Life is a game
                        </div>
                    </a>

                    <div class="right-section pull-right">
                        <h1><a href="cart.php" class="cart"><i class="icon-cart"></i>Cart</a>
                        <a href="#" class=""> <?php echo " Welcome " . $_SESSION['username']; ?> </a>
                        <a href="logout.php" class="">Logout</a></h1>

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
                            <span>Profile</span>
                        </div>
                    </div>

                </div>
            </div>
            <main class="main-content">
                <div class="container">
                    <div class="page">
                        

                            
                        </div> 
                        

<script>

    function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=350,width=500,left=100,top=100,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no, status=yes')
    }

</script>



<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>

 <h1><head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
      <tr>
        <td>ID No &nbsp &nbsp &nbsp</td>
        <td>User Name &nbsp &nbsp &nbsp</td>
        <td>Email &nbsp &nbsp &nbsp</td>


      </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><a href="update.php?id=<?php echo $row["id"]; ?>" onclick="basicPopup(this.href);return false">  &nbsp  &nbsp &nbsp  &nbsp Update</a></td>
      </tr>
            <?php
            $i++;
            }
            ?>


</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body></h1>












                        

                        <div class="pagination-bar">
                            <div class="pagination">
                                <a href="#" class="page-number"><i class="fa fa-angle-left"></i></a>
                                <span class="page-number current">1</span>
                                <a href="#" class="page-number">2</a>
                                <a href="#" class="page-number">3</a>
                                <a href="#" class="page-number">...</a>
                                <a href="#" class="page-number">12</a>
                                <a href="#" class="page-number"><i class="fa fa-angle-right"></i></a>
                            </div> 
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
                        <div class="copy">Copyright 2022 Spider web. Designed by Team ph. All rights reserved.</div>
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
            <a href="#" class="close"><i class="fa fa-close"></i></a>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Login</h2>
                    <form action="#">
                        <input type="text" placeholder="Username...">
                        <input type="password" placeholder="Password...">
                        <input type="submit" value="Login">
                    </form>
                </div> 

            </div> 
        </div> 

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        
    </body>

</html>