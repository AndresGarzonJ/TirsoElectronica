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
    <div class="main-slider3">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                <img src={{asset("indexMetro/img/slider-3/slider-1.jpg")}} alt="" title="#slider-direction-1" />
                <img src={{asset("indexMetro/img/slider-3/slider-2.jpg")}} title="#slider-direction-2" />
            </div>
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-content t-lfr s-tb slider-1">
                    <div class="title-container s-tb-c">
                        <span>Sasdasds!</span>
                        <h2 class="title1">Ultimate Collection</h2>
                        <p>Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        <p>industry's standard dummy text ever since.</p>
                        <a href="#" class="btn-shop-now-fill-slider">Shop Now</a>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content t-lfl s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <h2 class="title1">Start Your <br><span>Shopping</span> Today</h2>
                        <p>Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        <p>industry's standard dummy text ever since.</p>
                        <a href="#" class="btn-shop-now-fill-slider">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Slider Area End Here -->

</div>
</div>
</header>
<!-- Header Area End Here -->
   
    <!-- Product Area Start Here -->
  @include('front.products.productListTienda', [
    'products' => $features
    ])
   
    
    
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
                <div class="blog-box">
                    <a href={{asset("#")}}><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    <div class="blog-img-holder">
                        <div class="post-date">
                            <span>25 June</span>
                        </div>
                        <a href={{asset("#")}}><img src={{asset("indexMetro/img/blog/1.jpg")}} alt="blog"></a>
                    </div>
                    <div class="blog-content-holder">
                        <h3><a href={{asset("#")}}>Blog Title Goes Here</a></h3>
                        <ul class="solid-underline">
                            <li><span>by</span> Admin</li>
                            <li>Comments (03)</li>
                        </ul>
                        <p>Simply dummy text of the printing and typety esetting industryr drem Ipsum has been thety standard dummy since.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <a href={{asset("#")}}><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    <div class="blog-img-holder">
                        <div class="post-date">
                            <span>25 June</span>
                        </div>
                        <a href={{asset("#")}}><img src={{asset("indexMetro/img/blog/2.jpg")}} alt="blog"></a>
                    </div>
                    <div class="blog-content-holder">
                        <h3><a href={{asset("#")}}>Blog Title Goes Here</a></h3>
                        <ul class="solid-underline">
                            <li><span>by</span> Admin</li>
                            <li>Comments (08)</li>
                        </ul>
                        <p>Simply dummy text of the printing and typety esetting industryr drem Ipsum has been thety standard dummy since.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <a href={{asset("#")}}><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    <div class="blog-img-holder">
                        <div class="post-date">
                            <span>25 June</span>
                        </div>
                        <a href={{asset("#")}}><img src={{asset("indexMetro/img/blog/3.jpg")}} alt="blog"></a>
                    </div>
                    <div class="blog-content-holder">
                        <h3><a href={{asset("#")}}>Blog Title Goes Here</a></h3>
                        <ul class="solid-underline">
                            <li><span>by</span> Admin</li>
                            <li>Comments (10)</li>
                        </ul>
                        <p>Simply dummy text of the printing and typety esetting industryr drem Ipsum has been thety standard dummy since.</p>
                    </div>
                </div>                
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