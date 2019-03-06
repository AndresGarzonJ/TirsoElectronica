<div class="sidebar hidden-after-desk">
    <h2 class="title-sidebar">SHOP CATEGORIES</h2>
    <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
        <ul>
        	@foreach ($categories as $category)
	        	@if($category->children()->count() > 0)
		            <li>@include('layouts.front.category-sidebar-sub', ['subs' => $category->children])</li>
		        @else
		            <li @if(request()->segment(2) == $category->slug) class="active" @endif>
		            	<a href="{{ route('front.category.slug', $category->slug) }}">
		            		<i class="flaticon-plug"></i>
		            		{{ $category->name }}
		            		<span>
		            			<i class="flaticon-next"></i> 
		            		</span>
		            	</a>
		            	<!--
		            	<ul class="dropdown-menu">
		                	<li><a href="#">Women Sub Title 1</a></li>
		                    <li><a href="#">Women Sub Title 2</a></li>
		                    <li><a href="#">Women Sub Title 3</a></li>
		                    <li><a href="#">Women Sub Title 4</a></li>
		                    <li><a href="#">Women Sub Title 5</a></li>
	                	</ul>
	                	-->
		            </li>
		        @endif
            @endforeach           
        </ul>
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
    <h2 class="title-sidebar">BEST PRODUCTS</h2>
    <div class="best-products sidebar-section-margin">
        @foreach ($products as $product)
	        <div class="media">

                <div class="col-lg-5 col-md-5">
                    <a href="{{ route('front.get.product', str_slug($product->slug)) }}" class="pull-left">

                        @if(isset($product->cover))
                            <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                        @else
                            <!-- <img src="https://placehold.it/263x330" alt="product->name" class="img-bordered img-responsive" /> -->
                            <img src={{asset("indexMetro/img/product/1.jpg")}} alt="{{ $product->name }}" class="img-bordered img-responsive" />
                        @endif
                    </a>
                </div>
                <div class="col-lg-7 col-md-7">            
                    <div class="media-body">
                        <h3 class="media-heading"><a href="{{ route('front.get.product', str_slug($product->slug)) }}"> {{ $product->name }}</a></h3>
                        <p><span>$99</span>{{ config('cart.currency') }}{{ number_format($product->price,0) }}</p>
                    </div>
                </div>
	        </div>        	
        @endforeach

    </div>
    
    <h2 class="title-sidebar">Destacados</h2>
    <div class="product-tags sidebar-section-margin">
        <ul>
            <li><a href="{{ route('front.category.novelty.slug', "Nuevo") }}">Nuevo</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Remate") }}">Remate</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Locura") }}">Locura</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Pronto") }}">Pronto</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Agotado") }}">Agotado</a></li>
        </ul>
    </div>
</div>