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
                <h2 class="page-heading">Gallery</h2>
                
                <div class="row">
                <div class="gallery-wrapper">
                    <div class="col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="http://placehold.it/524x524">
                            </a>
                            <a href='http://placehold.it/2150x1200' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon"><i class="fa fa-camera"></i></span>
                                <p class="gallery-item__name">Marble Arch Odeon</p>
                            </a>
                        </div>
                    </div>

                    
                </div>
                </div>
    

                <div class="pagination paginatioon--full">
                    <a href='#' class="pagination__prev">prev</a>
                    <a href='#' class="pagination__next">next</a>
                </div>
            </div>

        </section>
        
        <div class="clearfix"></div>
        


<?php
include "includes/footer.php";
?>
<script type="text/javascript">
    $(document).ready(function() {
        init_Gallery();
    });
</script>	
</body>
</html>


