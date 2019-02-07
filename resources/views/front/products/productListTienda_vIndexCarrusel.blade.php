<!--
    Esta version de product list corresponde a vista en carrusel del index (los art se desplazan automaticamente) ... los articulos se muestran sin clasificar en categorias/tags...  
-->

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
                               <li>
                                <a class="btn-services-shop-now" style="text-align:center"  href={{route('tienda')}}>
                                Ver más
                            </a>
                        </li>
                            </ul>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>