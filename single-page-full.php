<?php
include "includes/header.php";
?>
        
        <!-- Search bar -->
        <div class="search-wrapper">
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
                <h2 class="page-heading">Single post</h2>

                <div class="post">
                    <div class="post__preview">
                        <div class="swiper-container">
                          <div class="swiper-wrapper">
                              <!--First Slide-->
                              <div class="swiper-slide" data-text='Mauris gravida ipsum vitae libero eget dignissim ipsum egestas.'> 
                                 <img alt='' src="http://placehold.it/1600x600">
                              </div>
                              
                              <!--Second Slide-->
                              <div class="swiper-slide" data-text='Natalie Zea at Amazon Studios Launch Party for "Alpha House" and "Betas"'>
                                 <img alt='' src="http://placehold.it/1600x600">
                              </div>
                              
                              <!--Third Slide-->
                              <div class="swiper-slide" data-text='Aliquam cursus porta porttitor. Donec faucibus risus vitae porta tincidunt.'> 
                                 <img alt='' src="http://placehold.it/1600x600">
                              </div>
                          </div><!-- end swiper wrapper-->
                        </div><!-- end swiper container -->

                        <a class="arrow-left no-hover" href="#"><span class="slider__info"></span></a> 
                        <a class="arrow-right" href="#"><span class="slider__info"></span></a>
                    
                    </div>

                    <h1>Donec eu mollis augue, ut egestas leo (h1)</h1>
                    <p class="post__date">29 October 2013 </p>

                    <div class="wave-devider"></div>

                    <p>Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. <a href="#" class="link--text">Text link sample</a>. Proin accumsan diam vel nulla ultrices congue.</p> 

                    <p>Phasellus at faucibus nisi. Nullam tincidunt sapien leo, et sodales mauris placerat vulputate. Ut pulvinar, dolor viverra pulvinar scelerisque, nisi tellus elementum libero, porta rutrum dui massa bibendum nisl. Donec viverra mi sit amet massa commodo, ullamcorper sollicitudin quam laoreet. <a href="#" class="link--text">Text link hover sample</a>. Aliquam cursus porta porttitor. Donec faucibus risus vitae porta tincidunt. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. </p>

                    <p>Proin felis lorem, posuere ut nunc et, dapibus dapibus augue. Suspendisse nunc tortor, sollicitudin sit amet porttitor vel, dignissim vel lorem. Vivamus vel varius tellus, ut placerat tortor. Morbi eu eros cursus, mattis massa eget, vulputate dolor. Nullam nec leo et odio condimentum iaculis eleifend a nisi. Nullam est velit, porta suscipit arcu quis, varius tristique tortor. Aliquam et libero sapien. Proin in dictum elit, quis ornare tellus. Ut consequat turpis id urna dignissim, non mattis velit eleifend. Ut lacinia egestas dolor. Aliquam vitae bibendum est. </p>

                    <div class="col-sm-12 col-md-6">
                        <blockquote class="quote quote--intext">
                            If it were easy, <br> everyone would do it. 
                            <small class="quote__author"><span class="quote__author-name">Loki, Thor: The Dark World</span></small>
                        </blockquote>
                    </div>

                    <p>Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. </p>

                    <p>Phasellus at faucibus nisi. Nullam tincidunt sapien leo, et sodales mauris placerat vulputate. Ut pulvinar, dolor viverra pulvinar scelerisque, nisi tellus elementum libero, porta rutrum dui massa bibendum nisl. Donec viverra mi sit amet massa commodo, ullamcorper sollicitudin quam laoreet. Aliquam cursus porta porttitor. Donec faucibus risus vitae porta tincidunt. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. </p>

                    <p>Proin felis lorem, posuere ut nunc et, dapibus dapibus augue. Suspendisse nunc tortor, sollicitudin sit amet porttitor vel, dignissim vel lorem. Vivamus vel varius tellus, ut placerat tortor. Morbi eu eros cursus, mattis massa eget, vulputate dolor. Nullam nec leo et odio condimentum iaculis eleifend a nisi. Nullam est velit, porta suscipit arcu quis, varius tristique tortor. Aliquam et libero sapien. Proin in dictum elit, quis ornare tellus. Ut consequat turpis id urna dignissim, non mattis velit eleifend. Ut lacinia egestas dolor. Aliquam vitae bibendum est. </p>

                    <h2>Etiam mi tortor, suscipit in blandit vitae, dignissim vel magna (h2)</h2>
                    <p>Donec viverra mi sit amet massa commodo, ullamcorper sollicitudin quam laoreet. Aliquam cursus porta porttitor. Donec faucibus risus vitae porta tincidunt. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. </p>

                    <p class="col-sm-6 text--coloum"><strong>Interdum et malesuada fames ac ante ipsum primis</strong> in faucibus. Quisque fermentum vel ipsum tincidunt interdum. Mauris sed nisi quis velit aliquam ultrices ac vel odio. Vivamus vehicula lacus eu nisl eleifend porta. Sed mollis quis felis et luctus. Quisque laoreet mauris condimentum dolor cursus, in condimentum massa volutpat. Vivamus vitae nisl pulvinar, luctus est eget, accumsan tellus. </p>

                    <p class="col-sm-5 text--coloum"><strong>Nam pharetra sapien metus, in luctus massa</strong> dignissim id. Nam eu luctus eros, ac malesuada neque. Donec gravida orci sit amet turpis bibendum, nec imperdiet sem vehicula. Nullam viverra mauris eu lobortis tristique. Pellentesque quis fermentum orci. Nulla viverra viverra lorem in tincidunt. Maecenas quis cursus augue. </p>

                    <div class="clearfix"></div>

                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit (h3)</h3>
                    <p>In lobortis ac neque in eleifend. Maecenas magna justo, malesuada ac aliquet at, egestas et nibh. Fusce rutrum ligula tortor, a eleifend nisi lobortis sit amet. Morbi vulputate mollis nibh, quis malesuada enim eleifend egestas. Maecenas tincidunt dapibus lacus, id dapibus quam bibendum venenatis.</p>

                    <div class="post__images post__images--right col-sm-6 pull-right">
                        <img alt='' src="http://placehold.it/810x550">
                    </div>

                    <p>In lobortis ac neque in eleifend. Maecenas magna justo, malesuada ac aliquet at, egestas et nibh. Fusce rutrum ligula tortor, a eleifend nisi lobortis sit amet. Morbi vulputate mollis nibh, quis malesuada enim eleifend egestas. Maecenas tincidunt dapibus lacus, id dapibus quam bibendum venenatis.</p>
                    
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fermentum vel ipsum tincidunt interdum. Mauris sed nisi quis velit aliquam ultrices ac vel odio. Vivamus vehicula lacus eu nisl eleifend porta. Sed mollis quis felis et luctus. Quisque laoreet mauris condimentum dolor cursus, in condimentum massa volutpat. Vivamus vitae nisl pulvinar, luctus est eget, accumsan tellus. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. In lobortis ac neque in eleifend. </p>

                    <p>Maecenas magna justo, malesuada ac aliquet at, egestas et nibh. Fusce rutrum ligula tortor, a eleifend nisi lobortis sit amet. Morbi vulputate mollis nibh, quis malesuada enim eleifend egestas. Maecenas tincidunt dapibus lacus, id dapibus quam bibendum venenatis.</p>

                    <div class="post__images post__images--left col-sm-6 pull-left">
                        <img alt='' src="http://placehold.it/810x550">
                    </div>

                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fermentum vel ipsum tincidunt interdum. Mauris sed nisi quis velit aliquam ultrices ac vel odio. Vivamus vehicula lacus eu nisl eleifend porta. Sed mollis quis felis et luctus. Quisque laoreet mauris condimentum dolor cursus, in condimentum massa volutpat. Vivamus vitae nisl pulvinar, luctus est eget, accumsan tellus. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. In lobortis ac neque in eleifend. </p>

                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fermentum vel ipsum tincidunt interdum. Mauris sed nisi quis velit aliquam ultrices ac vel odio. Vivamus vehicula lacus eu nisl eleifend porta. Sed mollis quis felis et luctus. Quisque laoreet mauris condimentum dolor cursus, in condimentum massa volutpat. Vivamus vitae nisl pulvinar, luctus est eget, accumsan tellus. Sed egestas elementum quam sed fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque posuere suscipit tristique. In lobortis ac neque in eleifend. </p>


                    <h4>Proin felis lorem, posuere ut nunc et, dapibus dapibus augue (h4)</h4>

                    <p>In lobortis ac neque in eleifend. Maecenas magna justo, malesuada ac aliquet at, egestas et nibh. Fusce rutrum ligula tortor, a eleifend nisi lobortis sit amet. Morbi vulputate mollis nibh, quis malesuada enim eleifend egestas. Maecenas tincidunt dapibus lacus, id dapibus quam bibendum venenatis.</p>

                    <ol class="list list-input">
                        <li>Ordered list</li>
                        <li>Iron Man 3</li>
                        <li>The Lone Ranger</li>
                        <li>Monsters University</li>
                        <li>Despicable Me 2</li>
                    </ol>

                    <p>Suspendisse nunc tortor, sollicitudin sit amet porttitor vel, dignissim vel lorem. Vivamus vel varius tellus, ut placerat tortor. Morbi eu eros cursus, mattis massa eget, vulputate dolor. Nullam nec leo et odio condimentum iaculis eleifend a nisi.</p>

                    <h5>Proin felis lorem, posuere ut nunc et, dapibus dapibus augue (h5)</h5>

                    <p>Nullam est velit, porta suscipit arcu quis, varius tristique tortor. Aliquam et libero sapien. Proin in dictum elit, quis ornare tellus. Ut consequat turpis id urna dignissim, non mattis velit eleifend. Ut lacinia egestas dolor. </p>

                    <ul class="list list-input line--marker">
                        <li>Nonordered list</li>
                        <li>Iron Man 3</li>
                        <li>The Lone Ranger</li>
                        <li>Monsters University</li>
                        <li>Despicable Me 2</li>
                    </ul>

                    <p>Nullam est velit, porta suscipit arcu quis, varius tristique tortor. Aliquam et libero sapien. Proin in dictum elit, quis ornare tellus. Ut consequat turpis id urna dignissim, non mattis velit eleifend. Ut lacinia egestas dolor. Donec non ante et eros adipiscing faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur cursus cursus ornare. Nam non est odio. Pellentesque erat nisi, porta at nulla eu, aliquam auctor elit. Praesent convallis turpis lorem, vel auctor ipsum pretium eget.</p>

                    <div class="info-wrapper">
                        <div class="tags">
                            <ul>
                                <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                            </ul>
                        </div>
                        <div class="share">
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="page-heading">Similar posts</h2>

                <div class="col-sm-4 col--remove">
                    <div class="post post--preview post--preview--full">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="#" class="post__title">"Thor: The Dark World" - World Premiere</a>
                        <a href="#" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 col--remove">
                    <div class="post--preview post--preview--full">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="#" class="post__title">30th Annual Night Of Stars Presented By The Fashion ...</a>
                        <a href="#" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 col--remove">
                    <div class="post--preview post--preview--full">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="#" class="post__title">Hollywood Film Awards 2013</a>
                        <a href="#" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h2 class="page-heading">comments (15)</h2>

                <div class="comment-wrapper">
                    <form id="comment-form" class="comment-form" method='post'>
                        <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                        <label class="comment-form__info">250 characters left</label>
                        <button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>
                    </form>

                    <div class="comment-sets">

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="http://placehold.it/50x50">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                            <p class="comment__date">today | 03:04</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="http://placehold.it/50x50">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                            <p class="comment__date">22.10.2013 | 14:40</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment comment--answer">
                            <div class="comment__images">
                                <img alt='' src="http://placehold.it/50x50">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Dmitriy Pustovalov</a>
                            <p class="comment__date">today | 10:19</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment comment--last">
                            <div class="comment__images">
                                <img alt='' src="http://placehold.it/50x50">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Sia Andrews</a>
                            <p class="comment__date"> 22.10.2013 | 12:31 </p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div id='hide-comments' class="hide-comments">
                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="http://placehold.it/50x50">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                                <p class="comment__date">today | 03:04</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="http://placehold.it/50x50">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                                <p class="comment__date">22.10.2013 | 14:40</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>
                        </div>

                        <div class="comment-more">
                            <a href="#" class="watchlist">Show more comments</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        <div class="clearfix"></div>


  
        <!-- Share buttons -->
        <!-- <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script> -->
        <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script> -->

        <?php
        include "includes/footer.php";
        ?>
        
        <script type="text/javascript">
        
            $(document).ready(function() {
                init_SinglePage();
            });
        </script>

</body>
</html>