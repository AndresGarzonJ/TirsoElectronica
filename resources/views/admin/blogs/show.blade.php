@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($blog)
            <div class="box">
                <div class="box-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-3">Creator</td>
                            <td class="col-md-3">Cover</td>
                            <td class="col-md-2">Description</td>
                            <td class="col-md-2">Link videos</td>
                        </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>{{ $blog->name_blog }}</td>
                                <td>{{ $blog->name_creator }}</td>
                                <td>
                                    @if(isset($blog->cover))
                                        <img src="{{ asset("storage/$blog->cover") }}" class="img-responsive" alt="">
                                    @endif
                                </td>
                                <td>{{ $blog->description_short }}</td>
                                <td>
                                    {{ $blog->src_video1 }} <br>                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default btn-sm">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
