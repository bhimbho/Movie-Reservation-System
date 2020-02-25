<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- START GLOBAL CSS -->
    <link href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="assets/global/plugins/Waves/dist/waves.min.css" type="text/css" rel="stylesheet"/>
    <!-- END GLOBAL CSS -->

    <!-- START PAGE PLUG-IN CSS -->
    <link rel="stylesheet" href="assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- END PAGE PLUG-IN CSS -->

    <!-- START TEMPLATE GLOBAL CSS -->
    <link href="assets/pages/login/css/user_login_v2.css" type="text/css" rel="stylesheet"/>
    <!-- END TEMPLATE GLOBAL CSS -->

    <!-- Start favicon ico -->
    <link rel="icon" href="assets/favicon/prince.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/prince-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/prince-180x180.png">
    <!-- End favicon ico -->

</head>
<body>

<div class="login-background">
    <div class="login-left-section">
        <img src="assets/global/images/logo.png" alt="logo-image">
        <h2>Welcome to the Amovie Admin Dashboard</h2>
        <p>We are here to serve you better by providing the required services to you all.</p>
    </div>
    <!--  START LOGIN -->
    <div class="login-page">
        <div class="main-login-contain">
            <div class="login-form">
                <form id="form-validation" method="post" action="">
                    
                    <h4>Login to your account</h4>
                    <?php
                        require('../db/conn.php');
                        session_start();
                        if(isset($_POST['submit'])){
                            $username=$_POST['username'];
                            $pass=$_POST['password'];
                        $query=$conn->query("SELECT * FROM admin WHERE username='$username' AND password='$pass'");
                        $row=$query->num_rows;
                        if($row>0){
                            $row=$query->fetch_assoc();
                            $_SESSION['admin_id']=$row['admin_id'];
                            // $_SESSION['email']=$row['email'];
                            $_SESSION['admin']=$username;
                            header("location:Dashboard.php");
                            
                        }
                        else{
                            echo '<div class="alert alert-danger">Login Failed</div>';
                        }
                        }
                    ?>
                    <div class="form-group">
                        <input required="required" type="text" id="input-username" name="username">
                        <label class="control-label" for="input-username">Enter Username</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="password" id="input-password" name="password">
                        <label class="control-label" for="input-password">Enter Password</label><i class="bar"></i>
                    </div>

                    <div class="goto-login">
                        <div class="forgot-password-login">
                            <a href="#">
                                <i class="icon icon_lock"></i> Forgot password?
                            </a>
                        </div>
                        <button type="submit" class="btn btn-login float-button-light" name="submit">Submit</button>
                    </div>

                    <div class="social-media-section">
                        <div>
                            <a class="social-hexagon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="social-hexagon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="social-hexagon">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                        <div class="login-bottom-text">
                            <p>Don't have an account?</p>
                            <a href="register.php">Sign Up</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--  END LOGIN -->
</div>

<!-- START CORE JAVASCRIPT -->
<script src="assets/global/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/global/plugins/Waves/dist/waves.min.js"></script>
<!-- END CORE JAVASCRIPT -->

<!-- START PAGE JAVASCRIPT -->
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

    !(function ($) {
        if (typeof Waves !== 'undefined') {
            Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
            Waves.init();
        }
    })(jQuery);
</script>
<!-- END PAGE JAVASCRIPT -->

</body>
</html>