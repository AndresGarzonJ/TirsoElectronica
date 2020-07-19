@if(!empty($products) && !collect($products)->isEmpty())

    @if ($form_list == "grid" || $form_list == "listCarousel")
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
                            <a href="{{ route('front.get.product', str_slug($product->slug)) }}">
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
                        <span><span>${{ $product->discount }}</span> {{ config('cart.currency') }}{{ number_format($product->price,0) }}</span>
                    </div>
                </div>
                <!-- Ventana modal vista rapida -->
                <!-- le quite un { -->
                <!-- <div class="modal fade" id="myModal_{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
                <!--<div id="myModal_{ $product->id }}" class="modal fade" role="dialog">
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
    @endif

    @if ($form_list == "grid_tags")
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
                            <a ondblclick="tagNuevo('{{ route('front.category.novelty.slug', "Nuevo") }}')" data-filter=".Nuevo" href="#" class="">Nuevo</a>
                            <a ondblclick="tagRemate('{{ route('front.category.novelty.slug', "Remate") }}')" data-filter=".Remate" href="#" class="">Remate</a>
                            <a ondblclick="tagLocura('{{ route('front.category.novelty.slug', "Locura") }}')" data-filter=".Locura" href="#" class="">Locura</a>
                            <a ondblclick="tagAgotado('{{ route('front.category.novelty.slug', "Agotado") }}')" data-filter=".Agotado" href="#" class="">Agotado</a>
                            <a ondblclick="tagPronto('{{ route('front.category.novelty.slug', "Pronto") }}')" data-filter=".Pronto" href="#" class="">Pronto</a>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="row featuredContainer">                    
                    @foreach($products as $product)             
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 {{ $product->tag }}">
                                <div class="product-box1">
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
                                            <a href="{{ route('front.get.product', str_slug($product->slug)) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            
                                            <!-- <a href="{ route('front.get.product', str_slug($product->slug)) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            -->
                                        </li>
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
                                            <h3><a href="{{ route('front.get.product', str_slug($product->slug)) }}" >{{ $product->name }}</a></h3>
                                            <span><span>${{ $product->discount }}</span> {{ config('cart.currency') }}{{ number_format($product->price,0) }}</span>
                                        </div>
                                </div>
                                <!-- Ventana modal vista rapida -->
                                <!-- le quite un { -->
                                <!-- <div class="modal fade" id="myModal_{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
                                <!--<div id="myModal_{ $product->id }}" class="modal fade" role="dialog">
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

                </div>

            </div>
        </div>
    @endif
@else
    <p class="alert alert-warning">No products yet.</p>
@endif

@section('js')
    <script language="JavaScript" type="text/javascript">
       
        function tagNuevo(ruta) {
          location.href=ruta
        }
        function tagPronto(ruta) {
          location.href=ruta
        }
        function tagAgotado(ruta) {
          location.href=ruta
        }
        function tagLocura(ruta) {
          location.href=ruta
        }
        function tagRemate(ruta) {
          location.href=ruta
        }
    </script>
@endsection

                         