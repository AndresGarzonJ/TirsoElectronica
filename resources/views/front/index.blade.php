@extends('layouts.front.app')

@section('css')
   
@endsection


@section('og')
    <!--
        El Open Graph Protocol es un método simple que nos permite incluir meta información en nuestra página web y así convertirla en un objeto Social Graph, una vez siendo un objeto puede interactuar con otros objetos Social Graph como el share de Google+ o el like de Facebook de modo correcto.
    -->
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection
 


@section('content')
    <!-- Slider Area Start Here -->
    <div class="slider-area">
        <div class="container">
            <div class="row">
                <!-- Se quita el menu que esta al lado de los slider -->
                
                <!-- <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12"> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-slider1">
                        <div class="bend niceties preview-2">
                            <div id="ensign-nivoslider-2" class="slides">
                                <img src={{asset("indexMetro/img/slider-1/slider-2.jpg")}} alt="" title="#slider-direction-1" />
                                <img src={{asset("indexMetro/img/slider-1/slider-2.jpg")}} alt="" title="#slider-direction-2" />
                            </div>
                            <!-- direction 1 -->
                            <div id="slider-direction-1" class="slider-direction">
                                <div class="slider-content t-lfl s-tb slider-1">
                                    <div class="title-container s-tb-c">
                                        <h2>Collection</h2>
                                        <h2 class="title1">2016</h2>
                                        <h3 class="title3">Summer Dress</h3>
                                        <p>Simply dummy text of the printing and typesetting industrstandard dummy since.</p>
                                        <a href={{asset("#")}} class="btn-shop-now-fill-slider">View Collections</a>
                                    </div>
                                </div>
                                <!-- layer 1 -->
                                <div class="layer-1-1">
                                    <img src={{asset("indexMetro/img/slider-1/layer-1.png")}} alt="" />
                                </div>
                            </div>
                            <!-- direction 2 -->
                            <div id="slider-direction-2" class="t-cn slider-direction">
                                <!-- layer 1 -->
                                <div class="layer-1">
                                    <img src={{asset("indexMetro/img/slider-1/layer2-4.png")}} alt="" />
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-2">
                                    <img src={{asset("indexMetro/img/slider-1/layer2-5.png")}} alt="" />
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-3">
                                    <img src={{asset("indexMetro/img/slider-1/layer2-6.png")}} alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End Here -->
    
    <!-- 
    Services1 Area Start Here 
    <div class="services1-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <img src={{asset("indexMetro/img/services/home1-services1.png")}} alt="services" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <span>360 Gear</span>
                                <h3><a href={{asset("#")}}>Brand Name</a></h3>
                                <p>Camera</p>
                                <a href={{asset("#")}} class="btn-shop-now">Shop Now<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <img src={{asset("indexMetro/img/services/home1-services2.png")}} alt="services" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <span>Casual Shoes</span>
                                <h3><a href={{asset("#")}}>Brand Name</a></h3>
                                <p>Top-Brand</p>
                                <a href={{asset("#")}} class="btn-shop-now">Shop Now<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <img src={{asset("indexMetro/img/services/home1-services3.png")}} alt="services" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <span>100% Leather</span>
                                <h3><a href={{asset("#")}}>Brand Name</a></h3>
                                <p>Mountain</p>
                                <a href={{asset("#")}} class="btn-shop-now">Shop Now<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Services1 Area End Here 
    -->
    <!-- Product Area Start Here -->
    <div class="product-area">
        <div class="container" id="home-isotope">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="isotop-classes-tab myisotop1">
                        <a href={{asset("#")}} data-filter=".on-sale" class="current">On Sale</a>
                        <a href={{asset("#")}} data-filter=".featured">Featured</a>
                        <a href={{asset("#")}} data-filter=".popular">Popular</a>
                    </div>
                </div>
            </div>
            <div class="metro-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                
                @if(!is_null($features)) 
                    @include('front.products.product-list', ['products' => $features, 'form_list' => "listCarousel"])
                @endif
            </div>
            @if(!is_null($features)) 
                    <div id="browse-all-btn"> 
                        <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $category3->slug) }}" role="button">browse all items
                        </a>
                    </div>
                @endif

            <!-- -----------
            <div class="row featuredContainer">
                 
                Comentario -- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 featured on-sale"> 
                Comentario -- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 on-sale featured popular">
                Comentario -- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 popular on-sale featured">
                
                
                if(!is_null($features))
                    include('front.products.product-list', [
                        'products' => $features, 
                        'form_list' => "grid"
                        ])                        
        
                    <div id="browse-all-btn"> 
                        <a class="btn btn-default browse-all-btn" href="{ route('front.category.slug', $category3->slug) }}" role="button">browse all items
                        </a>
                    </div>
                endif
                
            </div>
                
            --------------- -->



        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- PROMOCION -- Offer Area 1 Start Here -->
    <!--
    <div class="offer-area1 hidden-after-desk">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="brand-area-box-l">
                        <span>Winter Collections</span>
                        <h1>50% Off</h1>
                        <p>Sale Going On</p>
                        <a href={{asset("#")}} class="btn-shop-now-fill">Shop Now</a>
                    </div>
                </div>
                <div id="countdown"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="brand-area-box-r">
                        <a href={{asset("#")}}><img src={{asset("indexMetro/img/offer.png")}} alt="offer"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Offer Area 1 End Here -->
    <!-- Best Seller Area Start Here -->
    <!--
    <div class="best-seller-area padding-top-0-after-desk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title-carousel">Best Seller</h2>
                </div>
            </div>
            <div class="metro-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                <div class="best-seller-box">
                    <div class="media">
                        <a href={{asset("#")}} class="pull-left">
                            <img alt="best-seller" src={{asset("indexMetro/img/best-seller/1.jpg")}} class="img-responsive">
                        </a>
                        <div class="media-body">
                            <div class="best-seller-box-content">
                                <h3><a href={{asset("#")}}>Product Title Here1</a></h3>
                                <span><span>$65.00</span>$59.00</span>
                            </div>
                            <ul class="best-seller-box-cart">
                                <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="best-seller-box">
                    <div class="media">
                        <a href={{asset("#")}} class="pull-left">
                            <img alt="best-seller" src={{asset("indexMetro/img/best-seller/1.jpg")}} class="img-responsive">
                        </a>
                        <div class="media-body">
                            <div class="best-seller-box-content">
                                <h3><a href={{asset("#")}}>Product Title Here2</a></h3>
                                <span><span>$65.00</span>$59.00</span>
                            </div>
                            <ul class="best-seller-box-cart">
                                <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="best-seller-box">
                    <div class="media">
                        <a href={{asset("#")}} class="pull-left">
                            <img alt="best-seller" src={{asset("indexMetro/img/best-seller/1.jpg")}} class="img-responsive">
                        </a>
                        <div class="media-body">
                            <div class="best-seller-box-content">
                                <h3><a href={{asset("#")}}>Product Title Here3</a></h3>
                                <span><span>$65.00</span>$59.00</span>
                            </div>
                            <ul class="best-seller-box-cart">
                                <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="best-seller-box">
                    <div class="media">
                        <a href={{asset("#")}} class="pull-left">
                            <img alt="best-seller" src={{asset("indexMetro/img/best-seller/1.jpg")}} class="img-responsive">
                        </a>
                        <div class="media-body">
                            <div class="best-seller-box-content">
                                <h3><a href={{asset("#")}}>Product Title Here4</a></h3>
                                <span><span>$65.00</span>$59.00</span>
                            </div>
                            <ul class="best-seller-box-cart">
                                <li><a href={{asset("#")}}><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href={{asset("#")}} data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
    -->
    <!-- Best Seller Area End Here -->
    <!-- Advantage Area Start Here -->
    <div class="advantage1-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <i class="flaticon-truck"></i>
                            </a>
                            <div class="media-body">
                                <h3>FREE SHIPPING</h3>
                                <p>On All Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <i class="flaticon-headphones"></i>
                            </a>
                            <div class="media-body">
                                <h3>24/7 SERVICE</h3>
                                <p>Get Help When You Need</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage-area-box">
                        <div class="media">
                            <a class="pull-left" href={{asset("#")}}>
                                <i class="flaticon-reload"></i>
                            </a>
                            <div class="media-body">
                                <h3>100% MONEY BACK</h3>
                                <p>Within 30 Day Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advantage Area End Here -->
    <!-- Blog Area Start Here -->
    <div class="blog1-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title-carousel">Latest Blog</h2>
                </div>
            </div>
            <div class="metro-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">

                @if(!is_null($blogs)) 
                    @include('front.blogs.blog-list', ['blogs' => $blogs, 'form_list' => "listCarousel"])
                @endif
                <!--
                <div class="blog-box">
                    <a href={asset("#")}}><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    <div class="blog-img-holder">
                        <div class="post-date">
                            <span>25 June</span>
                        </div>
                        <a href={asset("#")}}><img src={asset("indexMetro/img/blog/1.jpg")}} alt="blog"></a>
                    </div>
                    <div class="blog-content-holder">
                        <h3><a href={asset("#")}}>Blog Title Goes Here</a></h3>
                        <ul class="solid-underline">
                            <li><span>by</span> Admin</li>
                            <li>Comments (03)</li>
                        </ul>
                        <p>Simply dummy text of the printing and typety esetting industryr drem Ipsum has been thety standard dummy since.</p>
                    </div>
                </div>
                -->
                               
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->
    <!-- Solid Divider Area Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="solid-divider"></div>
            </div>
        </div>
    </div>
    <!-- Solid Divider Area End Here -->
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <div class="container">
            <div class="metro-carousel" data-loop="true" data-items="6" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/1.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/2.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/3.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/4.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/5.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/6.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/1.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/2.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/3.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/4.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/5.jpg")}} alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href={{asset("#")}}><img src={{asset("indexMetro/img/brand/6.jpg")}} alt="brand"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
    
@endsection

<!--  Suscribete a mi pagina
include('mailchimp::mailchimp')
-->

@section('js')
        
@endsection