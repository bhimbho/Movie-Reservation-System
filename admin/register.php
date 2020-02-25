<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!-- START GLOBAL CSS -->
    <link href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="assets/global/plugins/Waves/dist/waves.min.css" type="text/css" rel="stylesheet"/>
    <!-- END GLOBAL CSS -->

    <!-- START PAGE PLUG-IN CSS -->
    <link rel="stylesheet" href="assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- END PAGE PLUG-IN CSS -->

    <!-- START TEMPLATE GLOBAL CSS -->
    <link href="assets/pages/register/css/user_register_v2.css" type="text/css" rel="stylesheet"/>
    <!-- END TEMPLATE GLOBAL CSS -->

    <!-- Start favicon ico -->
    <link rel="icon" href="assets/favicon/prince.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/prince-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/prince-180x180.png">
    <!-- End favicon ico -->

</head>
<body>

<div class="register-background">
    <div class="register-left-section">
        <img src="assets/global/images/logo.png" alt="logo-image">
        <h2>Welcome to the Amovie Admin Dashboard</h2>
        <p>We are here to serve you better by providing the required services to you all.</p>
    </div>
    <!--  START REGISTER -->
    <div class="register-page">
        <div class="main-register-contain">
            <div class="register-form">
                <form id="form-validation" method="post">
                    <h4>Create a new account</h4>
                    <div class="form-group">
                        <input required="required" type="text" id="input-name" name="fname">
                        <label class="control-label" for="input-name">Enter Name</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="text" id="input-username" name="admin">
                        <label class="control-label" for="input-username">Enter Username</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="password" id="input-password" name="pass">
                        <label class="control-label" for="input-password">Enter Password</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="password" id="input-confirm" name="cpass">
                        <label class="control-label" for="input-confirm">Confirm Password</label><i class="bar"></i>
                    </div>

                    <div class="goto-register">
                        <div class="checkbox">
                            <label>
                                <input checked="checked" type="checkbox" name="check"><i class="helper"></i>I
                                agree to the Terms & Conditions.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-register float-button-light" name="register">Submit</button>
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
                        <div class="register-bottom-text">
                            <p>Have an account?</p>
                            <a href="index.php">Login </a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--  END REGISTER -->
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