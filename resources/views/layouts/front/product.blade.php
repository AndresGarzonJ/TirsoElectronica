<div class="product-details2-area">
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                    
                    <p>{!!  str_limit($product->description, 10, ' ...') !!}</p>
                    <div class="product-details-content">
                        <p><span>SKU:</span> {{ $product->sku }} </p>

                        <p><span>Categoria:</span> 
                        <!-- include('admin.shared.categories', ['categories' => $categories, 'ids' => $product]) -->
                        <!-- Tomada de la plantilla admin.shared.categories ------------------ -->
                        @foreach($categories as $category)
                            @if(isset($selectedIds) && in_array($category->id, $selectedIds)) 
                                {{ $category->name }} 
                            @endif  
                            @if($category->children->count() >= 1)
                                <!--include('admin.shared.category-children', ['categories' => $category->children, 'selectedIds' => $selectedIds])
                                <!-- Tomada de la plantilla admin.shared.category-children -------------- -->
                                @foreach($categories as $category)
                                        @if(isset($selectedIds) && in_array($category->id, $selectedIds)) 
                                            {{ $category->name }} 
                                        @endif 
                                @endforeach
                            @endif
                        @endforeach
                        </p>

                        <!-- Lo que se quiere es que el precio varie en funcion de las caratesristicas del producto... ya se logro para un solo atributo .. ahora se quiere para mas atributos y luego poder enviar esos datos al carro -------------------------- -->

                        
                        @if($productAttributes->isEmpty())
                            <!-- Si No Hay Atributos -->
                            <p><span>Disponibilidad:</span>{{ $product->quantity }}</p>
                            <p class="price">{{ config('cart.currency') }} {{ $product->price }}</p>
                        @else
                            <!-- 
                            <ul class="more-option">
                                <li>
                                    <div class="form-group">
                                        <div class="custom-select">
                                            
                                            <select id="id_atributo" class='select2'>
                                                <?php $count_atrib = 0; ?>
                                                @foreach($productAttributes as $pa)
                                                    @foreach($pa->attributesValues as $item)
                                                        @if ($count_atrib == 0)
                                                            <option value="0">Select Your {{ $item->attribute->name }}</option>                                                     
                                                            <?php $count_atrib = 1; ?>
                                                        @endif                                                        
                                                        <option value="{{ $item->value }}">{{ $item->value }}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            -->
                            <!-- Crea etiquetas con el valor de los atributos, al dar click sobre una etiqueta_atributo aparecia autoamticamente el valor del precio y unid disponibles. -------------------- -->

                            <ul class="inner-product-details-cart">
                                <?php $count_attr1 = 2; ?>
                                @foreach($productAttributes as $pa)                                        
                                    @foreach($pa->attributesValues as $item)                             
                                        <li>
                                            <a href="#refAttribute{{$count_attr1++}}" data-toggle="tab" aria-expanded="false" class="btn btn-outline mw-md btn-dark btn-sm">
                                                <i>
                                                    {{ $item->attribute->name }} : {{ $item->value }}
                                                </i>
                                            </a>
                                        </li>
                                    @endforeach                                    
                                @endforeach        
                            </ul>
                            <ul>  
                                <div class="tab-content">                          
                                    <?php $count_attr2 = 2; ?>
                                    @foreach($productAttributes as $pa)                                        
                                        @foreach($pa->attributesValues as $item)
                                            <div class="tab-pane fade " id="refAttribute{{$count_attr2++}}">
                                                <p><span>Disponibilidad: </span>{{ $pa->quantity }} Unid</p>
                                                <p class="price">{{ config('cart.currency') }} {{ $pa->price }}</p>
                                            </div>
                                        @endforeach                                               
                                    @endforeach
                                </div>
                            </ul>
                            
                        @endif
                    </div> 
                    
                    <ul class="inner-product-details-cart">
                        @include('layouts.errors-and-messages')
                        <form action="{{ route('cart.store') }}"  method="post" id="checkout-form">
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
                                <a>
                                    <button type="submit">
                                        Add to cart
                                    </button>
                                </a>
                            </li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </form>

                        <!-- Numero de caja -->

                        
                    </ul>
                    <!-- </form> ---------- -->
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
                            <p>{!! $product->description !!}</p>
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
                
                @if(!is_null($products_temp)) 
                    @include('front.products.product-list', ['products' => $products_temp, 'form_list' => "listCarousel"])
                @endif
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="modal-main-image" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
@section('css')
    <style>
    
    
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
    /* Add Animation */
    .modal-content, #caption {    
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
    }
    @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
    }
    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }
    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
    </style>
@endsection
@section('js')
    <script>
    // Get the modal
    var modal = document.getElementById('modal-main-image');
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('main-image');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
    </script>
@endsection