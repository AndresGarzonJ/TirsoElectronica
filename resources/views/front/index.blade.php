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

<div class="main-slider3">
        <div class="bend niceties preview-1">
            
            <div id="ensign-nivoslider-3" class="slides">
                <?php  $i = 1;  ?>
                @foreach ($panels as $panel)  
                    <img src="/storage/panels/{{$panel->imagen}}" alt="" title="#slider-direction-{{$i}}" />
                <?php $i++; ?>
                @endforeach
            </div>

            <?php  $k = 1;  ?>
            @foreach ($panels as $panel)                 
                <div id="slider-direction-{{$k}}" 

                @if ($panel->location_image == "left")
                    class="slider-direction"                    
                @endif

                @if ($panel->location_image == "right")
                     class="t-cn slider-direction"                    
                @endif
                >
                    <div 

                    @if ($panel->location_image == "left")
                        class="slider-content t-lfr s-tb slider-1"                    
                    @endif

                    @if ($panel->location_image == "right")
                         class="slider-content t-lfl s-tb slider-2"                    
                    @endif
                    >
                        <div class="title-container s-tb-c">
                            <h2 class="title1">{{$panel->title}}</h2>
                            <p>{{$panel->description1}}</p>
                            <p>{{$panel->description2}}</p>
                            <a href="{{$panel->link}}" class="btn-shop-now-fill-slider">{{$panel->text_btn_link}}</a>
                        </div>
                    </div>
                </div>

            <?php $k++; ?>
            @endforeach
            
        </div>
    </div>
<!-- Slider Area End Here -->


    
    
     
    <!-- Product Area Start Here -->
    <div class="product-area">
        <div class="container" id="home-isotope">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="isotop-classes-tab myisotop1">
                        
                        <!-- SI QUREMOS APLICAR LOS FILTROS TAGS --Descomentar lo siguiente-->
                        <!--
                        <a href={asset("#")}} data-filter=".on-sale" class="current">On Sale</a>
                        <a href={asset("#")}} data-filter=".featured">Featured</a>
                        <a href={asset("#")}} data-filter=".popular">Popular</a>
                        -->
                        <a href={{route('tienda')}} class="current">Novedades</a>


                    </div>
                </div>
            </div>
            
            <!-- SI QUREMOS APLICAR LOS FILTROS TAGS --Descomentar div-->
            <!-- <div class="row featuredContainer"> -->
                <div class="metro-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    @if(!is_null($productsTags)) 
                        @include('front.products.product-list', ['products' => $productsTags, 'form_list' => "listCarousel"])
                    @endif
                </div>
            <!-- </div> -->

            @if(!is_null($productsTags)) 
                <div class="row">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-4">
                            <div class="footer-box"> <!-- -->
                                <ul class="tag-list">
                                   <li><a class="btn-services-shop-now" style="text-align:center!;"  href={{route('tienda')}}">Ver más</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
   
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
                    <div class="isotop-classes-tab myisotop1">                        
                        <a href={{route('tutoriales')}} class="current">Ultimos Blogs</a>


                        <!--
                        if(!is_null($blogs))
                            <a href={route('tutoriales')}} >All</a>
                        endif
                    -->
                    </div>
                </div>                    
                
            </div>
            <div class="metro-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">

                @if(!is_null($blogs)) 
                    @include('front.blogs.blog-list', ['blogs' => $blogs, 'form_list' => "listCarousel"]) 
                @endif

                          
            </div>
            <br>
            @if(!is_null($blogs))                    
                <div class="row">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-4">
                            <div class="footer-box"> <!-- -->
                                <ul class="tag-list">
                                   <li><a class="btn-services-shop-now" style="text-align:center!;"  href={{route('tutoriales')}}>Ver más tutoriales</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            @endif
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