<div class="container body">
    <div class="main_container">
            <!-- Start Loader -->
<div class="page-loader">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>
<!-- End Loader -->

<!-- Start Scroll Top -->
<a href="javascript:" id="scroll" style="display: none;"><span></span></a>
<!-- End Scroll Top -->

<!-- start Left Menu-->
<div class="col-md-3 left_color">
    <div class="left_color scroll-view">
        <div class="navbar nav_title">
            <a href="dashboard.php" class="medium-logo">
                <img src="assets/global/images/logo.png" alt="medium-logo" style="margin-top: 15px; margin-left: 50px;">
            </a>
            <a href="dashboard.php" class="small-logo">
                <img src="assets/global/images/logo.png" alt="small-logo">
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a class="waves-effect waves-light" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a class="waves-effect waves-light" href="view-user.php"><i class="fa fa-user"></i> View Users</a></li>
                    <li><a class="waves-effect waves-light" href="view-reservation.php"><i class="fa fa-shopping-cart"></i> View Reservations</a></li>
                    <li><a class="waves-effect waves-light" href="view-payment.php"><i class="fa fa-money"></i> View Payments</a></li>
                    
                    <li><a  class="waves-effect waves-light"><i class="fa fa-edit"></i> Movies <span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <li><a class="waves-effect waves-light" href="add-movie.php">Add Movie</a></li>
                            <li><a class="waves-effect waves-light" href="add_showtime.php">Add Movie Watch Time</a></li>
                            <li><a class="waves-effect waves-light" href="view-movie.php">View Movies</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-cog" aria-hidden="true"></span>
            </a>
            <a class="toggle-fullscreen" data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="fa fa-arrows-alt" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="fa fa-lock" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="fa fa-power-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<!-- End Left Menu -->

<!-- start top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                <div class="responsive-logo">
                    <a href="index.html">
                        <img src="assets/global/images/prince_logo.png" alt="main-logo">
                    </a>
                </div>
            </div>

            <div class="topbar-right">
                <div class="nav navbar-nav navbar-right">

                    <div class="header-search right-icon">
                        <form role="search" class="search-box">
                            <input placeholder="Search..." class="form-control" type="text" width="100%">
                            <a href="javascript:">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </div>

                    <div class="dropdown header-notification right-icon">
                        
                        
                    </div>

                    <div class="header-fullscreen right-icon">
                        <a href="javascript:" class="waves-effect waves-light toggle-fullscreen">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!--<div class="header-chat right-icon">
                        <a href="javascript:" class="waves-effect waves-light">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </a>
                    </div>-->

                    <div class="dropdown user-profile right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown"
                           aria-expanded="false">
                            <img src="assets/global/images/user10.jpg" alt="user">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php" class="waves-effect waves-light">
                                    <i class="fa fa-power-off text-danger" aria-hidden="true"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>
    </div>
</div>