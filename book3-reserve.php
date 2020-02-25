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
                        <a href="book3-buy.php" class="order__control-btn">Purchase</a>
                        <a href="" class="order__control-btn active">Reserve</a>
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
                        <li class="book-result__item">Tickets: <span class="book-result__count booking-ticket">3</span></li>
                        <li class="book-result__item">One item price: <span class="book-result__count booking-price">$20</span></li>
                        <li class="book-result__item">Reservation fee: <span class="book-result__count">$3</span></li>
                        <li class="book-result__item">Total: <span class="book-result__count booking-cost">$69</span></li>
                    </ul>

                    <h2 class="page-heading">Contact information</h2>
            
                    <form id='contact-info' method='post' novalidate="" class="form contact-info">
                        <div class="contact-info__field contact-info__field-mail">
                            <input type='email' name='user-mail' placeholder='Your email' class="form__mail">
                        </div>
                        <div class="contact-info__field contact-info__field-tel">
                            <input type='tel' name='user-tel' placeholder='Phone number' class="form__mail">
                        </div>
                    </form>
                    
                    <p class="reservation-message">Fill your contact information to recieve your reservation code. Reserved tickets are removed 20 minutes befor the session is due to start</p>
                
                </div>
                
                <div class="order">
                    <a href="book-final.php" class="btn btn-md btn--warning btn--wide">reserve</a>
                </div>

            </div>

        </section>
        

        <div class="clearfix"></div>

        <div class="booking-pagination">
                <a href="book2.html" class="booking-pagination__prev">
                    <p class="arrow__text arrow--prev">prev step</p>
                    <span class="arrow__info">choose a sit</span>
                </a>
                <a href="#" class="booking-pagination__next hide--arrow">
                    <p class="arrow__text arrow--next">next step</p>
                    <span class="arrow__info"></span>
                </a>
        </div>
        
        <div class="clearfix"></div>

<?php
include "includes/footer.php";
?>

</body>
</html>
