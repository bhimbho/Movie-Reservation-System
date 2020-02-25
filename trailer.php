<?php 
include "includes/header.php";
 ?>
        
        <!-- Search bar -->
        <div class="search-wrapper" style="margin-top: 55px; padding-top: 20px;">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">trailers</h2>

                <div class="tags-area wrap-select">
                    <div class="tags tags--unmarked">
                        <span class="tags__label">Sorted by:</span>
                            <ul>
                                <li class="item-wrap"><a href="#" class="tags__item">name</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item item-active">popularity</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item">date</a></li>
                            </ul>
                    </div>
                </div>

                <div class="trailer-wrapper">
                    <!-- Films trailers -->
                    <div class="trailer-block row">
                        <?php
                        if(isset($_GET['movie_id'])){
                        $movie_id=$_GET['movie_id'];
                        $query=$conn->query("SELECT * FROM tbl_movie WHERE movie_id='$movie_id'");
                        $row=$query->fetch_assoc();
                        ?>
                        <div class="col-sm-4 col-md-5">
                            <div class="trailer">
                                <p class="trailer__name"><?php echo $row['movie_name'] ?></p>
                                <p class="trailer__number">Trailers</p>
                                <iframe width="560" height="315" src=<?php echo $row['video_url'] ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    <?php }
                    else{
                        $query=$conn->query("SELECT * FROM tbl_movie");
                        while($row=$query->fetch_assoc()){ ?>
                        <div class="col-sm-4 col-md-5">
                            <div class="trailer">
                                <p class="trailer__name"><?php echo $row['movie_name']; ?></p>
                                <p class="trailer__number">Trailers</p>
                                <iframe width="560" height="315" src=<?php echo $row['video_url']; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <?php }
                            }
                            ?>
                       <!--  <div class="col-sm-4 col-md-3">
                            <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="trailer-sample">
                                <img alt='' src="http://placehold.it/524x320">
                            </a>
                        </div>

                        <div class="col-sm-4 col-md-3">
                            <a href='https://www.youtube.com/watch?v=Y5AehBA3IsE' class="trailer-sample">
                                <img alt='' src="http://placehold.it/524x320">
                            </a>
                        </div>

                        <div class="col-md-3 hidden-sm">
                            <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="trailer-sample">
                                <img  alt='' src="http://placehold.it/524x320">
                            </a>
                        </div> -->

                      <!--   <a href="#" class="trailer-btn">
                            <span class="btn-circled"></span>
                        </a>

                        <div class="hidden-content">
                            <div class="col-sm-4 col-md-3">
                                <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="trailer-sample">
                                    <img alt='' src="http://placehold.it/524x320">
                                </a>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <a href='https://www.youtube.com/watch?v=Y5AehBA3IsE' class="trailer-sample">
                                    <img alt='' src="http://placehold.it/524x320">
                                </a>
                            </div>

                            <div class="col-md-3 hidden-sm">
                                <a href='https://www.youtube.com/watch?v=Y5AehBA3IsE' class="trailer-sample">
                                    <img  alt='' src="http://placehold.it/524x320">
                                </a>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="trailer-sample">
                                    <img alt='' src="http://placehold.it/524x320">
                                </a>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="trailer-sample">
                                    <img alt='' src="http://placehold.it/524x320">
                                </a>
                            </div>
                        </div>
 -->
                    </div>
                    <!--end films trailers-->


                </div>

                <!-- <div class="pagination paginatioon--full">
                        <a href='#' class="pagination__prev">prev</a>
                        <a href='#' class="pagination__next">next</a>
                </div>
 -->
            </div>
        </section>
        
        <div class="clearfix"></div>

<?php
include "includes/footer.php";
?>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_Trailer();
            });
		</script>

</body>
</html>
