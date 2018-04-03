<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="logo-area">
                <a href={{asset("index.html")}}><img class="img-responsive" src={{asset("indexMetro/img/logo.png")}} alt="logo"></a>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="search-area">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search Product" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-metro dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>All Categories</span><i class="fa fa-caret-up" aria-hidden="true"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <ul class="sidenav-nav">
                                        <li><a href={{asset("#")}}><i class="flaticon-dress-1"></i>Women</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-polo"></i>Men</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-plug"></i>Electornics</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-necklace"></i>Jewellery</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-screen"></i>Computer</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-headphones"></i>Head Phone</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-transport"></i>Toys</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-fashion"></i>Shoes</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-dress"></i>Kid’s Wear</a></li>
                                        <li><a href={{asset("#")}}><i class="flaticon-technology"></i>Mobile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <!-- -------------------- Carro - Menu Hamburguesa ----------------------------- -->
            <!-- Esta en shop1.html - Plantilla Metro --> 
            <!-- 
            <ul class="header-cart-area">
                <li>
                    <div class="cart-area">
                        <a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                        <ul>
                            <li>
                                <div class="cart-single-product">
                                    <div class="media">
                                        <div class="pull-left cart-product-img">
                                            <a href={{asset("#")}}>
                                                <img class="img-responsive" alt="product" src={{asset("indexMetro/img/best-seller/4.jpg")}}>
                                            </a>
                                        </div>
                                        <div class="media-body cart-content">
                                            <ul>
                                                <li>
                                                    <h2><a href={{asset("#")}}>Product Title Here</a></h2>
                                                    <h3><span>Code:</span> STPT600</h3>
                                                </li>
                                                <li>
                                                    <p>X 1</p>
                                                </li>
                                                <li>
                                                    <p>$49</p>
                                                </li>
                                                <li>
                                                    <a class="trash" href={{asset("#")}}><i class="fa fa-trash-o"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cart-single-product">
                                    <div class="media">
                                        <div class="pull-left cart-product-img">
                                            <a href={{asset("#")}}>
                                                <img class="img-responsive" alt="product" src={{asset("indexMetro/img/best-seller/5.jpg")}}>
                                            </a>
                                        </div>
                                        <div class="media-body cart-content">
                                            <ul>
                                                <li>
                                                    <h2><a href={{asset("#")}}>Product Title Here</a></h2>
                                                    <h3><span>Code:</span> STPT460</h3>
                                                </li>
                                                <li>
                                                    <p>X 1</p>
                                                </li>
                                                <li>
                                                    <p>$75</p>
                                                </li>
                                                <li>
                                                    <a class="trash" href={{asset("#")}}><i class="fa fa-trash-o"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span><span>Sub Total</span></span><span>$124</span>
                                <span><span>Discount</span></span><span>$30</span>
                                <span><span>Vat(20%)</span></span><span>$18.8</span>
                                <span><span>Sub Total</span></span><span>$112.8</span>
                            </li>
                            <li>
                                <ul class="checkout">
                                    <li><a href={{asset("cart.html")}} class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                    <li><a href={{asset("check-out.html")}} class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="additional-menu-area" id="additional-menu-area">
                        <div id="mySidenav" class="sidenav">
                            <a href={{asset("#")}} class="closebtn">×</a>
                            <div class="sidenav-search">
                                <div class="input-group stylish-input-group">
                                    <input type="text" placeholder="Search Here . . ." class="form-control">
                                    <span class="input-group-addon">
					                        <button type="submit">
					                            <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    </span>
                                </div>
                            </div>
                            <ul class="sidenav-login-registration">
                                <li data-toggle="collapse" data-target="#login" class="collapsed">
                                    <a href={{asset("#")}}>Login<span class="arrow"></span></a>
                                    <div class="collapse" id="login">
                                        <div class="login-registration-field">
                                            <form method="post">
                                                <label>Username or email address *</label>
                                                <input type="text">
                                                <label>Password *</label>
                                                <input type="password">
                                                <button value="Login" type="submit" class="btn-side-nav disabled">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li data-toggle="collapse" data-target="#registration" class="collapsed">
                                    <a href={{asset("#")}}>Registration<span class="arrow"></span></a>
                                    <div class="collapse" id="registration">
                                        <div class="login-registration-field">
                                            <form method="post">
                                                <label>User Name*</label>
                                                <input type="text">
                                                <label>E-mail address *</label>
                                                <input type="email">
                                                <label>Password *</label>
                                                <input type="password">
                                                <button value="Login" type="submit" class="btn-side-nav disabled">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="ctg-name-title">Category Name List</h3>
                            <ul class="sidenav-nav">
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-dress-1"></i>Women</a></li>
                                <li><a href={{asset("shop2.html")}}><i class="flaticon-polo"></i>Men</a></li>
                                <li><a href={{asset("shop3.html")}}><i class="flaticon-plug"></i>Electornics</a></li>
                                <li><a href={{asset("shop4.html")}}><i class="flaticon-necklace"></i>Jewellery</a></li>
                                <li><a href={{asset("shop5.html")}}><i class="flaticon-screen"></i>Computer</a></li>
                                <li><a href={{asset("shop6.html")}}><i class="flaticon-headphones"></i>Head Phone</a></li>
                                <li><a href={{asset("shop7.html")}}><i class="flaticon-transport"></i>Toys</a></li>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-fashion"></i>Shoes</a></li>
                                <li><a href={{asset("shop2.html")}}><i class="flaticon-dress"></i>Kid’s Wear</a></li>
                                <li><a href={{asset("shop3.html")}}><i class="flaticon-technology"></i>Mobile</a></li>
                            </ul>
                            
                        </div>
                        <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </div>
                </li>
            </ul>
            -->
        </div>
    </div>
</div>