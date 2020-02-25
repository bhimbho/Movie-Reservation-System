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
            <h2 class="page-name-title">Bookings</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Bookings</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Bookings</h2>
                            <p>View and cancel your bookings here.</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Movie Name</th>
                                    <th>Seat Reserved</th>
                                    <th>Movie Date</th>
                                    <th>Movie Time</th>
                                    <th>Amount Paid</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php
                                        $query=$conn->query("SELECT * FROM tbl_bookings LEFT JOIN tbl_movie ON tbl_bookings.movie_id=tbl_movie.movie_id WHERE tbl_bookings.user_id='$user_id'");
                                        while($row=$query->fetch_assoc()){
                                            echo " <tr>
                                                    <td>1</td>
                                                    <td>".$row['movie_name']."</td>
                                                    <td>".$row['seats_booked']."</td>
                                                    <td>".$row['movie_date']."</td>
                                                    <td>".$row['movie_time']."</td>
                                                    <td>&#8358; ".$row['total']."</td>
                                                    <td>".$row['booking_date']."</td>
                                                    <td><a href='#'' class='btn btn-warning'>Cancel</a> <a href='#'' class='btn btn-danger'>Delete</a></td>
                                                    </tr>";
                                        }
                                    ?>
                                </tr>
                                
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
