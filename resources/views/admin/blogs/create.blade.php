@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.blogs.store') }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="row">
                        {{ csrf_field() }} 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_blog">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name_blog" id="name_blog" placeholder="Name Blog" class="form-control" value="{{ old('name_blog') }}">
                            </div>
                            <div class="form-group">
                                <label for="name_creator">Creator <span class="text-danger">*</span></label>
                                <input type="text" name="name_creator" id="name_creator" placeholder="Creator" class="form-control" value="{{ old('name_creator') }}">
                            </div>
                            <div class="form-group">
                                <label for="description_short">Description short - Max 150 Characters</label>
                                <textarea class="form-control ckeditor" name="description_short" id="description_short" rows="5" placeholder="Description">{{ old('description_short') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Description </label>
                                <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="cover">Cover </label>
                                <input type="file" name="cover" id="cover" class="form-control">
                            </div>
                            <!-- 
                            <div class="form-group">
                                <label for="image">Images</label>
                                <input type="file" name="image[]" id="image" class="form-control" multiple>
                                <span class="text-warning">You can use ctr (cmd) to select multiple images</span>
                            </div>
                            -->
                            <div class="form-group">
                                <label for="src_video1">Video 1 <span class="text-danger">*</span></label>
                                <input type="text" name="src_video1" id="src_video1" placeholder="https://www.youtube.com/playlist?list=PLQqX8aKGHZ3HdskDWHss9poPRecOOhjh0" class="form-control" value="{{ old('src_video1') }}">

                                <br>
                                Ej: Lista de Reproducción
                                <ul>                                            
                                    <li>https://www.youtube.com/playlist?list=PLQqX8aKGHZ3HdskDWHss9poPRecOOhjh0</li>
                                </ul>

                                Ej: Solo un video
                                <ul>
                                    <li>https://www.youtube.com/watch?v=zD4PFBt3cIg</li>
                                </ul>
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="src_video2">Video 2 <span class="text-danger">*</span></label>
                                <input type="text" name="src_video2" id="src_video2" placeholder="Link video 2" class="form-control" value="{ old('src_video2') }}">
                            </div>
                            <div class="form-group">
                                <label for="src_video3">Video 3 <span class="text-danger">*</span></label>
                                <input type="text" name="src_video3" id="src_video3" placeholder="Link video 3" class="form-control" value="{ old('src_video3') }}">
                            </div>
                            <div class="form-group">
                                <label for="src_video4">Video 4 <span class="text-danger">*</span></label>
                                <input type="text" name="src_video4" id="src_video4" placeholder="Link video 4" class="form-control" value="{ old('src_video4') }}">
                            </div>
                            -->
                            
                            <div class="form-group">
                                <label for="status">Status </label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">Disable</option>
                                    <option value="1">Enable</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection

@section('js')
<script type="text/javascript">
    CKEDITOR.plugins.addExternal( 'charcount', '/js/ckeditor/cke-charcount-plugin.js', '' );
    
    CKEDITOR.replace('description_short', {
     extraPlugins: 'charcount', 
     maxLength: 151, 
     toolbar_CharCount: ['CharCount']
    });

    CKEDITOR.replace('description', {
     extraPlugins: 'charcount', 
     maxLength: 0,
     toolbar_CharCount: ['CharCount']
    });

</script>
@endsection
