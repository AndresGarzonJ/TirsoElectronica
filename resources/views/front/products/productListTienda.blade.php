
<!-- Modal para Tienda basado en metro/index3.html -->



<!-- Product 2 Area Start Here -->
<div class="product2-area">
    <div class="container-fluid" id="home-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <span class="title-bar-left"></span>
                    <h2>Productos Destacados</h2>
                    <span class="title-bar-right"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab myisotop2"> <!-- -->
                    <a class="current" data-filter="*" href="#">Todos</a>
                    <a data-filter=".Nuevo" href="#" class="">Nuevos</a>
                    <a data-filter=".Destacado" href="#" class="">Destacados</a>
                    <a data-filter=".Promocion" href="#" class="">En promocion</a>
                </div>
            </div>
        </div>

        <div class="row featuredContainer">

                @if(!empty($products) && !collect($products)->isEmpty())
                @foreach($products as $product) 
            
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 {{ $product->tag }}">
                        <div class="product-box1">
                            <ul class="product-social">
                                    <li>
                                            <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="quantity" value="1" />
                                                <input type="hidden" name="product" value="{{ $product->id }}">
                                                <button id="add-to-cart-btn" type="submit"  data-toggle="modal" data-target="#cart-modal"> 
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                    <!-- Add to Cart -->
                                                </button>
                                            </form>                                            
                                    </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                
                            </ul>
                            <div class="product-img-holder">
                                  
                
                                    @if ($product->tag != "Deshabilitado")
                                        <div class="hot-sale"><span>{{ $product->tag }}</span></div>
                                    @endif
                                    
                                    @if(isset($product->cover))
                                        <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                                    @else
                                        <!-- <img src="https://placehold.it/263x330" alt="product->name" class="img-bordered img-responsive" /> -->
                                        <img src={{asset("indexMetro/img/product/1.jpg")}} alt="{{ $product->name }}" class="img-bordered img-responsive" />
                                    @endif                
                                </div>
                            <div class="product-content-holder">
                            <h3><a href="#">{{$product->name}}</a></h3>
                                <span><span>$40.00</span>$25.00</span>
                            </div>
                        </div>
                </div> 
                     
            
                @endforeach
                @endif

       
            

        </div> <!-- END featuredContainer row -->


    </div>
</div>
