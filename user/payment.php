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
            <h2 class="page-name-title">Payments</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Payments</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Payments</h2>
                            <p>This contains the payment made by you.</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Receipt Number</th>
                                    <th>Rate</th>
                                    <th>Total Paid</th>
                                    <th>Payment Type</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query=$conn->query("SELECT * FROM tbl_bookings WHERE user_id='$user_id'");
                                        while($row=$query->fetch_assoc()){
                                            echo " <tr>
                                                    <td>1</td>
                                                    <td>".$row['transaction_id']."</td>
                                                    <td>&#8358; ".$row['amount']."</td>
                                                    <td>".$row['total']."</td>
                                                    <td> Online Payment</td>
                                                    <td>".$row['booking_date']."</td>
                                                    </tr>";
                                        }
                                    ?>
                               
                                
                                </tbody>
                            </table>

                        </div>
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
