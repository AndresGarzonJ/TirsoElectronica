@extends('layouts.front.app') 
 
@section('og')  
    <meta property="og:type" content="product"/>
    <meta property="og:title" content="{{ $product->name }}"/>
    <meta property="og:description" content="{{ strip_tags($product->description) }}"/>
    @if(!is_null($product->cover))
        <meta property="og:image" content="{{ asset("storage/$product->cover") }}"/>
    @endif
@endsection 

@section('content')
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-area">
                        <h1>Product Details</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a> /</li>
                            <li><a href="#">Category</a> /</li>
                            <li>Product /</li>
                            <li>Details</li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- products/features -- Aqui se deberian de pasar los produtos destacados o relacionados ------------ -->
    <!-- categories - selectedIds -- Estas variables son necesarias para mostrar el producto a que categoria pertenece -->
    @include('layouts.front.product',
        [
            'categories' => $categories,
            'selectedIds' => $selectedIds,
            'productAttributes' => $productAttributes            
        ])    
@endsection