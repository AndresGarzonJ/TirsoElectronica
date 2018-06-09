
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
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="product-img-holder">
                                <a href="#"><img src="http://via.placeholder.com/272x334" alt="product"></a>
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
<!-- Product 2 Area End Here -->