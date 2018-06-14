<div class="sidebar hidden-after-tab">
    <!-- Barra busqueda ---------------------
    <h2 class="title-sidebar">Search</h2>
    <div class="sidebar-search-area sidebar-section-margin">
        <div class="input-group stylish-input-group">
            <input type="text" class="form-control" placeholder="Search Here . . .">
            <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
    </div>
    --------------------- -->
    <h2 class="title-sidebar">RECENT POSTS</h2>
    <div class="recent-posts sidebar-section-margin">
        @include('front.blogs.blog-list', ['blogs' => $blogs, 'form_list' => "column"])
                            
        <!--
        <div class="media">
            <a href="#" class="pull-left">
                <img alt="Media Object" src="img/sidebar/blog1.jpg" class="img-responsive">
            </a>
            <div class="media-body">
                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                <p>7th June, 2014</p>
            </div> 
        </div>
        -->

    </div>
    <h2 class="title-sidebar">Archives</h2>
    <div class="archives sidebar-section-margin">
        <ul>
            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>January 2016</a></li>
            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>December 2015</a></li>
            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>November 2015</a></li>
            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>March 2015</a></li>
            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>January 2015</a></li>
        </ul>
    </div>
    <h2 class="title-sidebar">Product Tags</h2>
    <div class="product-tags">
        <ul>
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Glamour</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Dress</a></li>
            <li><a href="#">Kid’s</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
    </div>
</div>