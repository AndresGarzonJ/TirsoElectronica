<div class="product-details2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-product-details-left">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="related1">
                            <a href="#" class="zoom ex1">
                                @if(isset($product->cover))
                                    <img id="main-image" class="img-responsive"
                                         src="{{ asset("storage/$product->cover") }}?w=400"
                                         data-zoom="{{ asset("storage/$product->cover") }}?w=1200"
                                         alt="{{ $product->name }}">
                                @else
                                    <img id="main-image" class="product-cover" src="https://placehold.it/300x300"
                                         data-zoom="{{ asset("storage/$product->cover") }}?w=1200" 
                                         alt="{{ $product->name }}">
                                @endif                                
                            </a>
                        </div>
                        @if(isset($images) && !$images->isEmpty())
                            <?php $count = 2; ?>
                            @foreach ($images as $image)
                                <div class="tab-pane fade" id="related{{$count}}">
                                    <a href="#" class="zoom ex1">
                                        <img class="img-responsive"
                                         src="{{ asset("storage/$image->src") }}"
                                         alt="{{ $product->name }}" />
                                    </a>
                                </div>
                                <?php $count = 1 + 1; ?>
                            @endforeach
                        @endif                        
                    </div>

                    <ul>
                        <li class="active">
                            <a href="#related1" data-toggle="tab" aria-expanded="false">
                                @if(isset($product->cover))
                                    <img class="img-responsive"
                                        src="{{ asset("storage/$product->cover") }}"
                                        alt="{{ $product->name }}" />
                                @else
                                    <img class="img-responsive"
                                        src="{{ asset("https://placehold.it/180x180") }}"
                                        alt="{{ $product->name }}" />
                                @endif

                            </a>
                        </li>
                        @if(isset($images) && !$images->isEmpty())
                            <?php $count = 2; ?>
                            @foreach($images as $image)                                
                                <li>
                                    <a href="#related{{$count}}">
                                    <img class="img-responsive"
                                         src="{{ asset("storage/$image->src") }}"
                                         alt="{{ $product->name }}" />
                                    </a>
                                </li>
                                <?php $count = 1 + 1; ?>
                            @endforeach
                        @endif                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-product-details-right">
                    <h3>{{ $product->name }}</h3>
                    <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <p class="price">$ {{ $product->price }}</p>
                    <p>{!! $product->description !!}</p>
                    <div class="product-details-content">
                        <p><span>SKU:</span> 0010</p>
                        <p><span>Availability:</span> In stock</p>
                        <p><span>Category:</span> Demo Products</p>
                    </div>
                    <form id="checkout-form">
                        <ul class="more-option">
                            <li>
                                <div class="form-group">
                                    <div class="custom-select">
                                        <select id="size" class='select2'>
                                            <option value="0">Select Your Size</option>
                                            <option value="1">XL</option>
                                            <option value="2">L</option>
                                            <option value="3">M</option>
                                            <option value="4">S</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <div class="custom-select">
                                        <select id="color" class='select2'>
                                            <option value="0">Select Your Color</option>
                                            <option value="1">Black</option>
                                            <option value="2">White</option>
                                            <option value="3">Blue</option>
                                            <option value="4">Green</option>
                                            <option value="5">Pink</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="inner-product-details-cart">
                            @include('layouts.errors-and-messages')
                            <form action="{{ route('cart.store') }}"  method="post">
                                {{ csrf_field() }}

                                <li>
                                    <div class="input-group quantity-holder" id="quantity-holder">
                                        
                                        <input type="text" name='quantity' id="quantity" class="form-control quantity-input" value="1" placeholder="1">
                                        <input type="hidden" name="product" value="{{ $product->id }}" />

                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- 
                                    <a href="#">
                                        Add To Cart
                                    </a>
                                    -->
                                    <button type="submit">                                        
                                        Add to cart
                                    </button>
                                </li>
                                

                            </form>

                            <li><a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                    </form>
                    <ul class="product-details-social">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-tab-area">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                        <li><a href="#review" data-toggle="tab" aria-expanded="false">Review(0)</a></li>
                        <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">ADD TAGS</a></li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="description">
                            <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        </div>
                        <div class="tab-pane fade" id="review">
                            <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        </div>
                        <div class="tab-pane fade" id="add-tags">
                            <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-products-area2">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title-carousel">Featured Products</h2>
                </div>
            </div>
            <div class="metro-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <a href="#"><img src={{asset('indexMetro/img/product/1.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span>$88.00</span>
                    </div>
                </div>
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <a href="#"><img src={{asset('indexMetro/img/product/2.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span><span>$58.00</span>$40.00</span>
                    </div>
                </div>
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <div class="hot-sale">
                            <span>Sale</span>
                        </div>
                        <a href="#"><img src={{asset('indexMetro/img/product/3.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span><span>$74.00</span>$50.00</span>
                    </div>
                </div>
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <div class="hot-sale">
                            <span>Hot</span>
                        </div>
                        <a href="#"><img src={{asset('indexMetro/img/product/4.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span>$88.00</span>
                    </div>
                </div>
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <a href="#"><img src={{asset('indexMetro/img/product/5.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span><span>$58.00</span>$40.00</span>
                    </div>
                </div>
                <div class="product-box1">
                    <ul class="product-social">
                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="product-img-holder">
                        <div class="hot-sale">
                            <span>New</span>
                        </div>
                        <a href="#"><img src={{asset('indexMetro/img/product/6.jpg')}} alt="product"></a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#">Product Title Here</a></h3>
                        <span>$58.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    
@endsection
