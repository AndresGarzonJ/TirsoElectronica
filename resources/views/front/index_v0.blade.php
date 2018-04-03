@extends('layouts.front.app')

@section('og')
    <!--
        El Open Graph Protocol es un método simple que nos permite incluir meta información en nuestra página web y así convertirla en un objeto Social Graph, una vez siendo un objeto puede interactuar con otros objetos Social Graph como el share de Google+ o el like de Facebook de modo correcto.
    -->
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection
 
@section('content')
    @include('layouts.front.home-slider')

    @if(!is_null($newests))
        <section class="new-product t100 home">
            <div class="container">
                <div class="section-title b50">
                    <h2>Newest Products</h2>
                </div>
                @include('front.products.product-list', ['products' => $newests])
                <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $category2->slug) }}" role="button">browse all items</a></div>
            </div>
        </section>
    @endif
    <hr>
    @if(!is_null($features))
        <div class="container">
            <div class="section-title b100">
                <h2>Featured Products</h2>
            </div>
            @include('front.products.product-list', ['products' => $features])
            <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $category3->slug) }}" role="button">browse all items</a></div>
        </div>
    @endif
    <hr />
    @include('mailchimp::mailchimp')
@endsection