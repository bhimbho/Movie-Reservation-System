<?php
require('db/conn.php');
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:index.php");
}
else{
    $user_id=$_SESSION['user_id'];
}
?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="css/external/magnific-popup.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="css/external/idangerous.swiper.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/scrollbar.css">

        <!-- Modernizr --> 
        <script src="js/external/modernizr.custom.js"></script>
    
        <style type="text/css">
            #login-here{
                position: absolute;
                top: 60px;
                right: 0px;
                background-color: rgba(255,255,255,.6);
                z-index: 99;
                display: none;
                padding-top: 20px;
                padding-bottom: 10px;
                /*#ED9C28*/
                /*#FFD564*/
            }
            #reg-here{
                position: absolute;
                top: 60px;
                right: 0px;
                background-color: rgba(255,255,255,.6);
                z-index: 99;
                display: none;
                padding-top: 20px;
                padding-bottom: 10px;
            }
        </style>
</head>

<body>
    <div class="wrapper">
        <!-- Banner -->
        <!-- <div class="banner-top">
            <img alt='top banner' src="images/banners/bann.jpg">
        </div> -->

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
                    <img alt='logo' src="images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="news-full.php">News</a></li> -->
                        <!-- <li><a href="gallery.php">Gallery</a></li> -->
                        <!-- <li><a href="book1.php">Bookings</a></li> -->
                        <li><a href="user/dashboard.php">Dashboard</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Movies</a>
                            <ul>
                                <li class="menu__nav-item"><a href="movie-list.php">Movie List</a></li>
                                <li class="menu__nav-item"><a href="trailer.php">Trailers</a></li>
                                <li class="menu__nav-item"><a href="rates.php">Movie Rating</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li> 
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                '<div class="control-panel" style="">
                    
                    <div  id="" style="color:white; margin-right: 4px; border-radius: 0;"><i class="fa fa-user"></i> <?php echo $_SESSION['user'];?> &nbsp;</a>
                    

                    <a href="logout.php" class="btn btn-warning" style="border-radius: 0;">Logout</a>
                    <!-- <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window"></a> -->

                </div>
                <div class="col-md-3" id="login-here" style="">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" type="submit" name="login"><strong>Login</strong></button>
                        </div>
                    </form>     
                </div>
                <div class="col-md-3" id="reg-here" style="">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="cpass" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control" placeholder="Enter Your Age">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" type="submit" name="login"><strong>Register</strong></button>
                        </div>
                    </form>     
                </div>
            </div>
        </header>