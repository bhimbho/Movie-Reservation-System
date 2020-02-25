<?php
include "includes/header.php";
include "includes/sidebar.php";
?>

<div class="clearfix"></div>
<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">AMovie Admin Dashboard</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
<?php
$query=$conn->query("SELECT * FROM tbl_login");
$row=$query->num_rows;
$query1=$conn->query("SELECT * FROM tbl_movie");
$row1=$query1->num_rows;
?>
        <div class="contain-section dashboard_v1">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-primary">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count"><?php echo $row ?></div>
                        <h3>No of Customers</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-purple">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <div class="count"><?php echo $row1 ?></div>
                        <h3>No of Movies</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-pink">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                        <div class="count">05</div>
                        <h3>New Movies</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-inverse">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="count">43000</div>
                        <h3>Revenue</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
            </div>         
            </div>
        </div>
    </div>
</div>

    <!-- End Contain Section -->

<?php
include "includes/footer.php";
?>