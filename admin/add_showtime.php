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
            <h2 class="page-name-title">Add Movies</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Add Movies</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Add Movie</h2>
                            <p>This adds movie for the customers to see.</p>
                        </div>
                        <div class="section-body">
                            <form action="#" method="POST">
                                <div class="col-md-6">
                                    <?php
                                    if (isset($_POST['add-movie'])) {
                                        $movie_name=$_POST['movie_name'];
                                        $time=$_POST['time'];
                                        $date=$_POST['date'];
                                        $capactiy=$_POST['capactiy'];
                                        $amount=$_POST['amount'];
                                        $scene=$_POST['scene'];
                                        $query=$conn->query("INSERT INTO tbl_shows VALUES(NULL,'$movie_name','$time','$date','$scene','$capactiy','$amount')");
                                  
                                            if($query){
                                            // echo '<script type="text/javascript">window.location.href="view-movie.php"</script>';
                                            echo "<script>alert('Movie Update')</script>";
                                            }
                                            else{
                                                echo "<script>alert('somethign wrong')</script>";
                                            }
                                        }
                                    ?>
                                    <div class="col-md-6">
                                        <label>Select Movie Name</label>
                                        <div class="form-group">
                                            <select class="form-control" name="movie_name">
                                                <option>--Select Movie--</option>
                                            <?php
                                                $query=$conn->query("SELECT * FROM tbl_movie");
                                                while ($row=$query->fetch_assoc()) {
                                                    echo "<option value=".$row['movie_id'].">".$row['movie_name']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Duration</label>
                                        <div class="form-group">
                                            <input type="text" name="time" class="form-control" placeholder="23:00">
                                          <!--  <select class="form-control">
                                                <option>--Select Time--</option>
                                                <option>09:00am</option>
                                                <option>11:00am</option>
                                                <option>1:00pm</option>
                                                <option>3:00pm</option>
                                                <option>5:00pm</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Show Date</label>
                                        <div class="form-group">
                                          <input type="date" class="form-control" name="date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Scene/Hall</label>
                                        <div class="form-group">
                                            <select type="text" class="form-control" name="scene" placeholder="Hall" required>
                                                <option selected disabled>Select Scene/Hall</option>
                                                <option value="Green Hall">Green Hall</option>
                                                <option value="Blue Hall">Blue Hall</option>
                                                <option value="Yellow Hall">Yellow Hall</option>
                                                <option value="Purple">Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Hall Capacity</label>
                                        <div class="form-group">
                                          <input type="number" class="form-control" name="capactiy">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label>Movie AMount</label>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="amount">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                            <button type="submit" class="btn btn-primary float-button-light waves-effect waves-button waves-float waves-light btn-block btn-lg" name="add-movie">Add Showtime</button>
                                        </div>
                                </div> 
                                <div class="col-md-6">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Movie Name</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                            <th>Hall/Scene</th>
                                            <th>Capacity</th>
                                        </tr>
                                         <?php
                                                $query=$conn->query("SELECT * FROM tbl_shows LEFT JOIN tbl_movie ON tbl_shows.movie_id=tbl_movie.movie_id");
                                                $count=1;
                                                while ($row=$query->fetch_assoc()) {
                                        echo "<tr>
                                            <td>".$count++."</td>
                                            <td>".$row['movie_name']."</td>
                                            <td>".$row['time']."</td>
                                            <td>".$row['date']."</td>
                                            <td>".$row['scene']."</td>
                                            <td>".$row['capacity']."</td>
                                        </tr>";
                                         }
                                            ?>
                                    </table>
                                </div>
                              
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
  <?php
  include "includes/footer.php";

  ?>
<script type="text/javascript">
    $('.dropify').dropify();
</script>
