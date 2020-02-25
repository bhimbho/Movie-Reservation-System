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
            <h2 class="page-name-title">AMovie User Dashboard</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <?php
             $query=$conn->query("SELECT * FROM tbl_bookings WHERE user_id='$user_id'");
             $row=$query->num_rows;
             $count=0;
             while($payment_row=$query->fetch_assoc()){
                $count=$count+$payment_row['total'];
             }
             $query1=$conn->query("SELECT * FROM tbl_bookings WHERE user_id='$user_id' ORDER BY book_id DESC");
             $payment_roW2=$query1->fetch_assoc();
                
        ?>
        <div class="contain-section dashboard_v1">
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats bg-primary">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count"><?php echo $payment_roW2['total']; ?></div>
                        <h3>Last Payment Made</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats bg-purple">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <div class="count"><?php echo $row ?></div>
                        <h3>Tickets Booked</h3>
                        <a href="javascript:"><p>&nbsp;</p></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats bg-inverse">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="count"><?php echo $count ?></div>
                        <h3>All-time Payments Made</h3>
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