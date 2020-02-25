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
                        <a href="" class="order__control-btn active">Purchase</a>
                        <a href="book3-reserve.php" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step order-step--disable">2. Choose a sit</div>
                    <div class="order-step third--step">3. Check out</div>
                </div>

            <div class="col-sm-12">
                <div class="checkout-wrapper">
                    <h2 class="page-heading">price</h2>
                    <ul class="book-result">
                        <li class="book-result__item">Tickets: <span class="book-result__count booking-ticket"><?php echo $_GET['seats']?></span></li>
                        <li class="book-result__item">One item price: <span class="book-result__count booking-price">&#8358;<?php echo $_GET['amount']?></span></li>
                        <li class="book-result__item">Total: <span class="book-result__count booking-cost">&#8358;<?php echo $_GET['total']?></span></li>
                    </ul>

                    <h2 class="page-heading">Choose payment method</h2>
                    <div class="payment">
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/stack.png" width="340px">
                        </a>
                    </div>
                
                </div>
                
                <div class="order">
                    <button class="btn btn-md btn--warning btn--wide" onclick="payWithPaystack()">purchase</button>
                </div>

            </div>

        </section>
        

        <div class="clearfix"></div>

        
        <div class="clearfix"></div>

        <?php
        include "includes/footer.php";
        ?>
        <script src="paystack.js"></script>
   <script>
  function payWithPaystack(){
    var amount='<?php echo $_GET["total"]; ?>';
    var movie_date='<?php echo $_GET["movie_date"]; ?>';
    var movie_time='<?php echo $_GET["movie_time"]; ?>';
    var movie_id='<?php echo $_GET["movie_id"]; ?>';
    var scene='<?php echo $_GET["scene"]; ?>';
    var seats='<?php echo $_GET["seats"]; ?>';
    var amt='<?php echo $_GET["amount"]; ?>';
    new_amount='<?php echo $_GET["total"]; ?>'+"00";
    var handler = PaystackPop.setup({
      key: '',
      email: '<?php echo $_SESSION["email"]; ?>',
      amount: new_amount,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                cart: "777",
                
            }
         ]
      },
      callback: function(response){
          alert('Payment Successful. transaction ref is ' + response.reference);
          window.location.href = "book-final.php?reference="+response.reference+"&amount="+amount+"&movie_date="+movie_date+"&movie_time="+movie_time+"&seats="+seats+"&movie_id="+movie_id+"&amt="+amt+"&scene="+scene;
         
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>