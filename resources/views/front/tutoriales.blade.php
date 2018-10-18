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
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-area">
                        <h1>Tutoriales/Blogs</h1>
                        <ul>
                            <li><a href="/">Home</a> /</li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Blog Page Area Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    @include('layouts.front.blog-side-right') 
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        @if(!is_null($blogs)) 
                            @include('front.blogs.blog-list', ['blogs' => $blogs, 'form_list' => "grid"])                            
                        @endif
                    </div>                    
                </div>                
            </div>
        </div>
    </div>    
@endsection


@section('js')
        
@endsection