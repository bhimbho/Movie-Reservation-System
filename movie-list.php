<?php
include "includes/header.php";
?>
        
        <!-- Search bar -->
        <div class="search-wrapper" style="margin-top: 55px; padding-top: 20px;">
            <div class="container container--add">
                <form id='search-form' method='post' class="search">
                    <input type="text" class="search__field" placeholder="Search" name="search">
                    <select id="search-sort" class="search__sort" tabindex="0" name="sel">
                        <option value="movie_name" selected='selected'>By title</option>
                        <option value="release_date">By year</option>
                        <option value="directors">By producer</option>
                        <option value="actors">By Actor</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button" name="confirm">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">Movies</h2>
                
                <div class="movie movie--preview movie--full release">
                <?php
                if(isset($_POST['confirm'])){
                    $search_value=$_POST['search'];
                    $sel=$_POST['sel'];
                    $query=$conn->query("SELECT * FROM tbl_movie WHERE $sel LIKE '%$search_value%'");
                    while($row=$query->fetch_assoc()){
                         echo '<div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="movie__images">
                                <img alt="" src="images/movie/'.$row["image"].' " style="max-height: 260px !important">
                            </div>
                            <div class="movie__feature">
                                <a href="#" class="movie__feature-item movie__feature--comment">123</a>
                                <a href="#" class="movie__feature-item movie__feature--video">7</a>
                                <a href="#" class="movie__feature-item movie__feature--photo">352</a>
                            </div>
                    </div>

                    <div class="col-sm-8 col-md-9 col-lg-9 movie__about">
                            <a href="movie-page-full.html" class="movie__title link--huge">'.$row['movie_name'].'</a>

                            <p class="movie__time">'.$row['duration'].'</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#">'.$row['genre'].'</a></p>
                            <p class="movie__option"><strong>Release date: </strong>'.$row['release_date'].'</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#">Jon Turteltaub</a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#">'.$row['actors'].'</p>
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#">'.$row['age_restriction'].'</a></p>

                            <div class="movie__btns">
                                <a href="book1.php?movie_id='.$row['movie_id'].'" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this movie</span></a>
                                <a href="trailer.php" class="watchlist">View Trailer</a>
                            </div>

                            <div class="preview-footer">
                                <div class="movie__rate"><div class="score"></div><span class="movie__rate-number">170 votes</span> <span class="movie__rating">5.0</span></div>
                            </div>
                    </div>';
                    }
                }
                else{
                    $query=$conn->query("SELECT * FROM tbl_movie");
                    while($row=$query->fetch_assoc()){
                    if($row){
                        echo '<div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="movie__images">
                                <img alt="" src="images/movie/'.$row["image"].'" style="max-height: 260px !important">
                            </div>
                            <div class="movie__feature">
                                <a href="#" class="movie__feature-item movie__feature--comment">123</a>
                                <a href="#" class="movie__feature-item movie__feature--video">7</a>
                                <a href="#" class="movie__feature-item movie__feature--photo">352</a>
                            </div>
                    </div>

                    <div class="col-sm-8 col-md-9 col-lg-9 movie__about">
                            <a href="movie-page-full.html" class="movie__title link--huge">'.$row['movie_name'].'</a>

                            <p class="movie__time">'.$row['duration'].'</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#">'.$row['genre'].'</a></p>
                            <p class="movie__option"><strong>Release date: </strong>'.$row['release_date'].'</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#">Jon Turteltaub</a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#">'.$row['actors'].'</p>
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#">'.$row['age_restriction'].'</a></p>

                            <div class="movie__btns">
                                <a href="book1.php?movie_id='.$row['movie_id'].'" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this movie</span></a>
                                <a href="trailer.php?movie_id='.$row['movie_id'].'" class="watchlist">View Trailer</a>
                            </div>

                            <div class="preview-footer">
                                <div class="movie__rate"><div class="score"></div><span class="movie__rate-number">170 votes</span> <span class="movie__rating">5.0</span></div>
                            </div>
                    </div>';
                    }
                }
            }
                ?>
                    </div>
                    <!-- end time table-->

                </div>
                <!-- end movie preview item -->

               
                <div class="coloum-wrapper">
                    <div class="pagination paginatioon--full">
                            <a href='#' class="pagination__prev">prev</a>
                            <a href='#' class="pagination__next">next</a>
                    </div>
                </div>

            </div>

        </section>
        
        <div class="clearfix"></div>

<?php
include "includes/footer.php";
?>
		
<script type="text/javascript">
    $(document).ready(function() {
        init_MovieList();
    });
</script>

</body>
</html>
