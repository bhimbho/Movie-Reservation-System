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
            <h2 class="page-name-title">View Movies</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">View Movies</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>View Movies</h2>
                            <p>View and delete any movie from our movie database.</p>
                        </div>
                        <div class="section-body">

                            <table class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Movie Name</th>
                                    <th>Category</th>
                                    <th>Age Restriction</th>
                                    <th>Release Date</th>
                                    <th>Date Uploaded</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query=$conn->query("SELECT * FROM tbl_movie");
                                        $count=1;
                                        while ($row=$query->fetch_assoc()) {
                                            echo '<tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$row['movie_name'].'</td>
                                    <td>'.$row['genre'].'</td>
                                    <td>'.$row['age_restriction'].'</td>
                                    <td>'.$row['release_date'].'</td>
                                    <td>'.$row['rating'].'</td>
                                    <td><a href="edit-movie.php?id='.$row['movie_id'].'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a> <a href="delete_movie.php?veri_id='.$row['movie_id'].'" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>';
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
