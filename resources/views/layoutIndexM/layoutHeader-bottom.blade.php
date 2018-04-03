<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
            @if ($namePage == "http://localhost:8000/home")
                <h2 class="category-menu-title close-on-tab"><a href={{asset("#")}}><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                <div class="logo-area">
                    <a href={{asset("index.html")}}><img class="img-responsive" src={{asset("indexMetro/img/logo.png")}} alt="logo"></a>
                </div>
            @else
                <div class="logo-area">
                    <a href={{asset("index.html")}}><img class="img-responsive" src={{asset("indexMetro/img/logo.png")}} alt="logo"></a>
                </div>
                <div class="category-menu-area" id="category-menu-area-top">
                    <h2 class="category-menu-title"><a href={{asset("#")}}><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                    <ul class="category-menu-area-inner">
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-dress-1"></i>
                            @include('layoutIndexM.menuCategories.menuWomen')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-polo"></i>
                            @include('layoutIndexM.menuCategories.menuMen')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-plug"></i>
                            @include('layoutIndexM.menuCategories.menuElectronics')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-necklace"></i>
                            @include('layoutIndexM.menuCategories.menuJewellery')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-screen"></i>
                            @include('layoutIndexM.menuCategories.menuComputer')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-headphones"></i>
                            @include('layoutIndexM.menuCategories.menuHeadPhone')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-transport"></i>
                            @include('layoutIndexM.menuCategories.menuToys')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-fashion"></i>
                            @include('layoutIndexM.menuCategories.menuShoes')
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-dress"></i>
                            @include('layoutIndexM.menuCategories.menuKidsWear')                            
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href={{asset("#")}}><i class="flaticon-technology"></i>
                            @include('layoutIndexM.menuCategories.menuMobile')
                        </li>
                    </ul>
                </div>

            @endif
        </div>
        <!-- -------------------------------------------------- -->
        <div class="col-lg-9 col-md-9 col-sm-8">
            <div class="main-menu-area">
                <nav>
                    <ul>
                        <li><a href={{asset("#")}}>Home</a>
                            <ul>
                                <li><a href={{asset("index.html")}}>Home 1</a></li>
                                <li><a href={{asset("index2.html")}}>Home 2</a></li>
                                <li><a href={{asset("index3.html")}}>Home 3</a></li>
                                <li><a href={{asset("index4.html")}}>Home 4</a></li>
                            </ul>
                        </li>
                        <li><a href={{asset("about.html")}}>About</a></li>
                        <li><a href={{asset("#")}}>Blog</a>
                            <ul>
                                <li><a href={{asset("blog.html")}}>Blog</a></li>
                                <li><a href={{asset("single-blog.html")}}>Single Blog</a></li>
                                <li class="has-child-menu"><a href={{asset("#")}}>Demo</a>
                                    <ul class="thired-level">
                                        <li><a href={{asset("#")}}>Demo 1</a></li>
                                        <li><a href={{asset("#")}}>Demo 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="active"><a href={{asset("#")}}>Pages</a>
                            <ul class="mega-menu-area">
                                <li>
                                    <a href={{asset("index.html")}}>Home 1</a>
                                    <a href={{asset("index2.html")}}>Home 2</a>
                                    <a href={{asset("index3.html")}}>Home 3</a>
                                    <a href={{asset("index4.html")}}>Home 4</a>
                                </li>
                                <li>
                                    <a href={{asset("single-blog.html")}}>Single Blog 2</a>
                                    <a href={{asset("portfolio1.html")}}>Portfolio 1</a>
                                    <a href={{asset("portfolio2.html")}}>Portfolio 2</a>
                                    <a class="active" href={{asset("shop1.html")}}>Shop 1</a>
                                </li>
                                <li>
                                    <a href={{asset("shop2.html")}}>Shop 2</a>
                                    <a href={{asset("shop3.html")}}>Shop 3</a>
                                    <a href={{asset("shop4.html")}}>Shop 4</a>
                                    <a href={{asset("shop5.html")}}>Shop 5</a>
                                </li>
                                <li>
                                    <a href={{asset("shop6.html")}}>Shop 6</a>
                                    <a href={{asset("shop7.html")}}>Shop 7</a>
                                    <a href={{asset("product-details1.html")}}>Product Details 1</a>
                                    <a href={{asset("product-details2.html")}}>Product Details 2</a>
                                </li>
                                <li>
                                    <a href={{asset("login-registration.html")}}>Login Registration</a>
                                    <a href={{asset("my-account.html")}}>My Account</a>
                                    <a href={{asset("wishlist.html")}}>Wishlist</a>
                                    <a href={{asset("cart.html")}}>Cart</a>
                                </li>
                                <li>
                                    <a href={{asset("check-out.html")}}>Check Out</a>
                                    <a href={{asset("order-history.html")}}>Order History</a>
                                    <a href={{asset("order-details.html")}}>Order Details</a>
                                    <a href={{asset("404.html")}}>404</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href={{asset("contact.html")}}>Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area Start Here -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="active"><a href={{asset("#")}}>Home</a>
                                <ul>
                                    <li><a href={{asset("index.html")}}>Home 1</a></li>
                                    <li><a href={{asset("index2.html")}}>Home 2</a></li>
                                    <li><a href={{asset("index3.html")}}>Home 3</a></li>
                                    <li><a href={{asset("index4.html")}}>Home 4</a></li>
                                </ul>
                            </li>
                            <li><a href={{asset("about.html")}}>About</a></li>
                            <li><a href={{asset("#")}}>Blog</a>
                                <ul>
                                    <li><a href={{asset("blog.html")}}>Blog</a></li>
                                    <li><a href={{asset("single-blog.html")}}>Single Blog</a></li>
                                    <li class="has-child-menu"><a href={{asset("#")}}>Demo</a>
                                        <ul class="thired-level">
                                            <li><a href={{asset("#")}}>Demo 1</a></li>
                                            <li><a href={{asset("#")}}>Demo 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href={{asset("#")}}>Portfolio</a>
                                <ul>
                                    <li><a href={{asset("portfolio1.html")}}>Portfolio 1</a></li>
                                    <li><a href={{asset("portfolio2.html")}}>Portfolio 2</a></li>
                                </ul>
                            </li>
                            <li><a href={{asset("#")}}>Shop</a>
                                <ul>
                                    <li><a href={{asset("shop1.html")}}>Shop 1</a></li>
                                    <li><a href={{asset("shop2.html")}}>Shop 2</a></li>
                                    <li><a href={{asset("shop3.html")}}>Shop 3</a></li>
                                    <li><a href={{asset("shop4.html")}}>Shop 4</a></li>
                                    <li><a href={{asset("shop5.html")}}>Shop 5</a></li>
                                    <li><a href={{asset("shop6.html")}}>Shop 6</a></li>
                                    <li><a href={{asset("shop7.html")}}>Shop 7</a></li>
                                    <li><a href={{asset("product-details1.html")}}>Shop Details 1</a></li>
                                    <li><a href={{asset("product-details2.html")}}>Shop Details 2</a></li>
                                </ul>
                            </li>
                            <li><a href={{asset("#")}}>Pages</a>
                                <ul>
                                    <li><a href={{asset("login-registration.html")}}>Login Registration</a></li>
                                    <li><a href={{asset("my-account.html")}}>My Account</a></li>
                                    <li><a href={{asset("cart.html")}}>Cart</a></li>
                                    <li><a href={{asset("wishlist.html")}}>Wishlist</a></li>
                                    <li><a href={{asset("check-out.html")}}>Check Out</a></li>
                                    <li><a href={{asset("order-history.html")}}>Order History</a></li>
                                    <li><a href={{asset("order-details.html")}}>Order Details</a></li>
                                    <li><a href={{asset("404.html")}}>404</a></li>
                                </ul>
                            </li>
                            <li><a href={{asset("contact.html")}}>Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End Here -->