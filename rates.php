<?php
include "includes/header.php";
?>
        
        <!-- Search bar -->
        <!-- <div class="search-wrapper"> -->
        <!--     <div class="container container--add">
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
        </div> -->
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Rates</h2>

                        <div class="rates-wrapper rates--full">
                            
                            <table>
                                <colgroup class="col-width-lg">
                                <colgroup class="col-width">
                                <colgroup class="col-width-sm">
                                <colgroup class="col-width">

                                <tr class="rates rates--top">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">1. Thor: The Dark World</a></td>
                                    <td class="rates__vote">233 546 votes</td>
                                    <td class="rates__result">5.0</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                <tr class="rates rates--top">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">2. The Book Thief</a></td>
                                    <td class="rates__vote">163 546 votes</td>
                                    <td class="rates__result">5.0</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                <tr class="rates rates--top">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">3. How I Live Now</a></td>
                                    <td class="rates__vote">843 546 votes</td>
                                    <td class="rates__result">4.9</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">4. The Armstrong Lie</a></td>
                                    <td class="rates__vote">3 598 votes</td>
                                    <td class="rates__result">4.9</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">5. Ender's Game</a></td>
                                    <td class="rates__vote">14 641 votes</td>
                                    <td class="rates__result">4.8</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">6. Jackass Presents: Bad Grandpa</a></td>
                                    <td class="rates__vote">32 487 votes</td>
                                    <td class="rates__result">4.7</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">7. Last Vegas</a></td>
                                    <td class="rates__vote">2 514 votes</td>
                                    <td class="rates__result">4.7</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">8. Free Birds</a></td>
                                    <td class="rates__vote">62 841 votes</td>
                                    <td class="rates__result">4.6</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">9. Gravity</a></td>
                                    <td class="rates__vote">6 885 votes</td>
                                    <td class="rates__result">4.6</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">10. Jackass Presents: Bad Grandpa</a></td>
                                    <td class="rates__vote">7 122 votes</td>
                                    <td class="rates__result">4.6</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">11. Captain Phillips</a></td>
                                    <td class="rates__vote">10 021 votes</td>
                                    <td class="rates__result">4.4</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">12. 12 Years a Slave</a></td>
                                    <td class="rates__vote">541 votes</td>
                                    <td class="rates__result">4.4</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">13. Cloudy with a Chance of Meatballs 2</a></td>
                                    <td class="rates__vote">1 020 votes</td>
                                    <td class="rates__result">4.4</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">14. Carrie</a></td>
                                    <td class="rates__vote">840 votes</td>
                                    <td class="rates__result">4.4</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">15. The Counselor</a></td>
                                    <td class="rates__vote">14 023 votes</td>
                                    <td class="rates__result">4.3</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">16. The Best Man Holiday</a></td>
                                    <td class="rates__vote">4 250 votes</td>
                                    <td class="rates__result">4.3</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">17. The Hunger Games: Catching Fire</a></td>
                                    <td class="rates__vote">100 251 votes</td>
                                    <td class="rates__result">4.3</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">18. Delivery Man</a></td>
                                    <td class="rates__vote">84 241 votes</td>
                                    <td class="rates__result">4.1</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">19. Frozen</a></td>
                                    <td class="rates__vote">7 215 votes</td>
                                    <td class="rates__result">4.0</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                                 <tr class="rates">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name">20. Oldboy</a></td>
                                    <td class="rates__vote">400 votes</td>
                                    <td class="rates__result">3.9</td>
                                    <td class="rates__stars"><div class="score"></div></td>
                                </tr>

                            </table>
                        </div>

                        <div class="pagination paginatioon--full coloum-wrapper">
                            <a href='#' class="pagination__prev">prev</a>
                            <a href='#' class="pagination__next">next</a>
                        </div>    
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
                init_Rates();
            });
		</script>

</body>
</html>
