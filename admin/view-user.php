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
            <h2 class="page-name-title">View Users</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">View Users</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Users</h2>
                            <p>This contains the details of the people registered on our website</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>First Name</th>
                                    <th>Second Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query=$conn->query("SELECT * FROM tbl_login");
                                        $count=1;
                                        while ($row=$query->fetch_assoc()) {
                                            echo "<tr>
                                                <td>".$count++."</td>
                                                <td>".$row['firstname']."</td>
                                                <td>".$row['lastname']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['phone']."</td>
                                                <td>".$row['date']."</td>
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
