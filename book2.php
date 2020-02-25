<?php
include "includes/header.php";
?>
        
        <!-- Search bar -->
        
        
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container" style="margin-top: 50px">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">Finalize Booking</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info">
                    <?php
                        $movie_id=$_GET['movie_id'];
                        $movie_date=$_GET['movie_date'];
                        $movie_time=$_GET['movie_time'];
                        $query=$conn->query("SELECT * FROM tbl_shows LEFT JOIN tbl_movie ON tbl_shows.movie_id=tbl_movie.movie_id WHERE tbl_shows.movie_id='$movie_id'");
                        $row=$query->fetch_assoc();
                        $counted=0;
                        $query_check=$conn->query("SELECT * FROM tbl_bookings WHERE movie_id='$movie_id' AND movie_date='$movie_date' AND movie_time='$movie_time'");
                        while($row_check=$query_check->fetch_assoc()){
                            $counted=$counted+$row_check['seats_booked'];
                        }
                        // echo $row_check;
                        $diff=($row['capacity'])-$counted; //get the booked sit
                            echo '<h2 >Scene/Hall Name: <span class="badge" style="font-size: 60px !important;"> '.$row['scene'].'</span> Seat Capacity Left: <span class="badge" id="diff" style="font-size: 60px !important;"> '.$diff.'</span></h2>';
                    ?>
                    <ul>
                        <li class="sits-state sits-price--middle">Not available</li>
                        <li class="sits-state sits-state--your">Available</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <form method="get" action="book3-buy.php">
                    <table class="table table-striped table-bordered">
                        <tr style="background-color: black; color: white;">
                            <th>Movie Title</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Number of Seats</th>
                            <!-- <th>Action</th> -->
                        </tr>
                        <tr class="table table-hover" style="text-align: left">
                            <td><?php echo $row['movie_name'] ?></td>
                            <td ><?php echo $row['amount'] ?></td>
                            <td><?php echo $_GET['movie_date'] ?></td>
                            <td><?php echo $_GET['movie_time'] ?></td>
                            <td><input class="form-control col-md-2" type="number" name="seats" value="1" id="seatno"></td>
                            <!-- <td><button class="btn btn-danger">Checkout</button></td> -->
                            <input type="hidden" name="amount" id="amount" value=<?php echo $row['amount'] ?>>
                            <input type="hidden" name="movie_time" value=<?php echo $_GET['movie_time'] ?>>
                            <input type="hidden" name="movie_date" value=<?php echo $_GET['movie_date'] ?>>
                            <input type="hidden" name="movie_id" value=<?php echo $_GET['movie_id'] ?>>
                            <input type="hidden" name="scene" value=<?php echo $row['scene'] ?>>
                            <!-- <input type="hidden" name="seats" id="seats" value=> -->
                        </tr>
                        <tr class="table table-hover" style="text-align: left">
                            <td style="border-left: solid transparent 2px !important; border-bottom: solid transparent 2px !important;" colspan="4"></td>
                            
                            <td><h4>Total: <span id="total"></span>  <button class="btn btn-danger btn-lg">Checkout>></button></h4></td>
                            <input type="hidden" name="total" id="total1" value="">
                        </tr>

                        
                            
                        </form>
                    </table>
                    <!-- <div class="sits-anchor">screen</div> -->

                    
                </div>
            </div>
            
           

            </div>
        </section>
        </div>
        
        

       

            <div class="booking-pagination booking-pagination--margin">
                    <a href="book1.php" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </a>
                    <a href="book3-buy.php" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </a>
            </div>
        </form>
        
        <div class="clearfix"></div>
        <?php
        include "includes/footer.php";
        ?>
        <script type="text/javascript">
             $(document).ready(function() {
                var diff=parseInt($('#diff').text());
                var amount=$('#amount').val();
                   $('#total').text(amount);
                   $('#total1').val(amount);
                $(this).change(function(){
                    var seatno=parseInt($('#seatno').val());
                    var sum= seatno*amount;
                   $('#total').text(sum);
                   $('#total1').val(sum);
                   $('#seats').val(seatno);
                   if(seatno>diff){
                        alert("Selected Number of Seats not available");
                        // $('#seatno').attr("disabled",true);
                        $('#seatno').val(seatno-1);
                        $('#total1').val(sum-amount);
                        $('#total').text(sum-amount);
                   }
                });
                

            });
        </script>
    </body>
    </html>
        