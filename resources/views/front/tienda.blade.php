@extends('layouts.front.app')

@section('css')
   
@endsection 
 
@section('og')
    <!--
        El Open Graph Protocol es un método simple que nos permite incluir meta información en nuestra página web y así convertirla en un objeto Social Graph, una vez siendo un objeto puede interactuar con otros objetos Social Graph como el share de Google+ o el like de Facebook de modo correcto.
    -->
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
</header>

    <!-- Services1 Area Start Here -->
    <div class="services1-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <span class="title-bar-left"></span>
                        <h2>Categorias</h2>
                        <span class="title-bar-right"></span>
                    </div>
                </div> 
            </div> 
            <div class="row featuredContainer">
                @foreach ($listAllCategories as $category)
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="product-box1">
                            <div class="services-area-box">
                                <div class="media">
                                    <a class="pull-left" href="{{ route('front.category.slug', $category->slug) }}">
                                        @if(isset($category->cover))
                                            <img src="{{ asset("storage/$category->cover") }}" alt="{{ $category->name }}" class="img-responsive">
                                        @else
                                            <img src="https://placehold.it/1200x200" alt="{{ $category->cover }}" class="img-responsive" />
                                        @endif
                                    </a>
                                    
                                    <div class="product-content-holder">
                                        <h3><a href="{{ route('front.category.slug', $category->slug) }}" >{{ $category->name }}</a>
                                        </h3>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach                
            </div>
        </div>
    </div>
    <!-- Services1 Area End Here -->
    

    <div class="col-md-12">
      @include('front.products.product-list', [
        'products' => $productsTags,
        'form_list' => "grid_tags"
        ])
    </div>

    <!-- Solid Divider Area Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="solid-divider"></div>
            </div>
        </div>
    </div>
    
    
@endsection

<!--  Suscribete a mi pagina
include('mailchimp::mailchimp')
-->

@section('js')
        
@endsection