<?php
include "includes/header.php";
?>
        <!-- Search bar -->
<?php
  if(isset($_GET['reference'])){
$ref=$_GET['reference'];
$amount=$_GET['amount'];
$amt=$_GET['amt']; //amount per seat
$seats=$_GET['seats'];
$movie_date=$_GET['movie_date'];
$movie_time=$_GET['movie_time'];
$movie_id=$_GET['movie_id'];
$check=$conn->query("SELECT * FROM tbl_movie WHERE movie_id='$movie_id'");
$row_check=$check->fetch_assoc();
$checker=$conn->query("SELECT * FROM tbl_bookings WHERE transaction_id='$ref'");
$row_checker=$checker->num_rows;
if($row_checker<1){
    $query=$conn->query("INSERT INTO tbl_bookings VALUES (NULL,'$ref','$seats','$amt','$amount','$movie_date','$movie_time','$movie_id','$user_id',NOW())");
        if($query){
            // $a=true;
            echo "string";
        }
        else{
            // $a=false;
            echo '<script type="text/javascript">
    alert("aaaaaa");
</script>';
        }
} 
}

?>     
        
        <!-- Main content -->

        <section class="container" style="margin-top: 50px">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Thank you <br><span class="order__descript">you have successfully purchased tickets</span></p>
                </div>

                <div class="ticket">
                    <div class="ticket-position">
                        <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                        <div class="ticket__inner">

                            <div class="ticket-secondary">
                                <span class="ticket__item">Trasanction/Ticket number <strong class="ticket__number"><?php  echo $_GET['reference']?></strong></span>
                                <span class="ticket__item ticket__date"><?php  echo $_GET['movie_date']?></span>
                                <span class="ticket__item ticket__time"><?php  echo $_GET['movie_time']?></span>
                                <span class="ticket__item">Venue: <span class="ticket__cinema">A-Movie World</span></span>
                                <!-- <span class="ticket__item">Hall: <span class="ticket__hall">Visconti</span></span> -->
                                <span class="ticket__item ticket__price">Price Per Seat: <strong class="ticket__cost">&#8358;<?php  echo $_GET['amt']?></strong></span>
                                <span class="ticket__item ticket__price">Total Price: <strong class="ticket__cost">&#8358;<?php  echo $_GET['amount']?></strong></span>
                            </div>

                            <div class="ticket-primery">
                                <span class="ticket__item ticket__item--primery ticket__film">Film<br><strong class="ticket__movie"><?php  echo $row_check['movie_name']?></strong></span>
                                <span class="ticket__item ticket__item--primery">Reserved Tickets: <span class="ticket__place"><?php  echo $_GET['seats']?></span></span>
                                <span class="ticket__item ticket__item--primery">Hall Type: <span class="ticket__place"><?php  echo $_GET['scene'].' Hall'?></span></span>
                            </div>


                        </div>
                        <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                    </div>
                </div>

                <div class="ticket-control">
                    <a href="#" class="watchlist list--download">Download</a>
                    <a href="#" class="watchlist list--print" id="print">Print</a>
                </div>

            </div>
        </section>
        
        <div class="clearfix"></div>

<?php
include "includes/footer.php";
?>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.top-scroll').parent().find('.top-scroll').remove();
            });
            $(document).ready(function() {
                $('#print').click(function(e){
                    e.preventDefault();
                    window.print();
                    
                });
            });
        </script>

</body>
</html>
