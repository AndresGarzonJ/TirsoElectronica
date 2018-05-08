<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-body">
    <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
    <div class="product-details1-area">
        <div class="product-details-info-area">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-product-details-left">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="related1">
                                <a href="#" class="zoom ex1">
                                    @if(isset($product->cover))
                                        <img  id="main-image" class="img-responsive"
                                             src="{{ asset("storage/$product->cover") }}?w=400"
                                             alt="{{ $product->name }}">
                                    @else
                                        <img  id="main-image" class="img-responsive" src="https://placehold.it/300x300"
                                             alt="{{ $product->name }}">
                                    @endif                                
                                </a>
                            </div>
                            @if(isset($images) && !$images->isEmpty())
                                <?php $count = 2; ?>
                                @foreach ($images as $image)
                                    <div class="tab-pane fade" id="related{{$count++}}">
                                        <a href="#" class="zoom ex1">
                                            <img id="main-image" class="img-responsive" 
                                             src="{{ asset("storage/$image->src") }}?w=400"
                                             alt="{{ $product->name }}" />
                                        </a>
                                    </div>
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
                                <?php $count2 = 2; ?>
                                @foreach($images as $image)                                
                                    <li>
                                        <a href="#related{{$count2++}}" data-toggle="tab" aria-expanded="false">
                                        <img class="img-responsive"
                                             src="{{ asset("storage/$image->src") }}"
                                             alt="{{ $product->name }}" />
                                        </a>
                                    </li>
                                    
                                @endforeach
                            @endif                       
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-product-details-right">
                        <h3>{{ $product->name }}</h3>
                        <ul>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        </ul>
                        <p class="price">$59.00</p>
                        <p>{!!  str_limit($product->description, 10, ' ...') !!}</p>
                        <div class="product-details-content">
                            <p><span>SKU:</span>  {{ $product->sku }}</p>
                            <p><span>Availability:</span> In stock</p>
                            <p><span>Category:</span> Demo Products</p>
                        </div>
                        <ul class="product-details-social">
                            <li>Share:</li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <ul class="inner-product-details-cart">
                            @include('layouts.errors-and-messages')
                            <form action="{{ route('cart.store') }}"  method="post" id="checkout-form">
                                {{ csrf_field() }}
                                <li>
                                    <a>
                                        <button type="submit">
                                            Add to cart
                                        </button>
                                    </a>
                                </li>

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

                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
</div>