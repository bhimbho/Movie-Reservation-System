<?php 
session_start();
require('db/conn.php');
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
                <a href='index.php' class="logo">
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
                <?php
                if(isset($_SESSION['user'])){
                     echo '<div class="control-panel" style="">
                    
                    <div  id="" style="color:white; margin-right: 4px; border-radius: 0;"><i class="fa fa-user"></i> '.$_SESSION['user'].'&nbsp;</a>
                    

                    <a href="logout.php" class="btn btn-warning" style="border-radius: 0;">Logout</a>
                    <!-- <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window"></a> -->

                </div>';
                }
                else{
                echo '<div class="control-panel" style="">
                    
                    <a href="" class="btn btn-warning" id="login-btn" style="margin-right: 4px; border-radius: 0;"><i class="fa fa-sign-in-alt"></i> Login</a>
                    

                    <a href="" class="btn btn-warning" id="reg-btn" style="border-radius: 0;">Register</a>
                    <!-- <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">Book a ticket</a> -->

                </div>';
                }
                ?>
                <div class="col-md-3" id="login-here" style="">
                    <div class="alert alert-success suc">Login Successful..Redirecting</div>
                    <div class="alert alert-danger fail">Login Failed..Wrong Input</div>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" type="button" id="submit" name="login"><strong>Login</strong></button>
                        </div>
                    </form>     
                </div>
                <div class="col-md-3" id="reg-here" style="">
                    <div class="alert alert-success succ">Registration Successful</div>
                    <div class="alert alert-danger faill">Registration Failed</div>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <input type="text" name="user1" id="user1" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter Your Age">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" type="button" name="login" id="register"><strong>Register</strong></button>
                        </div>
                    </form>     
                </div>
            </div>
        </header>

        <!-- Slider -->
            <div class="bannercontainer">
                    <div class="banner">
                        <ul>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Rush.'>
                                <img alt='' src="images/slides/slide111.jpg">
                                <div class="caption slide__name margin-slider" 
                                     data-x="right" 
                                     data-y="80" 

                                     data-splitin="chars"
                                     data-elementdelay="0.1"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"

                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                                    data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                                    data-splitout="lines"
                                    data-endelementdelay="0.1"
                                    data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"

                                    data-endspeed="500"
                                    data-end="8400"
                                    data-endeasing="Back.easeIn"
                                     >
                                    RUSH
                                </div>

                                <div class="caption slide__time margin-slider sfr str" 
                                     data-x="right" 
                                     data-hoffset='-243' 
                                     data-y="186" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-end="8700"
                                     data-endeasing="Back.easeIn"
                                     >
                                     From
                                 </div>
                                <div class="caption slide__date margin-slider lfb ltb" 
                                     data-x="right" 
                                     data-hoffset='-149' 
                                     data-y="186" 
                                     data-speed="500" 
                                     data-start="2400" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-end="8200"
                                     data-endeasing="Back.easeIn"
                                     >
                                     April 18
                                 </div>
                                <div class="caption slide__time margin-slider sfr str" 
                                     data-x="right" 
                                     data-hoffset='-113' 
                                     data-y="186" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     data-end="8700"
                                     data-endeasing="Back.easeIn"
                                     >
                                     - till
                                 </div>
                                <div class="caption slide__date margin-slider lfb ltb" 
                                     data-x="right" 
                                     data-y="186" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-end="8200"
                                     data-endeasing="Back.easeIn"
                                     >
                                     November 01
                                 </div>
                                <div class="caption slide__text margin-slider customin customout" 
                                     data-x="right" 
                                     data-y="250"
                                     data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="400" 
                                     data-start="3000"
                                     data-endspeed="400"
                                     data-end="8000"
                                     data-endeasing="Back.easeIn">
                                     Two-time Academy Award winner Ron Howard, teams once again with fellow two-time Academy<br> Award nominee, writer Peter Morgan , on Rush, a spectacular big-screen re-creation of the merciless<br> 1970s rivalry between James Hunt and Niki Lauda.
                                 </div>
                                <div class="caption margin-slider skewfromright customout " 
                                     data-x="right" 
                                     data-y="324"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="400" 
                                     data-start="3300"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-end="7700"
                                     data-endeasing="Power4.easeOut">
                                     <a href="#" class="slide__link">check out cinemas &amp; time</a>
                                 </div>
                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide='Travel worldwide.
Create trip film.'>
                                <img alt='' src="images/slides/slide22.jpg">
                                 <!--<div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                                   <video class="media-element"  autoplay="autoplay" preload='none' muted="" src="video/53170154.mp4" >
                                         <source type="video/webm" src="video/53170154.webm"> 
                                         <source type="video/mp4" src="video/53170154.mp4"> 
                                         <source type="video/ogg" src="video/53170154.ogv"> 
                                    </video>
                                </div>-->

                                 <div class="caption slide__name slide__name--smaller" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-splitin="chars"
                                     data-elementdelay="0.1"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"

                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                                    data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                                    data-splitout="lines"
                                    data-endelementdelay="0.1"
                                    data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                                    data-endspeed="500"
                                   
                                    data-endeasing="Back.easeIn"
                                     >
                                    Travel, Admire, Remember.
                                </div>

                                <div class="caption slide__time position-center postion-place--one sfr stl" 
                                     data-x="left" 
                                      
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     
                                     data-endeasing="Back.easeIn">
                                     From
                                 </div>
                                <div class="caption slide__date position-center postion-place--two lfb ltb" 
                                     data-x="left"                                       
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2400" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     
                                     data-endeasing="Back.easeIn">
                                     April 18 
                                 </div>
                                <div class="caption slide__time position-center postion-place--three sfr stl" 
                                     data-x="left" 
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     
                                     data-endeasing="Back.easeIn">
                                     - till
                                 </div>
                                <div class="caption slide__date position-center postion-place--four lfb ltb" 
                                     data-x="left"
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut" 
                                     data-endspeed="400"
                                     
                                     data-endeasing="Back.easeIn">
                                     May 01
                                 </div>

                                 <div class="caption lfb slider-wrap-btn ltb" 
                                     data-x="left"
                                     data-y="310" 
                                     data-speed="400" 
                                     data-start="3300" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>
                                 </div>
                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Stop wishing. 
Start doing.'>
                                <img alt='' src="images/slides/slide33.jpg">
                                 <div class="caption slide__name slide__name--smaller slide__name--specific customin customout" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"
                                     data-endspeed="500"
                                     data-end="8600"
                                     data-endeasing="Back.easeIn"

                                     >
                                    Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span> 
                                </div>

                                  <div class="caption slide__descript customin customout" 
                                     data-x="left" 
                                     data-y="240"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="700" 
                                     data-start="2000"
                                     data-endspeed="500"
                                     data-end="8400"
                                     data-endeasing="Back.easeIn">
                                     find your best match movie with A.MOVIE
                                 </div>

                                 <div class="caption lfb customout slider-wrap-btn" 
                                     data-x="left" 
                                     data-y="310" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-endspeed="400"
                                     data-end="8000"
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
                                 </div>
                            </li>

                        </ul>
                    </div>
                </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Best choice</div>
                 <div class="col-sm-12 change--col">
                    <?php
                    $query=$conn->query("SELECT * FROM tbl_movie LIMIT 6");
                    while ($row=$query->fetch_assoc()) {
                        echo '<div class="movie-beta__item ">
                        <img alt="" src="images/movie/'.$row['image'].'" style="max-height: 280px">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">'.rand(100,10).' people voted today</span></li>
                             <li>
                                <p class="movie__time">'.$row['duration'].'</p>
                                <p>'.$row['genre'].'</p>
                             </li>
                             <li class="last-block">
                                 <a href="current_movie.php?movie_id='.$row["movie_id"].'" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>';
                    }
                    ?>
                     
                <div class="col-sm-10 col-sm-offset-1 movie-best__check">check all movies now playing</div>
            </div>
            
            <div class="clearfix"></div>


            <div class="col-sm-12">
                <h2 class="page-heading">Popular Trailer</h2>

                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 April 2019 </p>
                        <a href="single-page-left.html" class="post__title">"Thor: The Dark World" - World Premiere</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 April 2019 </p>
                        <a href="single-page-left.html" class="post__title">30th Annual Night Of Stars Presented By The Fashion Group International</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 April 2019 </p>
                        <a href="single-page-left.html" class="post__title">Hollywood Film Awards 2019</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
            </div> 
        </section>
        
        <div class="clearfix"></div>
    </div>
        <?php
        include "includes/footer.php";
        ?>
        <script type="text/javascript">
          $(document).ready(function() {
            init_Home();
          });
        </script>
        <script type="text/javascript">
            $(function(){
                $('.suc').hide();
                $('.fail').hide();
                $("#submit").click(function(){
                var username=$('#username').val();
                var password=$('#password').val();
                    // alert(username);
                    $.ajax({
                        url:'includes/login.php',
                        type: 'POST',
                        data: {username:username,password:password},
                        dataType:'',
                    success:function(response){
                        if(response=='1'){
                             $('.suc').show();
                             setTimeout(function(){location.href="index.php"} , 2000);
                        }
                        else{
                            $('.fail').show();
                        }
                    }

                    })
                })
                $('.succ').hide();
                $('.faill').hide();
                $("#register").click(function(){
                var user=$('#user1').val();
                var fname=$('#fname').val();
                var sname=$('#sname').val();
                var pass=$('#pass1').val();
                var email=$('#email').val();
                var phone=$('#phone').val();
                var age=$('#dob').val();
                    $.ajax({
                        url:'includes/register.php',
                        type: 'POST',
                        data: {user1:user,password:pass,fname:fname,sname:sname,email:email,phone:phone,age:age},
                        dataType:'',
                    success:function(response){
                        console.log(response);
                        if(response=='1'){
                             $('.succ').show();
                             // setTimeout(function(){location.href="index.php"} , 2000);
                        }
                        else{
                            $('.faill').show();
                        }
                    }

                    })
                })
            });
        </script>
      </body>
      </html>