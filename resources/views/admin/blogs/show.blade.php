@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($blog)
            <div class="box">
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default btn-sm">Back</a>
                    </div>
                </div>
                <div class="box-body">                    
                    <h3>Name</h3> 
                        <h4>{{ $blog->name_blog }}</h4>
                    <h3>Creator</h3>
                        <h4>{{ $blog->name_creator }}</h4>
                    <h3>Link Video</h3>
                        <h4>{{ $blog->src_video1 }}</h4>
                    <h3>Cover</h3>
                        @if(isset($blog->cover))
                            <img src="{{ asset("storage/$blog->cover") }}" class="img-responsive" alt="">
                        @endif                       
                    <h3>Description short</h3>    
                        {!! $blog->description_short !!}
                    <h3>Description</h3>
                        {!! $blog->description !!}
                </div>
            </div>
            <!-- /.box -->
        @endif
    </section>
    <!-- /.content -->
@endsection
