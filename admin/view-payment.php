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
            <h2 class="page-name-title">View Payment</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">View Payment</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Payments</h2>
                            <p>This contains the payment made by our customers.</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Money Paid</th>
                                    <th>Receipt ID</th>
                                    <th>Ticket Bought</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=1;
                                    $total=0;
                                        $query=$conn->query("SELECT * FROM tbl_bookings LEFT JOIN tbl_login ON tbl_bookings.user_id=tbl_login.user_id LEFT JOIN tbl_movie ON tbl_bookings.movie_id=tbl_movie.movie_id");
                                        $count=1;
                                        while ($row=$query->fetch_assoc()) 
                                             { $total=$total + $row['total'];?>
                                <tr>
                                    <td><?php echo $count++?></td>
                                    <td><?php echo $row['username']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['total']?></td>
                                    <td><?php echo $row['transaction_id']?></td>
                                    <td><?php echo $row['seats_booked']?></td>
                                    <td><?php echo $row['booking_date']?></td>
                                </tr>
                               <?php }?>
                                </tbody>
                            </table>

                        </div>
                        <h1>Total Revenue Generated:<span class="badge badge-info" style="font-size: 36pt;"> &#8358;<?php echo $total?></span></h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include "includes/footer.php";
    ?>
<script>
    $(document).ready(function() {
        $('.datatable-default').DataTable();
    });
</script>
<!-- End page js -->
