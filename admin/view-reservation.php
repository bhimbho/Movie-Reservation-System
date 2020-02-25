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
            <h2 class="page-name-title">View Reservations</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">View Reservations</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Reservations</h2>
                            <p>This contains the reservations made by our customers.</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Ticket ID</th>
                                    <th>Seat Reserved</th>
                                    <th>Movie</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query=$conn->query("SELECT * FROM tbl_bookings LEFT JOIN tbl_login ON tbl_bookings.user_id=tbl_login.user_id LEFT JOIN tbl_movie ON tbl_bookings.movie_id=tbl_movie.movie_id");
                                        $count=1;
                                        while ($row=$query->fetch_assoc()) {?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $row['username']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td>AET000<?php echo $row['book_id']?></td>
                                    <td><?php echo $row['seats_booked']?></td>
                                    <td><?php echo $row['movie_name']?></td>
                                    <td><?php echo $row['booking_date']?></td>
                                </tr>
                                <?php }?>
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
