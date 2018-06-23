@if(!$blogs->isEmpty())
    <table class="table" id="listBlogs" name="listBlogs">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Creator</td>                
                <td>Status</td>
                <td>Actions</td> 
            </tr>
        </thead> 
        <tbody>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td><a href="{{ route('admin.blogs.show', $blog->id) }}">{{ $blog->name_blog }}</a></td>
                <td>{{ $blog->name_creator}}</td>               
                <td>@include('layouts.status', ['status' => $blog->status])</td>
                <td>
                    <!--
                    <form action="{ route('admin.blogs.destroy', $blog->id) }}" method="post" class="form-horizontal">
                        { csrf_field() }}
                    -->
                    <form class="form-horizontal">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="delete">
                        <div class="btn-group">
                            <a href="{{ route('front.get.blog', str_slug($blog->slug)) }}"  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Ver</a>
                            
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            
                            <!-- 
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                            -->

                            <a onclick="deleteBlog('{{route('admin.blog.delete')  }}','<?php  echo $blog->id; ?>')"  class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</a> 

                        </div>
                    <!--
                    </form>
                    -->
                </td>
            </tr>
        @endforeach 
        </tbody>
    </table>
    
@endif

@section('js')
<script  type="text/javascript" charset="utf-8" async defer>
     function deleteBlog(ruta,blog_id) {
            
            if(confirm('Esta seguro?')){
                $.ajax({
                   url: ruta,
                   type: "get", //send it through get method
                   data: {
                        id : blog_id 
                   },
                   success: function(response) {
                        console.log('Deleted blog');
                        $('#listBlogs').load(location.href + ' #listBlogs');
                        //location.hash="myId";
                        //Animacion de la pagina.. para que se mueva-scroll
                        /*
                        $('html, body').animate({
                         scrollTop: $("#listBlogs").offset().top
                        }, 1000);
                        */
                   },
                   error: function(xhr) {
                        console.log('Error deleted');
                        console.log(xhr);
                   }
                 });//End ajax
            }
            else{  }
 
          }
</script>   
@endsection
