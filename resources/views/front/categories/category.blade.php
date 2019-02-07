@extends('layouts.front.app')

@section('og')

    @if(isset($category->name))
        <meta property="og:type" content="category"/>
        <meta property="og:title" content="{{ $category->name }}"/>
        <meta property="og:description" content="{{ $category->description }}"/>
        @if(!is_null($category->cover))
            <meta property="og:image" content="{{ asset("storage/$category->cover") }}"/>
        @endif
    @else
        <meta property="og:type" content="category"/>
        <meta property="og:title" content="{{ $nameNovelty }}"/>
        <meta property="og:description" content="Las mejores promociones del mundo de la electrónica"/>
        <meta property="og:image" content="{{ asset("fondo_novedad.jpg") }}
        
    @endif
@endsection

@section('content')
    <div class="container"> 

        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            @if(isset($category->name))
                                <h1>{{ $category->name }}</h1>
                            @else
                                <h1>{{ $nameNovelty }}</h1>
                            @endif
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a> /</li>
                                <li><a href="#">Category</a> /</li>
                                
                                @if(isset($category->name))
                                    <li>{{ $category->name }}</li>
                                @else
                                    <li>{{ $nameNovelty }}</li>
                                @endif
                            </ul>
                            <!--
                                <div class="category-image">
                                    if(isset($category->cover))
                                        <img src="{ asset("storage/$category->cover") }}" alt="{ $category->name }}" class="img-responsive" />
                                    else
                                        <img src="https://placehold.it/1200x200" alt="{ $category->cover }}" class="img-responsive" />
                                    endif
                                </div>

                            -->
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-3 col-md-3">
            @include('front.categories.sidebar-category', ['products' => $products_sidebar])
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">            
            <div class="row">
                @include('front.products.product-list', ['products' => $products,
                                                        'form_list' => "grid"])
            </div>
        </div>
    </div>
@endsection