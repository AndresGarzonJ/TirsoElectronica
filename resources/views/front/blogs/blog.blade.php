@extends('layouts.front.app') 
 
@section('og')  
    <meta property="og:type" content="blog"/>
    <meta property="og:title" content="{{ $blog->name_blog }}"/>
    <meta property="og:description" content="{{ strip_tags($blog->description) }}"/>
    @if(!is_null($blog->cover))
        <meta property="og:image" content="{{ asset("storage/$blog->cover") }}"/>
    @endif
@endsection 

@section('content')
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-area">
                        <h1>Blog Details</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a> /</li>
                            <li><a href="#">Category</a> /</li>
                            <li>Blog /</li>
                            <li>Details</li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>

        {{ $blog->name_blog}} <br>
        {{ $blog->name_creator }}<br>
        {{ $blog->slug}}<br>
        {{ $blog->description}}<br>
        {{ $blog->cover}}<br>
        {{ $blog->src_video1}}<br>
        {{ $blog->src_video2}}<br>
        {{ $blog->src_video3}}<br>
        {{ $blog->src_video4}}<br>

        <h1>xxxxxxxxxxxxxxx</h1>

        @include('layouts.front.blog') 


@endsection