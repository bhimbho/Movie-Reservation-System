<footer class="footer-wrapper" style="">
            <section class="container">
                <div class="col-xs-5 col-md-3 footer-nav">
                    <ul class="nav-link">
                        <li><a href="movie-list.php" class="nav-link__item">Movies List</a></li>
                        <li><a href="trailer.php" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates.php" class="nav-link__item">Rates</a></li>
                    </ul>
                </div>
                
                <div class="col-xs-5 col-md-3 footer-nav">
                    <ul class="nav-link">
                        <li><a href="news-full.php" class="nav-link__item">News</a></li>
                        <li><a href="gallery.php" class="nav-link__item">Gallery</a></li>
                        <li><a href="contact.php" class="nav-link__item">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2019. All rights reserved</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // $("input").checkboxradio();
                $('#login-btn').on('click',function(e){
                    e.preventDefault();
                    $('#login-here').slideToggle();
                });
                $('#login-here').on('mouseleave',function(e){
                    e.preventDefault();
                    $('#login-here').slideUp();
                });
                $('#reg-btn').on('click',function(e){
                    e.preventDefault();
                    $('#reg-here').slideToggle();
                });
                $('#reg-here').on('mouseleave',function(e){
                    e.preventDefault();
                    $('#reg-here').slideUp();
                });
            });
            
        </script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Bootstrap 3--> 
        <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> -->

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Magnific-popup -->
        <script src="js/external/jquery.magnific-popup.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Swiper slider -->
        <script src="js/external/idangerous.swiper.min.js"></script>
        <!-- Stars rate -->
        <script src="js/external/jquery.raty.js"></script>
        
        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Twitter feed -->
        <script src="js/external/twitterfeed.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
		
	  

