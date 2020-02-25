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
                            <?php
                                if(isset($_POST['add-movie'])){
                                    $movie_name=$_POST['movie-name'];
                                    $category=$_POST['category'];
                                    $desc=$_POST['desc'];
                                    $movie_date=$_POST['movie-date'];
                                    $director=$_POST['director'];
                                    $actors=$_POST['actors'];
                                    $age=$_POST['age'];
                                    $duration=$_POST['duration'];
                                    $trailer=$_POST['trailer'];
                                    $target_dir='../images/movie/';
                                    $target=$target_dir.basename($_FILES['file']['name']);
                                    $file=basename($_FILES['file']['name']);
                                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
                                    $query=$conn->query("INSERT INTO tbl_movie VALUES(NULL,'$movie_name','$category','$desc','$movie_date','$actors','$director','$age','$file','$duration','$trailer','1')");
                                    if($query){
                                            echo '<div class="alert alert-success">Saved Succesfully</div>';
                                    }
                                    else{
                                        echo '<div class="alert alert-danger">Not Saved</div>';
                                    }
                                    }
                                }
                                
                            ?>
                        </div>
                        <div class="section-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <label>Movie Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="movie-name" placeholder="Name of the Movie" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Category</label>
                                            <div class="form-group">
                                            <select class="form-control" name="category" required>   
                                                <option>Select Category</option>
                                                <option>Comedy</option>
                                                <option>Horror</option>
                                                <option>Zombie</option>
                                                <option>Action</option>
                                                <option>Adventure</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Duration</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="duration" placeholder="Duration for the movie" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Release Date</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="movie-date" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Movie Director</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="director" placeholder="Movie Director Name" required>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <label>Age Restriction</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="age" placeholder="Age" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Trailer Url</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="trailer" placeholder="Trailer Url" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Actors</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="actors" placeholder="Names of Actors" required></textarea>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <label>Desc</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="desc" placeholder="Movie Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Movie Image</label>
                                    <div class="form-group">
                                        <input class="form-control dropify" type="file" name="file"  data-validation-allowing="jpg, png" data-validation-max-size="512kb" data-validation-error-msg-size="You can not upload images larger than 512kb" data-height="250" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-button-light waves-effect waves-button waves-float waves-light btn-block btn-lg" name="add-movie">Add Movie</button>
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
