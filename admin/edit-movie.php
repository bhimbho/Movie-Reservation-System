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
                                <div class="col-md-8">
                                    <?php
                                    $id=$_GET['id'];
                                    $query=$conn->query("SELECT * FROM tbl_movie WHERE movie_id='$id'");
                                    $row=$query->fetch_assoc();
                                    if(isset($_POST['add-movie'])){
                                        $movie_name=$_POST['movie-name'];
                                        $category=$_POST['category'];
                                        $duration=$_POST['duration'];
                                        $movie_date=$_POST['movie-date'];
                                        $director=$_POST['director'];
                                        $age=$_POST['age'];
                                        $actors=$_POST['actors'];
                                        $query=$conn->query("UPDATE tbl_movie SET movie_name='$movie_name', genre='$category',duration='$duration',release_date='$movie_date',directors='$director',age_restriction='$age', actors='$actors' WHERE movie_id='$id'");
                                            if($query){
                                            echo '<script type="text/javascript">window.location.href="view-movie.php"</script>';
                                            echo "<script>alert('Movie Update')</script>";
                                            }
                                            else{
                                                echo "<script>alert('somethign wrong')</script>";
                                            }
                                                                                }
                                    ?>
                                    <div class="col-md-6">
                                        <label>Movie Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="movie-name" value="<?php echo $row['movie_name']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Category</label>
                                            <div class="form-group">
                                            <select class="form-control" name="category" required>   
                                                <option value=<?php echo $row['movie_name']?>><?php echo $row['movie_name']?></option>
                                                <option value="Comedy">Comedy</option>
                                                <option value="Horror">Horror</option>
                                                <option value="Zombie">Zombie</option>
                                                <option value="Action">Action</option>
                                                <option value="Adventure">Adventure</option>
                                            </select>
                                        </div>  

                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Duration</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="duration" value="<?php echo $row['duration']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Release Date</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="movie-date" value="<?php echo $row['release_date']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Directors</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="director" value="<?php echo $row['directors']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Age Restriction</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="age" value="<?php echo $row['age_restriction']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Actors</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="actors" value="<?php echo $row['actors']?>" required></textarea>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <label>Movie Image</label>
                                    <div class="form-group">
                                        <div class="col-md-12"><img src="../images/movie/<?php echo $row['image']?>" height="250px"></div>
                                        <!-- <div class="col-md-6">
                                        <input class="form-control dropify" type="file" name="movie-image" data-validation-allowing="jpg, png" data-validation-max-size="512kb" data-validation-error-msg-size="You can not upload images larger than 512kb" data-height="250" required>
                                    
                                    </div> -->
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-button-light waves-effect waves-button waves-float waves-light btn-block btn-lg" name="add-movie">Update Movie</button>
                                </div>
                            </form>
                        </div>
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
