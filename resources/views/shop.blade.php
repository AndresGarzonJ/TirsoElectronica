@extends('layoutIndexM.layoutPage')

@section('page-content-top')
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-area">
                        <h1>Woman</h1>
                        <ul>
                            <li><a href={{asset("#")}}>Home</a> /</li>
                            <li><a href={{asset("#")}}>Category</a> /</li>
                            <li>Woman</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('page-content')
    <div class="shop-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="sidebar hidden-after-desk">
                        <h2 class="title-sidebar">SHOP CATEGORIES</h2>
                        <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
                            <ul>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-dress-1"></i>Women<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Women Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Women Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Women Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Women Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Women Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop2.html")}}><i class="flaticon-polo"></i>Men<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Men Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Men Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Men Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Men Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Men Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop3.html")}}><i class="flaticon-plug"></i>Electornics<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Electornics Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Electornics Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Electornics Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Electornics Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Electornics Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop4.html")}}><i class="flaticon-necklace"></i>Jewellery<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Jewellery Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Jewellery Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Jewellery Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Jewellery Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Jewellery Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop5.html")}}><i class="flaticon-screen"></i>Computer<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Computer Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Computer Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Computer Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Computer Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Computer Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop6.html")}}><i class="flaticon-headphones"></i>Head Phone<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Head Phone Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Head Phone Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Head Phone Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Head Phone Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Head Phone Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-transport"></i>Toys<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Toys Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Toys Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Toys Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Toys Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Toys Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-fashion"></i>Shoes<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Shoes Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Shoes Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Shoes Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Shoes Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Shoes Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-dress"></i>Kid’s Wear<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Kid’s Wear Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Kid’s Wear Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Kid’s Wear Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Kid’s Wear Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Kid’s Wear Sub Title 5</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("shop1.html")}}><i class="flaticon-technology"></i>Mobile<span><i class="flaticon-next"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Mobile Sub Title 1</a></li>
                                        <li><a href={{asset("#")}}>Mobile Sub Title 2</a></li>
                                        <li><a href={{asset("#")}}>Mobile Sub Title 3</a></li>
                                        <li><a href={{asset("#")}}>Mobile Sub Title 4</a></li>
                                        <li><a href={{asset("#")}}>Mobile Sub Title 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h2 class="title-sidebar">BEST PRODUCTS</h2>
                        <div class="best-products sidebar-section-margin">
                            <div class="media">
                                <a href={{asset("#")}} class="pull-left">
                                    <img alt="Media Object" src={{asset("indexMetro/img/sidebar/1.jpg")}} class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href={{asset("#")}}> Product Title Here</a></h3>
                                    <p><span>$99</span>$85</p>
                                </div>
                            </div>
                            <div class="media">
                                <a href={{asset("#")}} class="pull-left">
                                    <img alt="Media Object" src={{asset("indexMetro/img/sidebar/2.jpg")}} class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href={{asset("#")}}>Product Title Here</a></h3>
                                    <p>$85</p>
                                </div>
                            </div>
                            <div class="media">
                                <a href={{asset("#")}} class="pull-left">
                                    <img alt="Media Object" src={{asset("indexMetro/img/sidebar/3.jpg")}} class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href={{asset("#")}}>Product Title Here</a></h3>
                                    <p><span>$99</span>$85</p>
                                </div>
                            </div>
                            <div class="media">
                                <a href={{asset("#")}} class="pull-left">
                                    <img alt="Media Object" src={{asset("indexMetro/img/sidebar/4.jpg")}} class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href={{asset("#")}}>Product Title Here</a></h3>
                                    <p><span>$99</span>$85</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="title-sidebar">FILTER BY PRICE</h2>
                        <div id="price-range-wrapper" class="price-range-wrapper">
                            <div id="price-range-filter"></div>
                            <div class="price-range-select">
                                <div class="price-range" id="price-range-min"></div>
                                <div class="price-range" id="price-range-max"></div>
                            </div>
                            <button class="btn-services-shop-now" type="submit" value="Login">Filter</button>
                        </div>
                        <h2 class="title-sidebar">Product Tags</h2>
                        <div class="product-tags sidebar-section-margin">
                            <ul>
                                <li><a href={{asset("#")}}>Fashion</a></li>
                                <li><a href={{asset("#")}}>Glamour</a></li>
                                <li><a href={{asset("#")}}>Shoes</a></li>
                                <li><a href={{asset("#")}}>Dress</a></li>
                                <li><a href={{asset("#")}}>Kid’s</a></li>
                                <li><a href={{asset("#")}}>Accessories</a></li>
                                <li><a href={{asset("#")}}>Mobile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <div class="inner-shop-top-left">
                                <div class="dropdown">
                                    <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href={{asset("#")}}>Date</a></li>
                                        <li><a href={{asset("#")}}>Best Sale</a></li>
                                        <li><a href={{asset("#")}}>Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                            <div class="inner-shop-top-right">
                                <ul>
                                    <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                    <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row inner-section-space-top">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="product-box1">
                                        <ul class="product-social">
                                            <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="product-img-holder">
                                            <div class="hot-sale">
                                                <span>New</span>
                                            </div>
                                            <a href={{asset("#")}}><img class="img-responsive" src={{asset("indexMetro/img/product/3.jpg")}} alt="product"></a>
                                        </div>
                                        <div class="product-content-holder">
                                            <h3><a href={{asset("#")}}>Product Title Here</a></h3>
                                            <span>$25.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="product-box1">
                                        <ul class="product-social">
                                            <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="product-img-holder">
                                            <div class="hot-sale">
                                                <span>Hot</span>
                                            </div>
                                            <a href={{asset("#")}}><img class="img-responsive" src={{asset("indexMetro/img/product/4.jpg")}} alt="product"></a>
                                        </div>
                                        <div class="product-content-holder">
                                            <h3><a href={{asset("#")}}>Product Title Here</a></h3>
                                            <span>$25.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="product-box1">
                                        <ul class="product-social">
                                            <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="product-img-holder">
                                            <a href={{asset("#")}}><img class="img-responsive" src={{asset("indexMetro/img/product/5.jpg")}} alt="product"></a>
                                        </div>
                                        <div class="product-content-holder">
                                            <h3><a href={{asset("#")}}>Product Title Here</a></h3>
                                            <span><span>$35.00</span>$25.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- List Style -->
                            <div role="tabpanel" class="tab-pane clear products-container" id="list-view">
                                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                    <div class="product-box2">
                                        <div class="media">
                                            <a class="pull-left" href={{asset("#")}}>
                                                <img class="img-responsive" src={{asset("indexMetro/img/product/grid/1.jpg")}} alt="product" />
                                            </a>
                                            <div class="media-body">
                                                <div class="product-box2-content">
                                                    <h3><a href={{asset("#")}}>Product Title Here</a></h3>
                                                    <span>$59.00</span>
                                                    <p>Bag mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                                                </div>
                                                <ul class="product-box2-cart">
                                                    <li><a href={{asset("#")}}>Add To Cart</a></li>
                                                    <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="mypagination">
                                <li class="active"><a href={{asset("#")}}>1</a></li>
                                <li><a href={{asset("#")}}>2</a></li>
                                <li><a href={{asset("#")}}>3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection