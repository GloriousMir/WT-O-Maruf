<?php 

// thos is a page when a user login with proper format

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
                        <a href="profile.php" class=""> <?php echo " Welcome " . $_SESSION['username']; ?> </a>
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
                            <span>Play Station Games</span>
                        </div>
                    </div>

                </div>
            </div>
            <main class="main-content">
                <div class="container">
                    <div class="page">
                        <div class="filter-bar">
                            <div class="filter">
                                <span>
                                    <label>Sort by:</label>
                                    <select name="#">
                                        <option value="#">Popularity</option>
                                        <option value="#">Highest Rating</option>
                                        <option value="#">Lowest price</option>
                                    </select>
                                </span>
                                <span>
                                    <label>Genre</label>
                                    <select name="#">
                                        <option value="#">Show All</option>
                                        <option value="#">Action</option>
                                        <option value="#">Racing</option>
                                        <option value="#">Strategy</option>
                                    </select>
                                </span>
                                <span>
                                    <label>Show:</label>
                                    <select name="#">
                                        <option value="#">8</option>
                                        <option value="#">16</option>
                                        <option value="#">24</option>
                                    </select>
                                </span>
                            </div>

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
                        
                        <div class="product-list">
                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-1.jpg" alt="Game 1"></a>
                                        </div>
                                        <h3 class="product-title"><a href="single.php">Alpha Protocol</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="single.php" class="button">Add to cart</a>
                                        <a href="single.php" class="button muted">Read Details</a>
                                    </div>
                                </div>

                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-2.jpg" alt="Game 2"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Grand Theft Auto V</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div>

                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-3.jpg" alt="Game 3"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Need for Speed rivals</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div> 

                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-4.jpg" alt="Game 4"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Big game hunter</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div> 
                                
                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-5.jpg" alt="Game 1"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Watch Dogs</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div> 
                                
                                
                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-6.jpg" alt="Game 2"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Mortal Kombat X</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div>
                                
                                
                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-7.jpg" alt="Game 3"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Metal Gear Solid V</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div>
                                
                                
                                <div class="product">
                                    <div class="inner-product">
                                        <div class="figure-image">
                                            <a href="single.php"><img src="dummy/game-8.jpg" alt="Game 4"></a>
                                        </div>
                                        <h3 class="product-title"><a href="#">Nascar '14</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
                                        <a href="#" class="button">Add to cart</a>
                                        <a href="#" class="button muted">Read Details</a>
                                    </div>
                                </div>
                                
                        </div> 

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