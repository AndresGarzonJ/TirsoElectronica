@if(!empty($products) && !collect($products)->isEmpty())
    @foreach($products as $product) 

     
        <div
        @if($form_list == "grid")         
         class="col-lg-3 col-md-3 col-sm-4 col-xs-6 on-sale"
        @else
 
        @endif
         >
            <div class="product-box1 ">
                <ul class="product-social">
                    
                    <li>
                        
                                <form action="{{ route('cart.store') }}" class="" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="quantity" value="1" />
                                        <input type="hidden" name="product" value="{{ $product->id }}">
                                        <button id="add-to-cart-btn" type="submit"  data-toggle="modal" data-target="#cart-modal"> 
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <!-- Add to Cart -->
                                        </button>
                                    </form> 
                       
                                                                   
                    </li>
                    <li><a href={{route('cart.store')}}><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                    <li>
                        <!-- Veista rapida -Ventana modal - Creo que relentiza la pag-->
                        <!-- le quite un { -->
                        <a data-toggle="modal" data-target="#myModal_{{ $product->id }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        
                        <!-- <a href="{ route('front.get.product', str_slug($product->slug)) }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        -->
                    </li> 
                    
                </ul>
                <div class="product-img-holder">
                    <!-- <div class="hot-sale"><span>Sale</span></div> -->
                    <!-- <div class="hot-sale"><span>New</span></div> -->

                    @if ($product->tag != "Deshabilitado")
                        
                        <div class="hot-sale">
                            <span></span>
                            <span>{{ $product->tag }}</span>
                        </div>
                    @endif
                    
                    @if(isset($product->cover))
                        <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                    @else
                        <!-- <img src="https://placehold.it/263x330" alt="product->name" class="img-bordered img-responsive" /> -->
                        <img src={{asset("indexMetro/img/product/1.jpg")}} alt="{{ $product->name }}" class="img-bordered img-responsive" />
                    @endif                
                </div>
                <div class="product-content-holder">
                    <h3><a href="{{ route('front.get.product', str_slug($product->slug)) }}" >{{ $product->name }}</a></h3>
                    <span><span>$40.00</span> {{ config('cart.currency') }}{{ number_format($product->price,0) }}</span>
                </div>
            </div>
            <!-- Ventana modal vista rapida -->
            <!-- le quite un { -->
            <!-- <div class="modal fade" id="myModal_{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
            <!--<div id="myModal_{{ $product->id }}" class="modal fade" role="dialog">
            {{-- @include('layouts.front.product_modal',["idModal" => $product->id]) --}}               
            </div>-->
            
        </div>
    @endforeach
    @if($products instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">{{ $products->links() }}</div>
            </div>
        </div>
    @endif
@else
    <p class="alert alert-warning">No products yet.</p>
@endif