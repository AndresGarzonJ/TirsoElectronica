        

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> <!-- START ROW of 9 -->


                <div class="row"><!-- START ROW 1 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                        <div class="inner-shop-top-left">
                            <div class="dropdown">
                                <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting
                                    <span class="caret"></span>
                                </button>
        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Date</a>
                                    </li>
                                    <li>
                                        <a href="#">Best Sale</a>
                                    </li>
                                    <li>
                                        <a href="#">Rating</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                        <div class="inner-shop-top-right">
                            <ul>
                                <li class="active">
                                    <a href="#gried-view" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#list-view" data-toggle="tab" aria-expanded="true">
                                        <i class="fa fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- END  ROW 1 -->

                
                        
                        
                
                    
                <div class="row inner-section-space-top"> <!-- START ROW 2 --> 
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
        
        
                            @foreach ($products as $product) {{-- [Aqui se deben iterar los productos.] --}}
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <!-- product1 -->
        
                                <div class="product-box1">
        
                                    <ul class="product-social">
                                        <!-- Ver logica de como se hace en laracom -->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                        <a href="#" data-toggle="modal" data-target="#{{$product->slug}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
        
                                    <div class="product-img-holder">
                                        @if(isset($product->cover))
                                        <a href="#">
                                                <img src="<?php echo asset("storage/$product->cover")?>" alt="{{ $product->name }}" width="300" height = "400" class="img-responsive">
                                            </a>
                                        @else
                                        <a href="#">
                                                <img src="https://placehold.it/200x200" alt="{{ $product->name }}" class="img-responsive img-bordered">
                                            </a>
                                       
                                         @endif
                                                                
                                    </div>
        
                                    <div class="product-content-holder">
                                        <h3>
                                            <a href="#">{{ $product->name }}</a>
                                        </h3>
                                        <span>{{ $product->price }}</span>
                                    </div>
        
                                </div>
        
                            </div>
                            <!-- end product1-->
                            @endforeach

                          
        
        
        
        
                        </div>
                    </div>
                </div><!-- END ROW 2 -->
                
            
              
        
            </div><!-- END row of 9-->
        
        
            @foreach ($products as $product)
                <!-- Modal Dialog Box Start Here-->
            <div id="{{ $product->slug }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-body">
                            <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                            <div class="product-details1-area">
                                <div class="product-details-info-area">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="inner-product-details-left">
                                                <div class="tab-content">
                                                    <div id="metro-related1" class="tab-pane fade active in">
                                                        <a href="#">
                                                            <img class="img-responsive" src="https://placehold.it/400x400" alt="single">
                                                        </a>
                                                    </div>
                                                    <div id="metro-related2" class="tab-pane fade">
                                                        <a href="#">
                                                            <img class="img-responsive" src="https://placehold.it/400x400" alt="single">
                                                        </a>
                                                    </div>
                                                    <div id="metro-related3" class="tab-pane fade">
                                                        <a href="#">
                                                            <img class="img-responsive" src="https://placehold.it/400x400" alt="single">
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="active">
                                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related1">
                                                            <img class="img-responsive" src="https://placehold.it/250x250" alt="related1">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related2">
                                                            <img class="img-responsive" src="https://placehold.it/250x250" alt="related2">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related3">
                                                            <img class="img-responsive" src="https://placehold.it/250x250" alt="related3">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <div class="inner-product-details-right">
                                                <h3>Product Title Here</h3>
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                </ul>
                                                <p class="price">$59.00</p>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc
                                                    amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus
                                                    vel non risus.</p>
                                                <div class="product-details-content">
                                                    <p>
                                                        <span>SKU:</span> 0010</p>
                                                    <p>
                                                        <span>Availability:</span> In stock</p>
                                                    <p>
                                                        <span>Category:</span> Demo Products</p>
                                                </div>
                                                <ul class="product-details-social">
                                                    <li>Share:</li>
                                                    <li>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="inner-product-details-cart">
                                                    <li>
                                                        <a href="#">Add To Cart</a>
                                                    </li>
                                                    <li>
                                                        <div class="input-group quantity-holder" id="quantity-holder">
                                                            <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                            <div class="input-group-btn-vertical">
                                                                <button type="button" class="btn btn-default quantity-plus">
                                                                    <i aria-hidden="true" class="fa fa-plus"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-default quantity-minus">
                                                                    <i aria-hidden="true" class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
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
                    </div>
                </div>
        <!-- Modal Dialog Box End Here-->    
            @endforeach