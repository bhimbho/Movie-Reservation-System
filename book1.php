
<?php
include "includes/header.php";

?>
        
        <!-- Search bar -->
        
        
        <!-- Main content -->

    <section class="container" style="margin-top: 50px">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <!-- <a href="#" class="order__control-btn">Reserve</a> -->
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <!-- <div class="order-step first--step">1. What &amp; Where &amp; When</div> -->
                </div>

                              
        </section>

        <section class="container">
            <div class="col-sm-12">
               
                
                <h2 class="">Pick time:::::::</h2>
                                    

                <!-- <div class="time-select time-select--wide"> -->
                        <!-- <div class="time-select__group group--first"> -->
                            <div class="col-sm-3">
                <form action="book2.php" method="GET">
                            </div>
                            <div class="col-sm-6 ">
                                <select class="form-control" name="movie_time">
                                    <option selected>--Select Preferred Time--</option>
                                    <?php
                                        $movie_id=$_GET['movie_id'];
                                        $query=$conn->query("SELECT * FROM tbl_shows WHERE movie_id='$movie_id'");
                                        while ($row=$query->fetch_assoc()) {
                                            echo '<option value='.$row['time'].'>'.$row['time'].'</option>';
                                        }
                                    ?>
                                    
                                </select>
                                <select class="form-control" name="movie_date">
                                    <option selected>--Select Preferred Date--</option>
                                    <?php
                                        $movie_id=$_GET['movie_id'];
                                        $query=$conn->query("SELECT DISTINCT(date) FROM tbl_shows WHERE movie_id='$movie_id'");
                                        while ($row=$query->fetch_assoc()) {
                                            echo '<option value='.$row['date'].'>'.$row['date'].'</option>';
                                        }
                                    ?>
                                    
                                </select>
                                <input type="hidden" name="movie_id" value="<?php echo $movie_id ?>">
                                <button class="btn btn-warning btn-block">Next</button>
                            </div>
                           </form>
                        </div>
        
        <div class="clearfix"></div>


        <?php
        include "includes/footer.php";
        ?>
       
</body>
</html>